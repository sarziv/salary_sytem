@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Edit report information</div>

                    <div class="card-body">

                        <form method="post" action="{{ route('report.update') }}">
                            @csrf
                            <div class="text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Place</th>
                                        <th scope="col">Work start</th>
                                        <th scope="col">Work end</th>
                                        <th scope="col">Work done</th>
                                        <th scope="col">Update</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>

                                        <input type="hidden" name="id" class="form-control" value="{{$report->id}}">
                                        <td>
                                            <input type="text" name="work_place" class="form-control" value="{{$report->work_place}}">
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="23" step="1" name="work_start" class="form-control" value="{{$report->work_start}}">
                                        </td>
                                        <td>
                                            <input type="number" max="24" min="1" step="1" name="work_end" class="form-control" value="{{$report->work_end}}">
                                        </td>
                                        <td>
                                            <input type="number" step="0.1" name="work_done" class="form-control" value="{{$report->work_done}}">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success">Save changes</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
