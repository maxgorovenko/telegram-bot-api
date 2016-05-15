<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultContact extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $phone_number;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $first_name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $last_name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $thumb_url;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $thumb_width;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $thumb_height;


    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getThumbUrl()
    {
        return $this->thumb_url;
    }

    /**
     * @param string $thumb_url
     */
    public function setThumbUrl($thumb_url)
    {
        $this->thumb_url = $thumb_url;
    }

    /**
     * @return int
     */
    public function getThumbWidth()
    {
        return $this->thumb_width;
    }

    /**
     * @param int $thumb_width
     */
    public function setThumbWidth($thumb_width)
    {
        $this->thumb_width = $thumb_width;
    }

    /**
     * @return int
     */
    public function getThumbHeight()
    {
        return $this->thumb_height;
    }

    /**
     * @param int $thumb_height
     */
    public function setThumbHeight($thumb_height)
    {
        $this->thumb_height = $thumb_height;
    }
}