<?php

namespace App\Http\Controllers\Admin;

use App\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminScheduleController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('layouts.admin.userSchedule.userScheduleHome', compact('users'));
    }
    public function show($id){
        $calendars = DB::table('calendars')->where('calendars.user_id','=', $id)->get();
        return view('layouts.admin.userSchedule.userScheduleShow', compact('calendars'));
    }
    public function edit($id){
        $calendar = Calendar::findorfail($id);
        $calendars_types = DB::table('calendars_types')->get();
        return view('layouts.admin.userSchedule.userScheduleEdit', compact('calendar','calendars_types'));
    }
    public function update($id,Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'task_date' => 'required|date_format:Y-m-d',
        ]);

        $calendar = Calendar::findorfail($id);

        $calendar->name = $request->get('name');
        $calendar->description = $request->get('description');
        $calendar->task_date = $request->get('task_date');

        $calendar->save();

        return redirect(route('adminSchedule.index'))->with('success', 'User schedule updated');
    }
    public function create($id){
        $calendars_types = DB::table('calendars_types')->get();
        return view('layouts.admin.userSchedule.userScheduleCreate',compact('calendars_types',"id"));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'user_id' => 'required',
            'description' => 'required',
            'task_date' => 'required|date_format:Y-m-d',
        ]);

        $user = new Calendar([
            'name' => $request->get('name'),
            'user_id' => $request->get('user_id'),
            'description' => $request->get('description'),
            'task_date' => $request->get('task_date')
        ]);

        $user->save();
        return redirect('/admin/schedule')->with('success', 'Day was added to user schedule.');
    }
}
