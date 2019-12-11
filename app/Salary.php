<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salary';
    protected $fillable = [
   'user_id','year','month','work_hours', 'work_days', 'work_done', 'npd', 'sodra', 'pay_out'
    ];
}
