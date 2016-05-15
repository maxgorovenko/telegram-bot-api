<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultVoice extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $voice_url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $title;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $voice_duration;


    /**
     * @return string
     */
    public function getVoiceUrl()
    {
        return $this->voice_url;
    }

    /**
     * @param string $voice_url
     */
    public function setVoiceUrl($voice_url)
    {
        $this->voice_url = $voice_url;
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
     * @return int
     */
    public function getVoiceDuration()
    {
        return $this->voice_duration;
    }

    /**
     * @param int $voice_duration
     */
    public function setVoiceDuration($voice_duration)
    {
        $this->voice_duration = $voice_duration;
    }
}