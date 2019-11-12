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
                            <div class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Admin funkcija 1</div>
                            <div class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Admin funkcija 2</div>
                            <div class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Admin funkcija 3</div>
                            <div class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Admin funkcija 4</div>
                            <div class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Admin funkcija 5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
