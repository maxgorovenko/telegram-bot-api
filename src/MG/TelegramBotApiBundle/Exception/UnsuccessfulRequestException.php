<?php

namespace MG\TelegramBotApiBundle\Exception;

class UnsuccessfulRequestException extends \Exception
{
    /** @var array */
    private $data;


    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->message = isset($data['description']) ? $data['description'] : '';
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}