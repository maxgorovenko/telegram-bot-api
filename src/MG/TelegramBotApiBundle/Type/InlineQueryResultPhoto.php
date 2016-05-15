<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultPhoto extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $photo_url;

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
    private $photo_width;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $photo_height;

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
    private $description;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $caption;


    /**
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photo_url;
    }

    /**
     * @param string $photo_url
     */
    public function setPhotoUrl($photo_url)
    {
        $this->photo_url = $photo_url;
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
    public function getPhotoWidth()
    {
        return $this->photo_width;
    }

    /**
     * @param int $photo_width
     */
    public function setPhotoWidth($photo_width)
    {
        $this->photo_width = $photo_width;
    }

    /**
     * @return int
     */
    public function getPhotoHeight()
    {
        return $this->photo_height;
    }

    /**
     * @param int $photo_height
     */
    public function setPhotoHeight($photo_height)
    {
        $this->photo_height = $photo_height;
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