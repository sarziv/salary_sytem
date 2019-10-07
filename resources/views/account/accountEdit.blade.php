@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Edit user information</div>

                    <div class="card-body">

                        <form method="post" action="{{ route('account.update') }}">
                            @csrf
                            <div class="text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Birthday</th>
                                        <th scope="col">Save</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>{{$user->id}}</td>
                                        <td>{{$user->type}}</td>
                                        <td>
                                            <input name="name" class="form-control" value="{{$user->name}}">
                                        </td>
                                        <td> {{$user->email}}</td>
                                        <td>
                                            <input name="birthday" class="form-control" value="{{$user->birthday}}">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success">Save information</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        @if($errors->has('name'))
                            @foreach($errors->get('name') as $message)
                                <div class="alert alert-danger">{{$message}}</div>
                            @endforeach
                        @endif
                        @if($errors->has('birthday'))
                            @foreach($errors->get('birthday') as $message)
                                <div class="alert alert-danger">{{$message}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
