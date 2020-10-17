<?php

namespace App\Models;

use App\Traits\Multilingual;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory, Multilingual;
    protected $guarded = ['id'];

    const WORK = 0;
    const TECH = 1;
    const HOME = 2;
    const SERVICE = 3;


    public static function getConstVal($str)
    {
        switch ($str) {
            case strtoupper($str) == 'WORK':
                return self::WORK;
                break;
            case strtoupper($str) == 'TECH':
                return self::TECH;
                break;
            case strtoupper($str) == 'HOME':
                return self::HOME;
                break;
            case strtoupper($str) == 'SERVICE':
                return self::SERVICE;
                break;

        }
    }
}
