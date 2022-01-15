<?php

namespace App\Http\Services\Videos;


class ProxyVideoService implements VideoServiceInterface
{
    private $realVideo;
    /**
     * @var string
     */
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function display(): void
    {
        if (is_null($this->realVideo)) // lazy loading
        {
            $this->realVideo = new VideoService($this->fileName);
        }

        $this->realVideo->display();
    }
}
