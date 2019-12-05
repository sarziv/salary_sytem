@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Viewing User basic</div>
                    <form method="post" action="{{ route('adminUser.update') }}">
                        @csrf
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Birthday</th>
                                    <th scope="col">Change</th>
                                </tr>
                                </thead>
                                <tbody>
                                <input type="hidden" name="id" class="form-control" value="{{$user->id}}">
                                <tr>
                                    <th scope="row">
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                    </th>
                                    <th scope="row">
                                                <select class="form-control" id="type" name="type">
                                                    @foreach($userTypes as $type)
                                                        <option name="type" value="{{$type->type}}">{{$type->type}}</option>
                                                    @endforeach
                                                </select>
                                    </th>
                                    <th scope="row">
                                        <input type="text" name="birthday" class="form-control" value="{{$user->birthday}}">
                                    </th>
                                    <th>
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                    </th>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                    @foreach($errors->all() as $message)
                        <div class="alert alert-danger">{{$message}}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
