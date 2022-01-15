<?php

namespace App\Http\Controllers;

use App\Http\Services\Videos\ProxyVideoService;

class VideoController extends Controller
{
    public function index(): void
    {
        $video = new ProxyVideoService("Design Pattern.mp4");

        //video sẽ được load từ ổ đĩa
        $video->display();
        print "After loading first time -> ";
        //video sẽ k tải lại từ ổ đĩa nữa
        $video->display();
    }
}
