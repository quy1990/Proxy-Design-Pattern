<?php

namespace App\Http\Services\Videos;


class VideoService implements VideoServiceInterface
{
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk($fileName);
    }

    private function loadFromDisk(string $fileName): void
    {
        echo PHP_EOL . "Loading " . $fileName;
    }

    public function display(): void
    {
        echo PHP_EOL . "Displaying " . $this->fileName;
    }
}
