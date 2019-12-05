<?php

namespace App\Http\Controllers\System;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::findorfail(Auth::user()->id);
        return view('account.accountHome', ['user' => $user]);
    }

    public function edit()
    {
        $user = User::findorfail(Auth::user()->id);
        return view('account.accountEdit', ['user' => $user]);
    }

    public function update(Request $request)
    {

        $request->validate([
            "name" => 'required',
            "birthday"=>"required"
        ]);

        $user = User::findorfail(Auth::user()->id);
        $user->name = $request->get('name');
        $user->birthday = $request->get('birthday');

        $user->save();

        return redirect(route('account.index'))->with('success', 'Account information updated.');
    }
}
