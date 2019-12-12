<?php

namespace App\Http\Controllers\Accountant;

use App\User;
use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountantNoteController extends Controller
{
    public function index(){
        $notes = DB::table('notes')->pluck('user_id')->toArray();
        $users = DB::table('users')->whereIn('id',$notes)->get();

        return view('layouts.accountant.accountantNote.accountantNoteHome', compact('users'));
    }

    public function create($id)
    {
        if($id == 0){
            $users = DB::table('users')->get();
            return view('layouts.accountant.accountantNote.accountantNoteCreate',compact('users'));
        }
        return view('layouts.accountant.accountantNote.accountantNoteCreate',compact('id'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'topic' => 'required',
            'message' => 'required',
            'warning' => 'required',
            'penalty' => 'required',
        ]);

        $note = new Note([
            'user_id' => $request->get('user_id'),
            'topic' => $request->get('topic'),
            'message' => $request->get('message'),
            'warning' => $request->get('warning'),
            'penalty' => $request->get('penalty'),
            'is_paid' => 0,
        ]);

        $note->save();
        return redirect('/accountant/notes')->with('success', 'Note was created');
    }

    public function show($id)
    {
        $user = User::findorfail($id);
        $notes = DB::table('notes')->where("user_id","=",$id)->get();
        return view('layouts.accountant.accountantNote.accountantNoteShow', compact('notes','user'));
    }

    public function edit($id)
    {
        $note = Note::findorfail($id);
        return view('layouts.accountant.accountantNote.accountantNoteEdit',compact('note'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'message' => 'required',
            'warning' => 'required',
            'penalty' => 'required',
            'is_paid' => 'required',
        ]);

        $note = Note::findorfail($request->get('note_id'));

        $note->topic = $request->get('topic');
        $note->message = $request->get('message');
        $note->warning = $request->get('warning');
        $note->penalty = $request->get('penalty');
        $note->is_paid = $request->get('is_paid');

        $note->save();

        return  redirect('/accountant/notes')->with('success', 'Note information updated');
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return back()->with('error', 'Note was shattered into little little pieces.');
    }
}
