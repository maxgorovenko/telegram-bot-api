<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class UserProfilePhotos
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    private $total_count;

    /**
     * @var PhotoSize[][]
     *
     * @JMS\Type("array<array<MG\TelegramBotApiBundle\Type\PhotoSize>>")
     */
    private $photos;


    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * @param int $total_count
     */
    public function setTotalCount($total_count)
    {
        $this->total_count = $total_count;
    }

    /**
     * @return PhotoSize[][]
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param PhotoSize[][] $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }
}