<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Article extends BaseController
{
    protected $ArticleModel;

    public function __construct()
    {
        $this->ArticleModel = new ArticleModel();
    }

    public function Article($slug = NULL)
    {
        $title = 'Tricom Mitra Mandiri';

        $result = $this->ArticleModel->getDetail($slug);

        if (count($result)) {
            return view('article', ['title' => $title, 'article' => $result[0]]);
        } else {
            return redirect()->to('/');
        }
    }
}
