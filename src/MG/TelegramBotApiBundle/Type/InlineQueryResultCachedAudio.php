<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultCachedAudio
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $audio_file_id;


    /**
     * @return string
     */
    public function getAudioFileId()
    {
        return $this->audio_file_id;
    }

    /**
     * @param string $audio_file_id
     */
    public function setAudioFileId($audio_file_id)
    {
        $this->audio_file_id = $audio_file_id;
    }
}