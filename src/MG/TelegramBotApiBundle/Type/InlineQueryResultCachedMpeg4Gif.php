<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultCachedMpeg4Gif extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $mpeg4_file_id;

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
    public function getMpeg4FileId()
    {
        return $this->mpeg4_file_id;
    }

    /**
     * @param string $mpeg4_file_id
     */
    public function setMpeg4FileId($mpeg4_file_id)
    {
        $this->mpeg4_file_id = $mpeg4_file_id;
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