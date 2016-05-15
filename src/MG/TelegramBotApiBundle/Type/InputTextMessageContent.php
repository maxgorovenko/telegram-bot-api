<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InputTextMessageContent extends InputMessageContent
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $message_text;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $parse_mode;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $disable_web_page_preview;


    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->message_text;
    }

    /**
     * @param string $message_text
     */
    public function setMessageText($message_text)
    {
        $this->message_text = $message_text;
    }

    /**
     * @return string
     */
    public function getParseMode()
    {
        return $this->parse_mode;
    }

    /**
     * @param string $parse_mode
     */
    public function setParseMode($parse_mode)
    {
        $this->parse_mode = $parse_mode;
    }

    /**
     * @return boolean
     */
    public function isDisableWebPagePreview()
    {
        return $this->disable_web_page_preview;
    }

    /**
     * @param boolean $disable_web_page_preview
     */
    public function setDisableWebPagePreview($disable_web_page_preview)
    {
        $this->disable_web_page_preview = $disable_web_page_preview;
    }
}