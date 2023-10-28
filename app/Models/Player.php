<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Player extends Model
{
    //use HasFactory;

    protected $fillable = ['nickname', 'score', 'message'];

    public static function rules()
    {
        return [
            'nickname'  => ['required', 'string', 'max:15'],
            'score'     => ['required', 'numeric', 'max:99999999'],
            'message'   => ['required', 'string', 'max:120'],
        ];
    }
}
