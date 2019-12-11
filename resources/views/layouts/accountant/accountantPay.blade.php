@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Paid reports
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                @if(empty($reports[0]))
                                    <div>Error! Boi</div>
                                @else
                                    <thead>
                                    <tr>
                                        <th scope="col">Place</th>
                                        <th scope="col">Work_started</th>
                                        <th scope="col">Work_ended</th>
                                        <th scope="col">Work_done</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($reports as $report)
                                        <tr>
                                            <th scope="row">{{ $report->work_place }}</th>
                                            <th scope="row">{{  $report->work_start}}</th>
                                            <th scope="row">{{ $report->work_end }}</th>
                                            <th scope="row">{{ $report->work_done }}</th>
                                            <th scope="row">{{ $report->created_at }}</th>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                            </table>
                            <hr>
                            <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Total_work_days</th>
                                        <th scope="col">Total_work_hours</th>
                                        <th scope="col">Total_work_done</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">{{ $work_days }}</th>
                                            <th scope="row">{{  $work_hours}}</th>
                                            <th scope="row">{{ $work_done }}</th>
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
