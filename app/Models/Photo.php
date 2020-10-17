<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    const HOMEABOUT = 0;
    const HOMESLIDER = 1;
    const ABOUT = 2;
    const WORK = 3;

    public static function getPages()
    {
        return [
            [
                'id' => self::HOMEABOUT,
                'title' => 'Главная-О нас'
            ],
            [
                'id' => self::HOMESLIDER,
                'title' => 'Главная-Слайдер'
            ],
            [
                'id' => self::ABOUT,
                'title' => 'О нас'
            ],
            [
                'id' => self::WORK,
                'title' => 'Наши работы'
            ],
        ];
    }

    public static function getPage(string $page)
    {
        switch ($page) {
            case self::HOMEABOUT:
                return 'Главная-О нас';
            case self::HOMESLIDER:
                return 'Главная-Слайдер';
            case self::ABOUT:
                return 'О нас';
            case self::WORK:
                return 'Наши работы';
        }
    }
}
