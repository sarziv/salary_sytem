@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">My reports
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{route('report.create')}}">New  report</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                @if(empty($salaries[0]))
                                    <div>No did not earn any money!</div>
                                @else
                                    <thead>
                                    <tr>
                                        <th scope="col">year</th>
                                        <th scope="col">month</th>
                                        <th scope="col">work_hours</th>
                                        <th scope="col">work_done</th>
                                        <th scope="col">npd</th>
                                        <th scope="col">sodra</th>
                                        <th scope="col">payout</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($salaries as $salary)
                                        <tr>
                                            <th scope="row">{{ $salary->year }}</th>
                                            <th scope="row">{{ $salary->month }}</th>
                                            <th scope="row">{{ $salary->work_hours }}</th>
                                            <th scope="row">{{ $salary->work_done }}</th>
                                            <th scope="row">{{ $salary->npd }}</th>
                                            <th scope="row">{{ $salary->sodra }}</th>
                                            <th scope="row">{{ $salary->pay_out }}</th>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
