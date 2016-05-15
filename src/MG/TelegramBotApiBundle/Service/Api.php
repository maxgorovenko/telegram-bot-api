<?php

namespace MG\TelegramBotApiBundle\Service;

use JMS\Serializer\Serializer;
use MG\TelegramBotApiBundle\Exception\UnsuccessfulRequestException;
use MG\TelegramBotApiBundle\Type\File;
use MG\TelegramBotApiBundle\Type\ForceReply;
use MG\TelegramBotApiBundle\Type\InlineKeyboardMarkup;
use MG\TelegramBotApiBundle\Type\InlineQueryResult;
use MG\TelegramBotApiBundle\Type\InputFile;
use MG\TelegramBotApiBundle\Type\Message;
use MG\TelegramBotApiBundle\Type\ReplyKeyboardHide;
use MG\TelegramBotApiBundle\Type\ReplyKeyboardMarkup;
use MG\TelegramBotApiBundle\Type\Update;
use MG\TelegramBotApiBundle\Type\User;
use MG\TelegramBotApiBundle\Type\UserProfilePhotos;

class Api
{
    /** @var string */
    private $token;

    /** @var resource */
    private $curl;

    /** @var Serializer */
    private $serializer;


    /**
     * @param string $token
     * @param Serializer $serializer
     */
    public function __construct($token, Serializer $serializer)
    {
        $this->token = $token;
        $this->serializer = $serializer;
    }

    /**
     * Close curl if exists
     */
    public function __destruct()
    {
        if (null !== $this->curl) {
            curl_close($this->curl);
        }
    }

    /**
     * @return resource
     */
    private function getCurl()
    {
        if (null === $this->curl) {
            $this->curl = curl_init();
            curl_setopt_array($this->curl, [
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CONNECTTIMEOUT => 10,
                CURLOPT_TIMEOUT => 10,
            ]);
        }

        return $this->curl;
    }

    /**
     * @param string $method
     * @param array $params
     * @param string $returnType
     * @param bool $allowEmpty for long polling
     * @return mixed
     * @throws UnsuccessfulRequestException
     * @throws \Exception
     */
    private function post($method, $params, $returnType = null, $allowEmpty = false)
    {
        foreach ($params as $name => $param) {
            if (null === $param) {
                unset($params[$name]);
            }
        }

        curl_setopt_array($this->getCurl(), [
            CURLOPT_URL => "https://api.telegram.org/bot{$this->token}/{$method}",
            CURLOPT_POSTFIELDS => $params
        ]);

        return $this->parseResponse(curl_exec($this->getCurl()), $returnType, $allowEmpty);
    }

    /**
     * @param string $response
     * @param string $returnType
     * @param bool $allowEmpty
     * @return mixed
     * @throws UnsuccessfulRequestException
     * @throws \Exception
     */
    private function parseResponse($response, $returnType, $allowEmpty)
    {
        if ($allowEmpty && !$response) {
            return null;
        }

        $data = json_decode($response, true);

        if (null === $data) {
            throw new \Exception("Cannot json_decode response: '{$response}'");
        }

        if (!isset($data['ok']) || true !== $data['ok']) {
            throw new UnsuccessfulRequestException($data);
        }

        if (null === $returnType) {
            return true;
        }

        if (!isset($data['result'])) {
            throw new \Exception("Missing result field in response: '{$response}'");
        }

        return $this->serializer->deserialize(json_encode($data['result']), $returnType, 'json');
    }

    /** ## API METHODS ## */

    /**
     * @param int $offset Identifier of the first update to be returned.
     * @param int $limit Values between 1—100 are accepted
     * @param int $timeout Timeout in seconds for long polling
     * @return Update[]|null
     */
    public function getUpdates($offset = null, $limit = null, $timeout = null)
    {
        return $this->post(
            'getUpdates',
            [
                'offset' => $offset,
                'limit' => $limit,
                'timeout' => $timeout,
            ],
            'array<'.Update::class.'>',
            true
        );
    }

    /**
     * @param string $url
     * @param InputFile $certificate
     */
    public function setWebhook($url = null, $certificate = null)
    {
        //todo
    }

    /**
     * @return User
     */
    public function getMe()
    {
        return $this->post('getMe', [], User::class);
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param string $text Text of the message to be sent
     * @param string $parse_mode Send 'Markdown' or 'HTML'
     * @param bool $disable_web_page_preview Disables link previews for links in this message
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendMessage($chat_id, $text, $parse_mode = null, $disable_web_page_preview = null,
        $disable_notification = null, $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendMessage',
            [
                'chat_id' => $chat_id,
                'text' => $text,
                'parse_mode' => $parse_mode,
                'disable_web_page_preview' => $disable_web_page_preview,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param int|string $from_chat_id Unique identifier for the chat where the original message was sent
     * (or channel username in the format @channelusername)
     * @param int $message_id Unique message identifier
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @return Message
     */
    public function forwardMessage($chat_id, $from_chat_id, $message_id, $disable_notification = null)
    {
        return $this->post(
            'forwardMessage',
            [
                'chat_id' => $chat_id,
                'from_chat_id' => $from_chat_id,
                'message_id' => $message_id,
                'disable_notification' => $disable_notification,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param InputFile|string $photo Photo to send. You can either pass a file_id as String to resend a photo
     * that is already on the Telegram servers, or upload a new photo using multipart/form-data.
     * @param string $caption Photo caption (may also be used when resending photos by file_id), 0-200 characters
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendPhoto($chat_id, $photo, $caption = null, $disable_notification = null,
        $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendPhoto',
            [
                'chat_id' => $chat_id,
                'photo' => $photo, //todo
                'caption' => $caption,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param InputFile|string $audio Audio file to send. You can either pass a file_id as String to resend an audio
     * that is already on the Telegram servers, or upload a new audio file using multipart/form-data.
     * @param int $duration Duration of the audio in seconds
     * @param string $performer Performer
     * @param string $title Track name
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendAudio($chat_id, $audio, $duration = null, $performer = null, $title = null,
        $disable_notification = null, $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendAudio',
            [
                'chat_id' => $chat_id,
                'audio' => $audio, //todo
                'duration' => $duration,
                'performer' => $performer,
                'title' => $title,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param InputFile|string $document File to send. You can either pass a file_id as String to resend a file
     * that is already on the Telegram servers, or upload a new file using multipart/form-data.
     * @param string $caption Document caption (may also be used when resending documents by file_id), 0-200 characters
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendDocument($chat_id, $document, $caption = null, $disable_notification = null,
        $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendDocument',
            [
                'chat_id' => $chat_id,
                'document' => $document, //todo
                'caption' => $caption,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param InputFile|string $sticker Sticker to send. You can either pass a file_id as String to resend a sticker
     * that is already on the Telegram servers, or upload a new sticker using multipart/form-data.
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendSticker($chat_id, $sticker, $disable_notification = null, $reply_to_message_id = null,
        $reply_markup = null)
    {
        return $this->post(
            'sendSticker',
            [
                'chat_id' => $chat_id,
                'sticker' => $sticker, //todo
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param InputFile|string $video Video to send. You can either pass a file_id as String to resend a video
     * that is already on the Telegram servers, or upload a new video file using multipart/form-data.
     * @param int $duration Duration of sent video in seconds
     * @param int $width Video width
     * @param int $height Video height
     * @param string $caption Video caption (may also be used when resending videos by file_id), 0-200 characters
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendVideo($chat_id, $video, $duration = null, $width = null, $height = null, $caption = null,
        $disable_notification = null, $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendVideo',
            [
                'chat_id' => $chat_id,
                'video' => $video, //todo
                'duration' => $duration,
                'width' => $width,
                'height' => $height,
                'caption' => $caption,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param InputFile|string $voice Audio file to send. You can either pass a file_id as String to resend an audio
     * that is already on the Telegram servers, or upload a new audio file using multipart/form-data.
     * @param int $duration Duration of sent audio in seconds
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendVoice($chat_id, $voice, $duration = null, $disable_notification = null,
        $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendVoice',
            [
                'chat_id' => $chat_id,
                'voice' => $voice, //todo
                'duration' => $duration,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param float $latitude Latitude of location
     * @param float $longitude Longitude of location
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendLocation($chat_id, $latitude, $longitude, $disable_notification = null,
        $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendLocation',
            [
                'chat_id' => $chat_id,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param float $latitude Latitude of the venue
     * @param float $longitude Longitude of the venue
     * @param string $title Name of the venue
     * @param string $address Address of the venue
     * @param string $foursquare_id Foursquare identifier of the venue
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendVenue($chat_id, $latitude, $longitude, $title, $address, $foursquare_id = null,
        $disable_notification = null, $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendVenue',
            [
                'chat_id' => $chat_id,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'title' => $title,
                'address' => $address,
                'foursquare_id' => $foursquare_id,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param string $last_name Contact's last name
     * @param bool $disable_notification Sends the message silently. iOS users will not receive a notification,
     * Android users will receive a notification with no sound.
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to hide reply keyboard or to force a reply from the user.
     * @return Message
     */
    public function sendContact($chat_id, $phone_number, $first_name, $last_name = null, $disable_notification = null,
        $reply_to_message_id = null, $reply_markup = null)
    {
        return $this->post(
            'sendContact',
            [
                'chat_id' => $chat_id,
                'phone_number' => $phone_number,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'disable_notification' => $disable_notification,
                'reply_to_message_id' => $reply_to_message_id,
                'reply_markup' => $reply_markup ? $this->serializer->serialize($reply_markup, 'json') : null,
            ],
            Message::class
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     * @param string $action Type of action to broadcast. Choose one, depending on what the user is about to receive:
     *  'typing' for text messages,
     *  'upload_photo' for photos,
     *  'record_video' or 'upload_video' for videos,
     *  'record_audio' or 'upload_audio' for audio files,
     *  'upload_document' for general files,
     *  'find_location' for location data
     * @return bool
     */
    public function sendChatAction($chat_id, $action)
    {
        return $this->post(
            'sendChatAction',
            [
                'chat_id' => $chat_id,
                'action' => $action,
            ]
        );
    }

    /**
     * @param int $user_id Unique identifier of the target user
     * @param int $offset Sequential number of the first photo to be returned. By default, all photos are returned
     * @param int $limit Limits the number of photos to be retrieved. Values between 1—100 are accepted. Defaults to 100
     * @return UserProfilePhotos
     */
    public function getUserProfilePhotos($user_id, $offset = null, $limit = null)
    {
        return $this->post(
            'getUserProfilePhotos',
            [
                'user_id' => $user_id,
                'offset' => $offset,
                'limit' => $limit,
            ],
            UserProfilePhotos::class
        );
    }

    /**
     * @param string $file_id File identifier to get info about
     * @return File
     */
    public function getFile($file_id)
    {
        return $this->post('getFile', ['file_id' => $file_id], File::class);
    }

    /**
     * @param int|string $chat_id Unique identifier for the target group or username of the target supergroup
     * (in the format @supergroupusername)
     * @param int $user_id Unique identifier of the target user
     * @return bool
     */
    public function kickChatMember($chat_id, $user_id)
    {
        return $this->post(
            'kickChatMember',
            [
                'chat_id' => $chat_id,
                'user_id' => $user_id,
            ],
            'boolean'
        );
    }

    /**
     * @param int|string $chat_id Unique identifier for the target group or username of the target supergroup
     * (in the format @supergroupusername)
     * @param int $user_id Unique identifier of the target user
     * @return bool
     */
    public function unbanChatMember($chat_id, $user_id)
    {
        return $this->post(
            'unbanChatMember',
            [
                'chat_id' => $chat_id,
                'user_id' => $user_id,
            ],
            'boolean'
        );
    }

    /**
     * @param string $callback_query_id Unique identifier for the query to be answered
     * @param string $text Text of the notification. If not specified, nothing will be shown to the user
     * @param bool $show_alert If true, an alert will be shown by the client instead of a notification at the top
     * of the chat screen. Defaults to false.
     * @return bool
     */
    public function answerCallbackQuery($callback_query_id, $text = null, $show_alert = null)
    {
        return $this->post(
            'answerCallbackQuery',
            [
                'callback_query_id' => $callback_query_id,
                'text' => $text,
                'show_alert' => $show_alert,
            ],
            'boolean'
        );
    }

    /**
     * @param string $inline_query_id Unique identifier for the answered query
     * @param InlineQueryResult[] $results A JSON-serialized array of results for the inline query.
     * No more than 50 results per query are allowed.
     * @param int $cache_time The maximum amount of time in seconds that the result of the inline query may be cached
     * on the server. Defaults to 300.
     * @param bool $is_personal Pass True, if results may be cached on the server side only for the user that sent
     * the query. By default, results may be returned to any user who sends the same query
     * @param string $next_offset Pass the offset that a client should send in the next query with the same text
     * to receive more results. Pass an empty string if there are no more results or if you don‘t support pagination.
     * Offset length can’t exceed 64 bytes.
     * @param string $switch_pm_text If passed, clients will display a button with specified text that switches
     * the user to a private chat with the bot and sends the bot a start message with the parameter switch_pm_parameter
     * @param string $switch_pm_parameter Parameter for the start message sent to the bot when user presses
     * the switch button
     * @return bool
     */
    public function answerInlineQuery($inline_query_id, $results, $cache_time = null, $is_personal = null,
        $next_offset = null, $switch_pm_text = null, $switch_pm_parameter = null)
    {
        return $this->post(
            'answerInlineQuery',
            [
                'inline_query_id' => $inline_query_id,
                'results' => $this->serializer->serialize($results, 'json'),
                'cache_time' => $cache_time,
                'is_personal' => $is_personal,
                'next_offset' => $next_offset,
                'switch_pm_text' => $switch_pm_text,
                'switch_pm_parameter' => $switch_pm_parameter,
            ],
            'boolean'
        );
    }
}