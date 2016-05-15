<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultArticle extends InlineQueryResult
{
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
    private $url;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $hide_url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $thumb_url;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $thumb_width;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $thumb_height;


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
     * @return boolean
     */
    public function isHideUrl()
    {
        return $this->hide_url;
    }

    /**
     * @param boolean $hide_url
     */
    public function setHideUrl($hide_url)
    {
        $this->hide_url = $hide_url;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return int
     */
    public function getThumbWidth()
    {
        return $this->thumb_width;
    }

    /**
     * @param int $thumb_width
     */
    public function setThumbWidth($thumb_width)
    {
        $this->thumb_width = $thumb_width;
    }

    /**
     * @return int
     */
    public function getThumbHeight()
    {
        return $this->thumb_height;
    }

    /**
     * @param int $thumb_height
     */
    public function setThumbHeight($thumb_height)
    {
        $this->thumb_height = $thumb_height;
    }
}