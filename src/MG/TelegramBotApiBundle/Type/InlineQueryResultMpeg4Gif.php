<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $mpeg4_url;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $mpeg4_width;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $mpeg4_height;

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
    public function getMpeg4Url()
    {
        return $this->mpeg4_url;
    }

    /**
     * @param string $mpeg4_url
     */
    public function setMpeg4Url($mpeg4_url)
    {
        $this->mpeg4_url = $mpeg4_url;
    }

    /**
     * @return int
     */
    public function getMpeg4Width()
    {
        return $this->mpeg4_width;
    }

    /**
     * @param int $mpeg4_width
     */
    public function setMpeg4Width($mpeg4_width)
    {
        $this->mpeg4_width = $mpeg4_width;
    }

    /**
     * @return int
     */
    public function getMpeg4Height()
    {
        return $this->mpeg4_height;
    }

    /**
     * @param int $mpeg4_height
     */
    public function setMpeg4Height($mpeg4_height)
    {
        $this->mpeg4_height = $mpeg4_height;
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