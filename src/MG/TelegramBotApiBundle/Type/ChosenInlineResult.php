<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class ChosenInlineResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $result_id;

    /**
     * @var User
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\User")
     */
    private $from;

    /**
     * @var Location
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\Location")
     */
    private $location;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $inline_message_id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $query;


    /**
     * @return string
     */
    public function getResultId()
    {
        return $this->result_id;
    }

    /**
     * @param string $result_id
     */
    public function setResultId($result_id)
    {
        $this->result_id = $result_id;
    }

    /**
     * @return User
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getInlineMessageId()
    {
        return $this->inline_message_id;
    }

    /**
     * @param string $inline_message_id
     */
    public function setInlineMessageId($inline_message_id)
    {
        $this->inline_message_id = $inline_message_id;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }
}