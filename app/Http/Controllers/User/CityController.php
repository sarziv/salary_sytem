<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities =  DB::table('cities')->get();
        $jobs = DB::table('work_types')->get();
        return view('layouts.home', ['cities' => $cities, 'jobs'=>$jobs]);
    }
}
