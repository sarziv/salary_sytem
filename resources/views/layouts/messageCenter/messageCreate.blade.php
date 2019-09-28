@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">New message</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('inbox.store') }}">
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
                                            <th scope="row">
                                                <input type="text" class="form-control"
                                                       value=""
                                                       name="receiver"/>
                                            </th>
                                            <th scope="">
                                                <input type="text" class="form-control"
                                                       value=""
                                                       name="message"/>
                                            </th>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div>
                                    </div>
                                    <button type="submit" class="col-2 btn btn-success">New message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
