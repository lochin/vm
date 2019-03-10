<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'region',
        'district',
        'message',
        'file_url',
        'status'
        ];
}
