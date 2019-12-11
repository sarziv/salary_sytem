@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Reports to payout
                    </div>

                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                @if(empty($reports[0]))
                                    <div>Nothing to show</div>
                                @else
                                    <thead>
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Ready to pay</th>
                                        <th scope="col">Year</th>
                                        <th scope="col">Month</th>
                                        <th scope="col">Pay</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($reports as $report)
                                        <tr>
                                            <form method="post" action="{{ route('accountant.pay',$report->user_id,$report->year,$report->month) }}">
                                                @csrf
                                            <th scope="row">{{ $report->name }}</th>
                                            <th scope="row">{{ $report->reports }}</th>
                                            <th scope="row">{{ $report->year }}</th>
                                            <th scope="row">{{ $report->month }}</th>
                                            <input type="hidden" name="year" value="{{$report->year}}">
                                            <input type="hidden" name="month" value="{{$report->month}}">
                                           <th scope="row">
                                                <button type="submit" class="btn btn-primary">Format payment</button>
                                            </th>
                                            </form>
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
