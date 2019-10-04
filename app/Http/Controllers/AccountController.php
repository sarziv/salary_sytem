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
        $user = User::findorfail(Auth::user()->id);
        return view('account.accountHome',['user' => $user]);
    }

    public function edit()
    {

        return view('account.accountEdit');
    }
    public function update(Request $request,$id){

        $request->validate([
            "name"=> 'required',
            "email"=> 'required'
        ]);

        $user = User::findorfail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $user->save();

        return redirect(route('account.index'))->with('success','Account information updated.');
    }
}
