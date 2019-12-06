<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarType extends Model
{
    protected $fillable = [
        'type'
    ];
    public $timestamps = true;
}
