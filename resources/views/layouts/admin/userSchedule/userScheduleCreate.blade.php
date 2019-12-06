@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-center card-header">Add day to User Calendar</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('adminSchedule.store') }}">
                            @csrf
                            <input id="user_id" type="hidden"
                                   class="form-control" name="user_id"
                                   value="{{$id}}">
                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="name" name="name">
                                        @foreach($calendars_types as $type)
                                            <option name="type" value="{{$type->type}}">{{$type->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control" name="description"
                                           value="" required autocomplete="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Work date</label>

                                <div class="col-md-6">
                                    <input id="name" type="date"
                                           class="form-control" name="task_date"
                                           value="" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add day
                                    </button>
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
    </div>
@endsection
