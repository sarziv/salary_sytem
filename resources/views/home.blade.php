@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="col-md-12">
            <div class="row pb-3">
                <div class="btn btn-outline-dark col-2 mr-1">Nauja ataskaita</div>
                <div class="btn btn-outline-dark  col-2 mr-1">Ataskaitu istorija</div>
            </div>
        </div>

            <div class="card">
                <div class="card-header text-center">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
