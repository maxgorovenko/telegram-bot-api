<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQuery
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $id;

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
    private $query;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $offset;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }
}