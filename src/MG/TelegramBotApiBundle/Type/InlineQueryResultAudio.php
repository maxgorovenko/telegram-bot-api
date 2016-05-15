<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultAudio extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $audio_url;

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
    private $performer;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $audio_duration;


    /**
     * @return string
     */
    public function getAudioUrl()
    {
        return $this->audio_url;
    }

    /**
     * @param string $audio_url
     */
    public function setAudioUrl($audio_url)
    {
        $this->audio_url = $audio_url;
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
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param string $performer
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
    }

    /**
     * @return int
     */
    public function getAudioDuration()
    {
        return $this->audio_duration;
    }

    /**
     * @param int $audio_duration
     */
    public function setAudioDuration($audio_duration)
    {
        $this->audio_duration = $audio_duration;
    }
}