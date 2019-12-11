<?php

namespace App\Http\Controllers\Accountant;

use App\Additional;
use App\Report;
use App\Salary;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AccountantSalaryController extends Controller
{
    public function index()
    {
        $reports = DB::table('report')->WhereNotIn('is_paid', [0, 3])
            ->select("users.name", DB::raw('MONTH(report.created_at) as month'), DB::raw('YEAR(report.created_at) as year'), DB::raw('report.user_id'), DB::raw('count(report.user_id) as reports'))
            ->join('users', 'report.user_id', '=', 'users.id')
            ->groupBy('month', "year", "report.user_id")
            ->orderBy("year", 'desc')
            ->orderBy("month", 'desc')
            ->get();
        return view('layouts.accountant.accountantSalary', compact('reports'));
    }


    public function pay($id, Request $request)
    {

        $month = $request->get('month');
        $year = $request->get('year');
        $reports = DB::table('report')->select("*")
            ->where("user_id", "=", $id)
            ->where("is_paid", "=", 1)
            ->whereYear("created_at", $year)
            ->whereMonth("created_at", $month)
            ->get();

        foreach ($reports as $report) {
            $reportToUpdate = Report::findorfail($report->id);
            $reportToUpdate->is_paid = 3;
            $reportToUpdate->save();
        }

        $work_days = 0;
        $work_hours = 0;
        $work_done = 0;

        foreach ($reports as $item) {
            $work_days++;
            $work_hours += ($item->work_end - $item->work_start);
            $work_done += $item->work_done;
        }
        $user = DB::table("users")->where('id', "=", $id)->first();
        $additional = DB::table("additionals")->where('id', "=", $user->additional_id)->first();

        $salary = $work_hours * $work_days * $additional->salary_cof;
        $npm = $salary * 0.15;
        $sodra = $npm * 0.10;
        $payput = $salary - ($sodra + $npm);

        $salaryNew = new Salary([
            'user_id' => $id,
            'year' => $year,
            'month' => $month,
            'work_hours' => $work_hours,
            'work_days' => $work_days,
            'work_done' => round($work_done, 3),
            'npd' => round($npm, 3),
            'sodra' => round($sodra, 3),
            'pay_out' => round($payput, 3)
        ]);
        $salaryNew->save();


        return view('layouts.accountant.accountantPay', compact('reports', 'work_days', 'work_hours', 'work_done'));
    }
}

;
