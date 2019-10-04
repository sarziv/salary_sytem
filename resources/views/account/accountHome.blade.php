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
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->type}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->birthday}}</td>
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
