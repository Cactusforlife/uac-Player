<?php

namespace App\Domain;

class Video
{
    /**
     * @var string
     */
    private $videoId;
    /**
     * @var string
     */
    private $title;

    public function __construct(string $videoId, string $title)
    {
        // TODO: write logic here
        $this->videoId = $videoId;
        $this->title = $title;
    }

    public function videoId()
    {
        return $this->videoId;
    }

    public function title()
    {
        return $this->title;
    }
}
