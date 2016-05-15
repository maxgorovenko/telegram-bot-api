<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineKeyboardButton
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $text;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $callback_data;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $switch_inline_query;


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
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getCallbackData()
    {
        return $this->callback_data;
    }

    /**
     * @param string $callback_data
     */
    public function setCallbackData($callback_data)
    {
        $this->callback_data = $callback_data;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQuery()
    {
        return $this->switch_inline_query;
    }

    /**
     * @param string $switch_inline_query
     */
    public function setSwitchInlineQuery($switch_inline_query)
    {
        $this->switch_inline_query = $switch_inline_query;
    }
}