<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    private static $news = [
        [
            'id' => 1,
            'title' => "News 1",
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque distinctio eveniet facilis illo itaque laudantium magnam, magni nesciunt non pariatur quaerat quasi quis quo soluta tempora totam ullam, voluptatum?',
            'cat_id' => 1
        ],
        [
            'id' => 2,
            'title' => "News 2",
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque distinctio eveniet facilis illo itaque laudantium magnam, magni nesciunt non pariatur quaerat quasi quis quo soluta tempora totam ullam, voluptatum?',
            'cat_id' => 2
        ],
        [
            'id' => 3,
            'title' => "News 3",
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque distinctio eveniet facilis illo itaque laudantium magnam, magni nesciunt non pariatur quaerat quasi quis quo soluta tempora totam ullam, voluptatum?',
            'cat_id' => 3
        ]
    ];


    public static function getNews(): array {
        return static::$news;
    }
    public static function getNewsId($id) {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return null;
    }
}
