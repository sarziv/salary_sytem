@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Reports
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                @if(empty($reports[0]))
                                    <div>No reports to approve</div>
                                @else
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Place</th>
                                        <th scope="col">Done by hour</th>
                                        <th scope="col">Approve</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($reports as $report)
                                        <tr>
                                            <th scope="row">{{ $report->id }}</th>
                                            <th scope="row">{{ $report->work_place }}</th>
                                            <th scope="row">{{ round(($report->work_end - $report->work_start) / $report->work_done,2)}}</th>
                                            <th scope="row">
                                                <a href="{{ route('accountant.approve',$report->id)}}"
                                                   class="btn btn-primary">Approve</a>
                                            </th>
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
