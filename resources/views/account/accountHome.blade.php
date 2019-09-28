@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">My information</div>

                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{Auth::user()->id}}</th>
                                    <td>{{Auth::user()->type}}</td>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{Auth::user()->email}}</td>
                                    <td>
                                        <a href="{{route('account.edit')}}" class="btn btn-primary">Edit</a>
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
