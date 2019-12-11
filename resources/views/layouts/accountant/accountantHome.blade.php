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
                            <a href="{{route('accountant.index')}}" class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Notes on Users</a>
                            <a  href="{{route('accountant.index')}}" class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Approve reports</a>
                            <a href="{{route('accountant.salary')}}" class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Calculate users salary</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
