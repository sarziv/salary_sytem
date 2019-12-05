<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    protected $fillable = [
        'work_place','user_id','work_start','work_end','work_done','is_paid'
    ];
    public $timestamps = true;
}
