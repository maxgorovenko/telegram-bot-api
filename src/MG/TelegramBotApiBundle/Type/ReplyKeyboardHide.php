<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class ReplyKeyboardHide
{
    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $hide_keyboard;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $selective;


    /**
     * @return boolean
     */
    public function isHideKeyboard()
    {
        return $this->hide_keyboard;
    }

    /**
     * @param boolean $hide_keyboard
     */
    public function setHideKeyboard($hide_keyboard)
    {
        $this->hide_keyboard = $hide_keyboard;
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