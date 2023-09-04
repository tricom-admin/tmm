<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $db = 'article';

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getDetail($slug = NULL)
    {
        $sql = "SELECT title, image, created_at, updated_at, body, slug FROM posts WHERE status = 'PUBLISHED' AND slug = '$slug'";

        $query = $this->db->query($sql);

        $data = $query->getResultArray($slug);

        return $data;
    }

    public function getData()
    {
        $sql = "SELECT title, image, created_at, excerpt, slug FROM posts WHERE status = 'PUBLISHED'";

        $query = $this->db->query($sql);

        $data = $query->getResultArray();

        // var_dump($data);
        // die;

        return $data;
    }

    public function getArticle($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
