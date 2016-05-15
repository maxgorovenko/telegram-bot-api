<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class Venue
{
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
    private $title;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $address;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $foursquare_id;


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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getFoursquareId()
    {
        return $this->foursquare_id;
    }

    /**
     * @param string $foursquare_id
     */
    public function setFoursquareId($foursquare_id)
    {
        $this->foursquare_id = $foursquare_id;
    }
}