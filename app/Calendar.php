<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'name','user_id','description','task_date'
    ];
    public $timestamps = true;
}
