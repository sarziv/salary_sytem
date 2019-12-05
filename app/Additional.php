<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $fillable = [
        'position','user_info','work_start','work_end','city_id','salary_cof'
    ];
    public $timestamps = true;
}
