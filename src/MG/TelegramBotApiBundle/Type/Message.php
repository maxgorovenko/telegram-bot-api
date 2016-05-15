<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class Message
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $message_id;

    /**
     * @var User
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\User")
     */
    private $from;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $date;

    /**
     * @var Chat
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Chat")
     */
    private $chat;

    /**
     * @var User
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\User")
     */
    private $forward_from;

    /**
     * @var Chat
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Chat")
     */
    private $forward_from_chat;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $forward_date;

    /**
     * @var Message
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Message")
     */
    private $reply_to_message;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $text;

    /**
     * @var MessageEntity[]
     *
     * @JMS\Type("array<MG\TelegramBotApiBundle\Type\MessageEntity>")
     */
    private $entities;

    /**
     * @var Audio
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Audio")
     */
    private $audio;

    /**
     * @var Document
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Document")
     */
    private $document;

    /**
     * @var PhotoSize[]
     *
     * @JMS\Type("array<MG\TelegramBotApiBundle\Type\PhotoSize>")
     */
    private $photo;

    /**
     * @var Sticker
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Sticker")
     */
    private $sticker;

    /**
     * @var Video
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Video")
     */
    private $video;

    /**
     * @var Voice
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Voice")
     */
    private $voice;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $caption;

    /**
     * @var Contact
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Contact")
     */
    private $contact;

    /**
     * @var Location
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Location")
     */
    private $location;

    /**
     * @var Venue
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Venue")
     */
    private $venue;

    /**
     * @var User
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\User")
     */
    private $new_chat_member;

    /**
     * @var User
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\User")
     */
    private $left_chat_member;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $new_chat_title;

    /**
     * @var PhotoSize[]
     *
     * @JMS\Type("array<MG\TelegramBotApiBundle\Type\PhotoSize>")
     */
    private $new_chat_photo;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $delete_chat_photo;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $group_chat_created;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $supergroup_chat_created;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $channel_chat_created;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $migrate_to_chat_id;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $migrate_from_chat_id;

    /**
     * @var Message
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Message")
     */
    private $pinned_message;


    /**
     * @return int
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * @param int $message_id
     */
    public function setMessageId($message_id)
    {
        $this->message_id = $message_id;
    }

    /**
     * @return User
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return Chat
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * @param Chat $chat
     */
    public function setChat($chat)
    {
        $this->chat = $chat;
    }

    /**
     * @return User
     */
    public function getForwardFrom()
    {
        return $this->forward_from;
    }

    /**
     * @param User $forward_from
     */
    public function setForwardFrom($forward_from)
    {
        $this->forward_from = $forward_from;
    }

    /**
     * @return Chat
     */
    public function getForwardFromChat()
    {
        return $this->forward_from_chat;
    }

    /**
     * @param Chat $forward_from_chat
     */
    public function setForwardFromChat($forward_from_chat)
    {
        $this->forward_from_chat = $forward_from_chat;
    }

    /**
     * @return int
     */
    public function getForwardDate()
    {
        return $this->forward_date;
    }

    /**
     * @param int $forward_date
     */
    public function setForwardDate($forward_date)
    {
        $this->forward_date = $forward_date;
    }

    /**
     * @return Message
     */
    public function getReplyToMessage()
    {
        return $this->reply_to_message;
    }

    /**
     * @param Message $reply_to_message
     */
    public function setReplyToMessage($reply_to_message)
    {
        $this->reply_to_message = $reply_to_message;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return MessageEntity[]
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * @param MessageEntity[] $entities
     */
    public function setEntities($entities)
    {
        $this->entities = $entities;
    }

    /**
     * @return Audio
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param Audio $audio
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;
    }

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

    /**
     * @return PhotoSize[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param PhotoSize[] $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return Sticker
     */
    public function getSticker()
    {
        return $this->sticker;
    }

    /**
     * @param Sticker $sticker
     */
    public function setSticker($sticker)
    {
        $this->sticker = $sticker;
    }

    /**
     * @return Video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param Video $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * @return Voice
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * @param Voice $voice
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return Venue
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @param Venue $venue
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
    }

    /**
     * @return User
     */
    public function getNewChatMember()
    {
        return $this->new_chat_member;
    }

    /**
     * @param User $new_chat_member
     */
    public function setNewChatMember($new_chat_member)
    {
        $this->new_chat_member = $new_chat_member;
    }

    /**
     * @return User
     */
    public function getLeftChatMember()
    {
        return $this->left_chat_member;
    }

    /**
     * @param User $left_chat_member
     */
    public function setLeftChatMember($left_chat_member)
    {
        $this->left_chat_member = $left_chat_member;
    }

    /**
     * @return string
     */
    public function getNewChatTitle()
    {
        return $this->new_chat_title;
    }

    /**
     * @param string $new_chat_title
     */
    public function setNewChatTitle($new_chat_title)
    {
        $this->new_chat_title = $new_chat_title;
    }

    /**
     * @return PhotoSize[]
     */
    public function getNewChatPhoto()
    {
        return $this->new_chat_photo;
    }

    /**
     * @param PhotoSize[] $new_chat_photo
     */
    public function setNewChatPhoto($new_chat_photo)
    {
        $this->new_chat_photo = $new_chat_photo;
    }

    /**
     * @return boolean
     */
    public function isDeleteChatPhoto()
    {
        return $this->delete_chat_photo;
    }

    /**
     * @param boolean $delete_chat_photo
     */
    public function setDeleteChatPhoto($delete_chat_photo)
    {
        $this->delete_chat_photo = $delete_chat_photo;
    }

    /**
     * @return boolean
     */
    public function isGroupChatCreated()
    {
        return $this->group_chat_created;
    }

    /**
     * @param boolean $group_chat_created
     */
    public function setGroupChatCreated($group_chat_created)
    {
        $this->group_chat_created = $group_chat_created;
    }

    /**
     * @return boolean
     */
    public function isSupergroupChatCreated()
    {
        return $this->supergroup_chat_created;
    }

    /**
     * @param boolean $supergroup_chat_created
     */
    public function setSupergroupChatCreated($supergroup_chat_created)
    {
        $this->supergroup_chat_created = $supergroup_chat_created;
    }

    /**
     * @return boolean
     */
    public function isChannelChatCreated()
    {
        return $this->channel_chat_created;
    }

    /**
     * @param boolean $channel_chat_created
     */
    public function setChannelChatCreated($channel_chat_created)
    {
        $this->channel_chat_created = $channel_chat_created;
    }

    /**
     * @return int
     */
    public function getMigrateToChatId()
    {
        return $this->migrate_to_chat_id;
    }

    /**
     * @param int $migrate_to_chat_id
     */
    public function setMigrateToChatId($migrate_to_chat_id)
    {
        $this->migrate_to_chat_id = $migrate_to_chat_id;
    }

    /**
     * @return int
     */
    public function getMigrateFromChatId()
    {
        return $this->migrate_from_chat_id;
    }

    /**
     * @param int $migrate_from_chat_id
     */
    public function setMigrateFromChatId($migrate_from_chat_id)
    {
        $this->migrate_from_chat_id = $migrate_from_chat_id;
    }

    /**
     * @return Message
     */
    public function getPinnedMessage()
    {
        return $this->pinned_message;
    }

    /**
     * @param Message $pinned_message
     */
    public function setPinnedMessage($pinned_message)
    {
        $this->pinned_message = $pinned_message;
    }
}