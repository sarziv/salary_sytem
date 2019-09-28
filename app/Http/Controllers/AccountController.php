<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        return view('account.accountHome');
    }

    public function edit()
    {

        return view('account.accountEdit');
    }
    public function update(Request $request){

        $user = User::findorfail(Auth::user()->id);
        dd($user);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $user->save();

        return redirect('account.index')->with('success','Account information updated.');
    }
}
