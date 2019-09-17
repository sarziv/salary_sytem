@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Viewing message</div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Send Time</th>
                                    <th scope="col">Send by user</th>
                                    <th scope="col">Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $message->created_at }}</th>
                                        <th scope="row">{{ $message->sender }}</th>
                                        <th scope="row">{{ $message->message }}</th>
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
