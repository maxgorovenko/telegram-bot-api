<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultDocument extends InlineQueryResult
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
    private $caption;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $document_url;

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
     * @return string
     */
    public function getDocumentUrl()
    {
        return $this->document_url;
    }

    /**
     * @param string $document_url
     */
    public function setDocumentUrl($document_url)
    {
        $this->document_url = $document_url;
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