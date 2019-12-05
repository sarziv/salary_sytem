<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\City;
use Illuminate\Http\Request;

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
