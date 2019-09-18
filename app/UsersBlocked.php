<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersBlocked extends Model
{
    protected $fillable = [
        'blockUser',
        'forUser',
    ];
}
