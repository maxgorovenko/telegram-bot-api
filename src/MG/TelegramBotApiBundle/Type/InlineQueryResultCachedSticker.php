<?php

namespace MG\TelegramBotApiBundle\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class InlineQueryResultCachedSticker extends InlineQueryResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $sticker_file_id;


    /**
     * @return string
     */
    public function getStickerFileId()
    {
        return $this->sticker_file_id;
    }

    /**
     * @param string $sticker_file_id
     */
    public function setStickerFileId($sticker_file_id)
    {
        $this->sticker_file_id = $sticker_file_id;
    }
}