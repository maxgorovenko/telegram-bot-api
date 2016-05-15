<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class CallbackQuery
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $id;

    /**
     * @var User
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\User")
     */
    private $from;

    /**
     * @var Message
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Message")
     */
    private $message;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $inline_message_id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $data;


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
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param Message $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getInlineMessageId()
    {
        return $this->inline_message_id;
    }

    /**
     * @param string $inline_message_id
     */
    public function setInlineMessageId($inline_message_id)
    {
        $this->inline_message_id = $inline_message_id;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}