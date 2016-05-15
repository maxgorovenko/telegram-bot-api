<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultVideo extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $video_url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $mime_type;

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
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $video_width;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $video_height;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $video_duration;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $description;


    /**
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->video_url;
    }

    /**
     * @param string $video_url
     */
    public function setVideoUrl($video_url)
    {
        $this->video_url = $video_url;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * @param string $mime_type
     */
    public function setMimeType($mime_type)
    {
        $this->mime_type = $mime_type;
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

    /**
     * @return int
     */
    public function getVideoWidth()
    {
        return $this->video_width;
    }

    /**
     * @param int $video_width
     */
    public function setVideoWidth($video_width)
    {
        $this->video_width = $video_width;
    }

    /**
     * @return int
     */
    public function getVideoHeight()
    {
        return $this->video_height;
    }

    /**
     * @param int $video_height
     */
    public function setVideoHeight($video_height)
    {
        $this->video_height = $video_height;
    }

    /**
     * @return int
     */
    public function getVideoDuration()
    {
        return $this->video_duration;
    }

    /**
     * @param int $video_duration
     */
    public function setVideoDuration($video_duration)
    {
        $this->video_duration = $video_duration;
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
}