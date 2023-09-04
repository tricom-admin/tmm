<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Home extends BaseController
{
    protected $ArticleModel;

    public function __construct()
    {
        $this->ArticleModel = new ArticleModel();
    }

    public function index()
    {

        $title = 'Tricom Mitra Mandiri';

        $data = $this->ArticleModel->getData();

        return view('homepage', ['title' => $title, 'article' => $data]);
    }

    public function aboutUs()
    {
        $title = ['title' => 'About Us'];

        return view('about-us', $title);
    }
}
