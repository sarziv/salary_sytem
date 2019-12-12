@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editing note</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('accountantNote.update') }}">
                            @csrf
                            <input id="user_id" type="hidden"
                                   class="form-control" name="note_id"
                                   value="{{$note->id}}" readonly>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Topic</label>

                                <div class="col-md-6">
                                    <input id="topic" type="text"
                                           class="form-control" name="topic"
                                           value="{{$note->topic}}" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">Message</label>

                                <div class="col-md-6">
                                    <textarea id="message" type="text"
                                              class="form-control" name="message"
                                              required autocomplete="message">{{$note->message}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">Warning</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="Warning" name="warning">
                                        <option value="0" name="warning">No</option>
                                        <option value="1" name="warning">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">Penalty</label>

                                <div class="col-md-6">
                                    <input id="penalty" type="number"
                                           step="0.1"
                                           class="form-control" name="penalty"
                                           value="{{$note->penalty}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">Payed</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="Warning" name="is_paid">
                                        <option value="0" name="is_paid">No</option>
                                        <option value="1" name="is_paid">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update note
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
