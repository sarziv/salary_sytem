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
                                <div class="btn btn-outline-dark col-2 offset-5 mr-1 mb-1">Nauja ataskaita</div>
                                <div class="btn btn-outline-dark  col-2 offset-5 mr-1 mb-1">Ataskaitu istorija</div>
                                <div class="btn btn-outline-dark  col-2 offset-5 mr-1 mb-1">Darbo grafikas</div>
                                <div class="btn btn-outline-dark  col-2 offset-5 mr-1 mb-1">Atlyginimas</div>
                                <div class="btn btn-outline-dark  col-2 offset-5 mr-1 mb-1">Atostogu prasymas</div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
