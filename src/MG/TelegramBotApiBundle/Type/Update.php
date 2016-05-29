<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class Update
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $update_id;

    /**
     * @var Message
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Message")
     */
    private $message;

    /**
     * @var InlineQuery
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\InlineQuery")
     */
    private $inline_query;

    /**
     * @var ChosenInlineResult
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\ChosenInlineResult")
     */
    private $chosen_inline_result;

    /**
     * @var CallbackQuery
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\CallbackQuery")
     */
    private $callback_query;

    /**
     * @var Message
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Message")
     */
    private $edited_message;


    /**
     * @return int
     */
    public function getUpdateId()
    {
        return $this->update_id;
    }

    /**
     * @param int $update_id
     */
    public function setUpdateId($update_id)
    {
        $this->update_id = $update_id;
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
     * @return InlineQuery
     */
    public function getInlineQuery()
    {
        return $this->inline_query;
    }

    /**
     * @param InlineQuery $inline_query
     */
    public function setInlineQuery($inline_query)
    {
        $this->inline_query = $inline_query;
    }

    /**
     * @return ChosenInlineResult
     */
    public function getChosenInlineResult()
    {
        return $this->chosen_inline_result;
    }

    /**
     * @param ChosenInlineResult $chosen_inline_result
     */
    public function setChosenInlineResult($chosen_inline_result)
    {
        $this->chosen_inline_result = $chosen_inline_result;
    }

    /**
     * @return CallbackQuery
     */
    public function getCallbackQuery()
    {
        return $this->callback_query;
    }

    /**
     * @param CallbackQuery $callback_query
     */
    public function setCallbackQuery($callback_query)
    {
        $this->callback_query = $callback_query;
    }

    /**
     * @return Message
     */
    public function getEditedMessage()
    {
        return $this->edited_message;
    }

    /**
     * @param Message $edited_message
     */
    public function setEditedMessage($edited_message)
    {
        $this->edited_message = $edited_message;
    }
}