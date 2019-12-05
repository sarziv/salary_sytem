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
                                @if(empty($reports[0]))
                                    <div>No reports</div>
                                @else
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Place</th>
                                        <th scope="col">Functions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($reports as $report)
                                        <tr>
                                            <th scope="row">{{ $report->id }}</th>
                                            <th scope="row">{{ $report->work_place }}</th>
                                            <th scope="row">
                                                <a href="{{ route('report.show',$report->id)}}"
                                                   class="btn btn-primary">View</a>
                                                <a href="{{ route('report.destroy',$report->id)}}"
                                                   class="btn btn-warning">Delete</a>
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
