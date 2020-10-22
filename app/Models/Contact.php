<?php

namespace App\Models;

use App\Traits\Multilingual;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory,Multilingual;
    protected $guarded = ['id'];

    const MOBILE = 0;
    const ADDRESS = 1;
    const SCHEDULE = 2;
    const WPP = 3;
    const YOUTUBE = 4;
    const INSTAGRAM = 5;


    public function getTypeTitleAttribute()
    {
        switch ($this->attributes['type']) {
            case self::MOBILE:
                return 'Телефон';
                break;
            case self::ADDRESS:
                return 'Адрес';
                break;
            case self::SCHEDULE:
                return 'График работы';
                break;
            case self::WPP:
                return 'Whatsapp';
                break;
            case self::YOUTUBE:
                return 'Youtube';
                break;
            case self::INSTAGRAM:
                return 'Instagram';
                break;
        }

        return $this->type;
    }


    public static function getTypeList()
    {
        return [
            self::MOBILE => 'Телефон',
            self::SCHEDULE => 'График работы',
            self::ADDRESS => 'Адрес',
            self::WPP => 'Whatsapp',
            self::YOUTUBE => 'Youtube',
            self::INSTAGRAM => 'Instagram',
        ];
    }

}
