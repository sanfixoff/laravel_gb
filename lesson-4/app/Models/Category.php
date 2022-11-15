<?php

namespace App\Models;

class Category
{
    private array $categories = [
        1 => [
            'id' => 1,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        2 => [
            'id' => 2,
            'title' => 'Политика',
            'slug' => 'politics'
        ],
    ];

    public function getCategoryNameBySlug($slug)
    {
        $id = $this->getCategoryIdBySlug($slug);
        $category = $this->getCategoryById($id);
        if ($category != [])
            return $category['title'];
        else return null;
    }

    public function getCategoryIdBySlug($slug)
    {
        $id = null;
        foreach ($this->getCategories() as $category) {
            if ($category['slug'] == $slug) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategoryById($id)
    {
        if (array_key_exists($id, $this->getCategories()))
            return $this->categories[$id];
        else
            return null;
    }
}
