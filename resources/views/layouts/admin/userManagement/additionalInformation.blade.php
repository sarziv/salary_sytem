@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Viewing User additional information</div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">position</th>
                                    <th scope="col">About</th>
                                    <th scope="col">Work start</th>
                                    <th scope="col">Work end</th>
                                    <th scope="col">Salary coefficient</th>
                                    <th scope="col">City</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $additional->position }}</th>
                                    <th scope="row">{{ $additional->user_info}} </th>
                                    <th scope="row">{{ $additional->work_start }} </th>
                                    <th scope="row">{{ $additional->work_end }} </th>
                                    <th scope="row">{{ $additional->salary_cof }} </th>
                                    <th scope="row">{{ $city->city_name }} </th>
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
