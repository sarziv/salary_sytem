<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\InboxStoreRequest;
use Illuminate\Support\Facades\DB;
use App\Inbox;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $email = Auth::user()->email;
        $blocked = DB::table('users_blockeds')->where('forUser', $email)->pluck('blockUser');
        $messages = DB::table('inboxes')->where('receiver', $email)->whereNotIn('sender', $blocked)->paginate(15);

        return view('layouts.messageCenter.messageHome', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.messageCenter.messageCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(InboxStoreRequest $request)
    {
        $validated = $request->validated();
        //saving to Articles
        $inbox = new Inbox([
            'sender' => Auth::user()->email,
            'receiver' => $request->get('receiver'),
            'message' => $request->get('message')
        ]);
        $inbox->save();
        return redirect('/message')->with('success', 'Message was send.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Inbox::findorfail($id);
        return view('layouts.messageCenter.messageShow', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Inbox::findOrFail($id);
        return view('layouts.messageCenter.messageEdit', compact('message'))->with('success', 'Message updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(InboxStoreRequest $request, $id)
    {
        //Validate request
        $validated = $request->validated();
        $inbox = Inbox::findorfail($id);
        $inbox->sender = $request->get('sender');
        $inbox->receiver = $request->get('receiver');
        $inbox->message = $request->get('message');

        $inbox->save();
        return redirect()->route('message')
            ->with('success', 'Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inbox = Inbox::findOrFail($id);
        $inbox->delete();
        return back()->with('error', 'Message was deleted!');
    }

}
