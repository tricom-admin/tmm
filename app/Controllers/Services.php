<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function socialmedia()
    {
        $title = ['title' => 'Social Media'];

        return view('social-media', $title);
    }

    public function photography()
    {
        $title = ['title' => 'Photography'];

        return view('photography', $title);
    }

    public function videoproduction()
    {
        $title = ['title' => 'Video Production'];

        return view('video-production', $title);
    }

    public function webdesign()
    {
        $title = ['title' => 'Web Design'];

        return view('web-design', $title);
    }
}
