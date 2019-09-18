<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $fillable = [
        'sender',
        'receiver',
        'message'
    ];
    public $timestamps = false;

}
