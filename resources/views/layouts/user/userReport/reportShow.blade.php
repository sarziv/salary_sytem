@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Viewing report</div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Place</th>
                                    <th scope="col">Potential earning</th>
                                    <th scope="col">Hourly pay</th>
                                    <th scope="col">Worked time</th>
                                    <th scope="col">Report Created</th>
                                    <th scope="col">Report last changed</th>
                                    <th scope="col">Edit</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $report->work_place }}</th>
                                    <th scope="row">{{ $report->work_done * $additional->salary_cof }} $</th>
                                    <th scope="row">~{{ round(($report->work_done * $additional->salary_cof)/( $report->work_end - $report->work_start)) }} $</th>
                                    <th scope="row">From {{ $report->work_start  }}To {{$report->work_end}}</th>
                                    <th scope="row">{{ $report->created_at  }}</th>
                                    <th scope="row">{{ $report->updated_at }}</th>
                                    <td>
                                        <a href="{{route('report.edit' ,$report->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
