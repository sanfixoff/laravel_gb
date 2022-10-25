<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{
    private static $cats = [
        [
            'id' => 1,
            'title' => "Спорт",
        ],
        [
            'id' => 2,
            'title' => "Искусство",
        ],
        [
            'id' => 3,
            'title' => "Наука и техника",
        ]
    ];


    public static function getCats(): array {
        return static::$cats;
    }
    public static function getCatsId($id) {
        foreach (static::getCats() as $cats) {
            if ($cats['id'] == $id) {
                return $cats;
            }
        }
        return null;
    }
}
