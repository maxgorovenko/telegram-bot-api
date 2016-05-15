<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class Voice
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
    private $duration;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $mime_type;

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
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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