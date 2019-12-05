<?php

namespace App\Http\Controllers;

use App\Additional;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = DB::table('report')->where('user_id', Auth::user()->id)->get();

        return view('layouts.user.userReport.reportHome', ['reports' => $reports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.user.userReport.reportCreate');
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
            'work_place' => 'required',
            'work_start' => 'required',
            'work_end' => 'required',
            'work_done' => 'required'
        ]);

        $report = new Report([
            'user_id' => Auth::user()->id,
            'work_place' => $request->get('work_place'),
            'work_start' => $request->get('work_start'),
            'work_end' => $request->get('work_end'),
            'work_done' => $request->get('work_done'),
            'is_paid' => 0
        ]);

        $report->save();
        return redirect('/user/report')->with('success', 'Report was created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::findorfail($id);
        $additional = Additional::findorfail(Auth::user()->additional_id);
        return view('layouts.user.userReport.reportShow', compact('report','additional'));
    }


    public function edit($id)
    {
        $report = Report::findorfail($id);
        return view('layouts.user.userReport.reportEdit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'work_place' => 'required',
            'work_start' => 'required',
            'work_end' => 'required',
            'work_done' => 'required'
        ]);

        $report = Report::findorfail($request->get('id'));

        $report->work_place = $request->get('work_place');
        $report->work_start = $request->get('work_start');
        $report->work_end = $request->get('work_end');
        $report->work_done = $request->get('work_done');

        $report->save();

        return redirect(route('report.index'))->with('success', 'Report information updated');
    }

    public function destroy($id)
    {
        $inbox = Report::findOrFail($id);
        $inbox->delete();
        return back()->with('error', 'Message was deleted!');
    }
}
