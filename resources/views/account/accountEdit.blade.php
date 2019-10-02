@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Edit user information</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('account.update',Auth::user()->id) }}">
                            @csrf
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Save</th>
                                </tr>

                                </thead>
                                <tbody>
                                <tr>

                                    <td>{{Auth::user()->id}}</td>
                                    <td>{{Auth::user()->type}}</td>
                                    <td>
                                        <input name="name" class="form-control" value="{{Auth::user()->name}}">
                                    </td>
                                    <td>
                                        <input name="email" class="form-control" value="{{Auth::user()->email}}">
                                    </td>
                                    <td>
                                        <button  type="submit" class="btn btn-success">Save information</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
