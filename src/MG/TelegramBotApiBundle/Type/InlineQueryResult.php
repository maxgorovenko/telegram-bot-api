<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $type;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $id;

    /**
     * @var InputMessageContent
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\InputMessageContent")
     */
    protected $input_message_content;

    /**
     * @var InlineKeyboardMarkup
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\InlineKeyboardMarkup")
     */
    protected $reply_markup;


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return InputMessageContent
     */
    public function getInputMessageContent()
    {
        return $this->input_message_content;
    }

    /**
     * @param InputMessageContent $input_message_content
     */
    public function setInputMessageContent($input_message_content)
    {
        $this->input_message_content = $input_message_content;
    }

    /**
     * @return InlineKeyboardMarkup
     */
    public function getReplyMarkup()
    {
        return $this->reply_markup;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     */
    public function setReplyMarkup($reply_markup)
    {
        $this->reply_markup = $reply_markup;
    }
}