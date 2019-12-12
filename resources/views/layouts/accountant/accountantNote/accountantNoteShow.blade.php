@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Users notes: <b>{{$user->name}}</b>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{route('accountantNote.create',$user->id)}}">New  note for {{ $user->name }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                @if(empty($notes[0]))
                                    <div>Dam my system got No Users! :(</div>
                                @else
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Warning</th>
                                        <th scope="col">Penalty</th>
                                        <th scope="col">Payed</th>
                                        <th scope="col">Functions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($notes as $note)
                                        <tr>
                                            <th scope="row">{{ $note->id }}</th>
                                            <th scope="row">{{ $note->topic }}</th>
                                            <th scope="row">{{ $note->message }}</th>
                                            <th scope="row">
                                                @if($note->warning == 0)
                                                        No
                                                @else
                                                        Yes
                                                @endif
                                            </th>
                                            <th scope="row">
                                                {{$note->penalty}}
                                            </th>
                                            <th scope="row">
                                                @if($note->is_paid == 0)
                                                    No
                                                @else
                                                    Yes
                                                @endif
                                            </th>
                                            <th scope="row">
                                                <a href="{{ route('accountantNote.edit',$note->id)}}"
                                                   class="btn btn-primary">Edit</a>
                                                <a href="{{ route('accountantNote.show',$note->id)}}"
                                                   class="btn btn-danger">Delete</a>
                                            </th>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
