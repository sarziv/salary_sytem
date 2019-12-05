<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminScheduleController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('layouts.admin.userManagement.userManagementHome', compact('users'));
    }
}
