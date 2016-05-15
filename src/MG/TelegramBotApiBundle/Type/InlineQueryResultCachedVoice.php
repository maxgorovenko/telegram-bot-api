<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultCachedVoice extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $voice_file_id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $title;


    /**
     * @return string
     */
    public function getVoiceFileId()
    {
        return $this->voice_file_id;
    }

    /**
     * @param string $voice_file_id
     */
    public function setVoiceFileId($voice_file_id)
    {
        $this->voice_file_id = $voice_file_id;
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
}