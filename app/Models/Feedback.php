<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function isContacted()
    {
        return $this->is_contacted ? 'Да' : 'Нет';
    }


    public function makeContacted()
    {
        if ($this->is_contacted) {
            $this->is_contacted = 0;
        } else {
            $this->is_contacted = 1;
        }
        $this->save();
    }
}
