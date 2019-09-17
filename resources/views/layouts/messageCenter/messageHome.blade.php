@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Message Center</div>

                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Time</th>
                                    <th scope="col">Send by</th>
                                    <th scope="">Functions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($messages as $message)
                                <tr>
                                    <th scope="row">{{ $message->created_at }}</th>
                                    <th scope="row">{{ $message->sender }}</th>
                                    <th scope="row">
                                        <a href="{{ route('message.show',$message->id)}}"
                                           class="btn btn-primary">View</a>
                                        <a href="{{ route('inbox.replay',$message->id)}}"
                                           class="btn btn-success">Replay</a>
                                        <a href="{{ route('message.destroy',$message->id)}}"
                                           class="btn btn-warning">Delete</a>
                                        <a href="{{ route('inbox.block',$message->id)}}"
                                           class="btn btn-danger">Block sender</a>
                                    </th>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $messages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
