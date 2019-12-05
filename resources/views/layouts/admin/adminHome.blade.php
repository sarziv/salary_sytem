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
                            <a href="{{route('adminUser.index')}}" class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">User management</a>
                            <a href="{{route('adminSchedule.index')}}" class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">User schedules management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
