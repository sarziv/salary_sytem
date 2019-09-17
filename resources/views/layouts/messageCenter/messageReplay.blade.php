@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Replaying message</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('message.store') }}">
                            <input type="hidden" name="receiver" value="{{$message->sender}}">

                            <div class="form-group">
                                @csrf
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Sending to</th>
                                    <th scope="col">Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $message->sender }}</th>
                                    <th scope="">
                                        <input type="text" class="form-control"
                                               value=""
                                               name="message"/>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="col-2 btn btn-success">Send Replay</button>
                        </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
