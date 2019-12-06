<?php

namespace App\Http\Controllers\User;

use App\Additional;
use App\City;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdditionalController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required',
            'user_info' => 'required',
            'work_start' => 'required',
            'work_end' => 'required',
            'city_id' => 'required',
        ]);

        $city_cof = City::findOrFail($request->get('city_id'))['base_cof'];

        $saraly_cof = ($request->get('work_end') - $request->get('work_start')) * $city_cof;

        $additional = new Additional([
            'position' => $request->get('position'),
            'user_info' => $request->get('user_info'),
            'work_start' => $request->get('work_start'),
            'work_end' => $request->get('work_end'),
            'city_id' => $request->get('city_id'),
            'salary_cof' => (double)$saraly_cof
        ]);

        $additional->save();
        $user = User::findorfail(Auth::user()->id);
        $user->additional_id = $additional->id;

        $user->save();

        return redirect('/home')->with('success', 'You can now start Working!');
    }
    public function schedule(){
        $calendars = DB::table('calendars')->where('calendars.user_id','=', Auth::user()->id)->get();
        return view('layouts.user.userSchedule', compact('calendars'));
    }
}
