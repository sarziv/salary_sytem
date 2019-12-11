@if((Auth::user()->additional_id > 0))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="col-md-12">
                            <div class="pb-3">
                                <a href="{{route('report.index')}}" class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Reports</a>
                                <a href="{{route('additional.schedule')}}" class="btn btn-outline-dark  col-2 offset-5 mr-1 mb-1">Work schedule</a>
                                <a href="{{route('additional.salary')}}" class="btn btn-outline-dark  col-2 offset-5 mr-1 mb-1">Salary List</a>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
    @include('layouts.user.userAdditionalInformation')
@endif
