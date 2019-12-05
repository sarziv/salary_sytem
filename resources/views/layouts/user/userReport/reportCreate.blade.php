@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">New report</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('report.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="work_place">Place address</label>
                                <input name="work_place" type="text" class="form-control" id="work_place" aria-describedby="work_place">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="work_start">Started working at</label>
                                    <input min="0" max="23" step="1" name="work_start" type="number" class="form-control" id="work_start">
                                </div>
                                <div class="form-group col-6">
                                    <label for="work_end">Work ended at</label>
                                    <input min="1" max="24" step="1" name="work_end" type="number" class="form-control" id="work_end">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="work_done">Square meters done</label>
                                <input name="work_done" type="number" step="0.1" class="form-control" id="work_done" aria-describedby="work_done">
                            </div>
                            <button type="submit" class="btn btn-primary col-2">Create report</button>
                        </form>
                    </div>
                    @foreach($errors->all() as $message)
                        <div class="alert alert-danger">{{$message}}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
