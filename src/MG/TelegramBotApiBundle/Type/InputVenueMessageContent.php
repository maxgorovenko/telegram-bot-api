<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InputVenueMessageContent extends InputMessageContent
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @JMS\Type("float")
     */
    private $longitude;

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
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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