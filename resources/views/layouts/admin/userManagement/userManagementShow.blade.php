@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Viewing User information</div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Birthday</th>
                                    <th scope="col">Additional</th>
                                    <th scope="col">Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $user->name }}</th>
                                    <th scope="row">{{ $user->type}} </th>
                                    <th scope="row">{{ $user->birthday }} </th>
                                        @if(is_int($user->additional_id))
                                            <th>
                                                <a href="{{route('adminUser.additionalShow' ,$user->additional_id)}}" class="btn btn-success">Additional information</a>
                                            </th>
                                        @else
                                        <th scope="row">No extra information</th>
                                        @endif
                                    <td>
                                        <a href="{{route('adminUser.edit' ,$user->id)}}" class="btn btn-primary">Edit</a>
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
