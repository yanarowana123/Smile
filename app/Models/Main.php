<?php

namespace App\Models;

use App\Traits\Multilingual;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Main extends Model
{
    use HasFactory, Multilingual;
    protected $guarded = ['id', 'block', 'page'];

    const HOME = 0;
    const ABOUT = 1;
    const SERVICE = 2;
    const STAFF = 3;
    const WORK = 4;
    const CONTACT = 5;
    const FEEDBACK = 6;

    const HEADER = 0;
    const FEATURE = 1;
    const CONSULTANT = 2;

    public static function getConstVal($str)
    {
        switch ($str) {
            case strtoupper($str) == 'HOME':
                return self::HOME;
                break;
            case strtoupper($str) == 'ABOUT':
                return self::ABOUT;
                break;
            case strtoupper($str) == 'SERVICE':
                return self::SERVICE;
                break;
            case strtoupper($str) == 'STAFF':
                return self::STAFF;
                break;
            case strtoupper($str) == 'WORK':
                return self::WORK;
                break;
            case strtoupper($str) == 'CONTACT':
                return self::CONTACT;
                break;
            case strtoupper($str) == 'FEEDBACK':
                return self::FEEDBACK;
                break;
            case strtoupper($str) == 'HEADER':
                return self::HEADER;
                break;
            case strtoupper($str) == 'FEATURE':
                return self::FEATURE;
                break;
            case strtoupper($str) == 'CONSULTANT':
                return self::CONSULTANT;
                break;
        }
        return NotFoundHttpException::class;
    }


    public static function handleUploadedImage($file)
    {
        $path = $file->storePublicly('uploads');
        throw_unless($path, new Exception('Image upload error'));
        return $path;
    }

}
