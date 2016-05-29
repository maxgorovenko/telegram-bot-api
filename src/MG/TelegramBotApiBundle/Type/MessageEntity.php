<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class MessageEntity
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $type;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $offset;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $length;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $url;

    /**
     * @var User
     *
     * @JMS\Type("MG\TelegramBotApiBundle\Type\User")
     */
    private $user;


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}