<?php

namespace App\Http\Controllers\Accountant;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ApproveController extends Controller
{
    public function index()
    {
        $reports = DB::table('report')->where('is_paid','=',0)->orderBy('created_at')->get();
        return view('layouts.accountant.accountantApprove', compact('reports'));
    }

    public function approve($id)
    {
        $report = Report::findorfail($id);
        $report->is_paid = 1;
        $report->save();
        return redirect('/accountant/approve')->with('success', 'Report was approved.');
    }
}
