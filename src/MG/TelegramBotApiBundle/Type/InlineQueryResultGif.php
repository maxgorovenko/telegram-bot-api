<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultGif extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $gif_url;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $gif_width;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $gif_height;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $thumb_url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $title;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $caption;


    /**
     * @return string
     */
    public function getGifUrl()
    {
        return $this->gif_url;
    }

    /**
     * @param string $gif_url
     */
    public function setGifUrl($gif_url)
    {
        $this->gif_url = $gif_url;
    }

    /**
     * @return int
     */
    public function getGifWidth()
    {
        return $this->gif_width;
    }

    /**
     * @param int $gif_width
     */
    public function setGifWidth($gif_width)
    {
        $this->gif_width = $gif_width;
    }

    /**
     * @return int
     */
    public function getGifHeight()
    {
        return $this->gif_height;
    }

    /**
     * @param int $gif_height
     */
    public function setGifHeight($gif_height)
    {
        $this->gif_height = $gif_height;
    }

    /**
     * @return string
     */
    public function getThumbUrl()
    {
        return $this->thumb_url;
    }

    /**
     * @param string $thumb_url
     */
    public function setThumbUrl($thumb_url)
    {
        $this->thumb_url = $thumb_url;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
}