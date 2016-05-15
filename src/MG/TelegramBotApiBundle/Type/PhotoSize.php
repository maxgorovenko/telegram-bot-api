<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class PhotoSize
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $file_id;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $width;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $height;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $file_size;


    /**
     * @return string
     */
    public function getFileId()
    {
        return $this->file_id;
    }

    /**
     * @param string $file_id
     */
    public function setFileId($file_id)
    {
        $this->file_id = $file_id;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * @param int $file_size
     */
    public function setFileSize($file_size)
    {
        $this->file_size = $file_size;
    }
}