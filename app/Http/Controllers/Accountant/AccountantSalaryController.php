<?php

namespace App\Http\Controllers\Accountant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AccountantSalaryController extends Controller
{
    public function index()
    {
        $dates = DB::table('report')
            ->where('is_paid','=',1)
            ->select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')
            ->get();
        var_dump($dates);
        return view('layouts.accountant.accountantApprove', compact('reports'));
    }
}
