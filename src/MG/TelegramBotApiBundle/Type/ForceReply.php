<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class ForceReply
{
    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $force_reply;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $selective;


    /**
     * @return mixed
     */
    public function getForceReply()
    {
        return $this->force_reply;
    }

    /**
     * @param mixed $force_reply
     */
    public function setForceReply($force_reply)
    {
        $this->force_reply = $force_reply;
    }

    /**
     * @return mixed
     */
    public function getSelective()
    {
        return $this->selective;
    }

    /**
     * @param mixed $selective
     */
    public function setSelective($selective)
    {
        $this->selective = $selective;
    }
}