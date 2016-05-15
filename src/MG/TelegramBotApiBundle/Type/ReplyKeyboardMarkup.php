<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class ReplyKeyboardMarkup
{
    /**
     * @var KeyboardButton[][]
     *
     * @JMS\Type("array<array<MG\TelegramBotApiBundle\Type\KeyboardButton>>")
     */
    private $keyboard;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $resize_keyboard;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $one_time_keyboard;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $selective;


    /**
     * @return KeyboardButton[][]
     */
    public function getKeyboard()
    {
        return $this->keyboard;
    }

    /**
     * @param KeyboardButton[][] $keyboard
     */
    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @return boolean
     */
    public function isResizeKeyboard()
    {
        return $this->resize_keyboard;
    }

    /**
     * @param boolean $resize_keyboard
     */
    public function setResizeKeyboard($resize_keyboard)
    {
        $this->resize_keyboard = $resize_keyboard;
    }

    /**
     * @return boolean
     */
    public function isOneTimeKeyboard()
    {
        return $this->one_time_keyboard;
    }

    /**
     * @param boolean $one_time_keyboard
     */
    public function setOneTimeKeyboard($one_time_keyboard)
    {
        $this->one_time_keyboard = $one_time_keyboard;
    }

    /**
     * @return boolean
     */
    public function isSelective()
    {
        return $this->selective;
    }

    /**
     * @param boolean $selective
     */
    public function setSelective($selective)
    {
        $this->selective = $selective;
    }
}