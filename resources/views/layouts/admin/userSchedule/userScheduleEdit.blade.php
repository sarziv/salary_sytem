@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Editing schedule</div>
                    <form method="post" action="{{ route('adminSchedule.update',$calendar->id) }}">
                        @csrf
                        <div class="card-body">
                            <div class="text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Change</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <select class="form-control" id="name" name="name">
                                                @foreach($calendars_types as $type)
                                                    <option name="type" value="{{$type->type}}">{{$type->type}}</option>
                                                @endforeach
                                            </select>
                                        </th>
                                        <th scope="row">
                                            <input type="text" name="description" class="form-control" value="{{$calendar->description}}">
                                        </th>
                                        <th scope="row">
                                            <input type="date" name="task_date" class="form-control" value="{{$calendar->task_date}}">
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
