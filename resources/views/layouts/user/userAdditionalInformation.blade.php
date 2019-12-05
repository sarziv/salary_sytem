<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <img class="position-fixed" width="100" src="./image/banana.gif" >
            <h2 class="text-center">Hello new Worker!</h2>
            <h4 class="text-center">Fill and lets get started!</h4>
            <div class="card-body">
                <form method="post" action="{{ route('additional.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="position">Work position</label>
                        <select class="form-control" id="position" name="position">
                            @foreach($jobs as $job)
                                <option name="position" value="{{$job->id}}">{{$job->type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_info">More about you!</label>
                        <textarea name="user_info" type="text" class="form-control" id="user_info"></textarea>
                    </div>
                    <h5 class="text-center">Enter your flexible work hours!</h5>
                    <div class="row">
                    <div class="form-group col-6">
                        <label for="work_start">Start time (Morning AM)</label>
                        <input name="work_start" type="number" class="form-control" id="work_start">
                    </div>
                        <div class="form-group col-6">
                            <label for="work_end">End time (Evening PM)</label>
                            <input name="work_end" type="number" class="form-control" id="work_end">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city_id">City</label>
                        <select class="form-control" id="city_id" name="city_id">
                            @foreach($cities as $city)
                                <option name="city_id" value="{{$city->id}}">{{$city->city_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary col-2">Click to sell your soul</button>
                </form>
            </div>
        </div>
    </div>
</div>
