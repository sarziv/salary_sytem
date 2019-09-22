<?php

namespace App\Http\Controllers;

use App\User;
use App\UsersBlocked;
use App\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InboxController extends Controller
{
    public function replay($id){
        $message = Inbox::findorfail($id);
        return view('layouts.messageCenter.messageReplay', compact('message'));
    }

    public function block($id)
    {
        $inbox = Inbox::findOrFail($id);
        $blockUser = new UsersBlocked([
            'blockUser' => $inbox['sender'],
            'forUser' => Auth::user()->email
        ]);

        $blockUser->save();
        return back()->with('success', 'User was blocked!');
    }

}
