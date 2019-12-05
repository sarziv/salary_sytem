<?php

namespace App\Http\Controllers\Admin;

use App\Additional;
use App\City;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index(){
        $users = DB::table('users')->whereNotIn('id',[Auth::user()->id])->get();
        return view('layouts.admin.userManagement.userManagementHome', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userTypes = DB::table('users_types')->get();
        return view('layouts.admin.userManagement.userManagementCreate',compact('userTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'password' => 'required'
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'type' => $request->get('type'),
            'birthday' => '',
            'password' =>Hash::make($request->get('password'))
        ]);

        $user->save();
        return redirect('/admin/user')->with('success', 'User was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findorfail($id);
        return view('layouts.admin.userManagement.userManagementShow', compact('user'));
    }

    public function additionalShow($id)
    {
        $additional = Additional::findorfail($id);
        $city = City::findorfail($additional->city_id);
        return view('layouts.admin.userManagement.additionalInformation', compact('additional','city'));
    }


    public function edit($id)
    {
        $user = User::findorfail($id);
        $userTypes = DB::table('users_types')->get();
        return view('layouts.admin.userManagement.userManagementEdit', compact('user','userTypes'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'birthday' => 'required|date_format:Y-m-d',
        ]);

        $user = User::findorfail($request->get('id'));

        $user->name = $request->get('name');
        $user->type = $request->get('type');
        $user->birthday = $request->get('birthday');

        $user->save();

        return redirect(route('adminUser.index'))->with('success', 'User information updated');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('error', 'User was shattered into little little pieces.');
    }

}
