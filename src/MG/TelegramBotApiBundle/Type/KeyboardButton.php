<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class KeyboardButton
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $text;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $request_contact;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    private $request_location;


    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return boolean
     */
    public function isRequestContact()
    {
        return $this->request_contact;
    }

    /**
     * @param boolean $request_contact
     */
    public function setRequestContact($request_contact)
    {
        $this->request_contact = $request_contact;
    }

    /**
     * @return boolean
     */
    public function isRequestLocation()
    {
        return $this->request_location;
    }

    /**
     * @param boolean $request_location
     */
    public function setRequestLocation($request_location)
    {
        $this->request_location = $request_location;
    }
}