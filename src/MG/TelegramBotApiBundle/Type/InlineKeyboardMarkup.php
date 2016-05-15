<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineKeyboardMarkup
{
    /**
     * @var InlineKeyboardButton[][]
     *
     * @JMS\Type("array<array<MG\TelegramBotApiBundle\Type\InlineKeyboardButton>>")
     */
    private $inline_keyboard;


    /**
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard()
    {
        return $this->inline_keyboard;
    }

    /**
     * @param InlineKeyboardButton[][] $inline_keyboard
     */
    public function setInlineKeyboard($inline_keyboard)
    {
        $this->inline_keyboard = $inline_keyboard;
    }
}