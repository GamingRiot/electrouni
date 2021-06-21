@extends('layout.yourAccount')
@section('title')
    Electrouni
@endsection
@section('content')

    <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Your Education History</h6>
            </div>
            <div class="ui-block-content">


                <!-- Education History Form -->

                <form method="POST">
                    @csrf
                    @include('errors')
                    <div class="row">

                        <div class="form-group label-floating is-select full-width">
                            <label for="title">Your College</label>
                            <select class="selectpicker form-control" name="title">
                                <option value="DAVIET">Dav Institute Of Enginerring And Technology</option>
                            </select>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="semester">Semester</label>
                                <input class="form-control" placeholder="" name="semester" id="semester" type="text"
                                    value="{{ $edu->semester }}">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="period">Passing Year</label>
                                <input class="form-control" placeholder="" name="period" id="period" type="text"
                                    value="{{ $edu->period }}">
                            </div>
                        </div>




                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-primary btn-lg full-width" type="submit">Save all Changes</button>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-secondary btn-lg full-width">Cancel</button>
                        </div>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </form>

                <!-- ... end Education History Form -->
            </div>
        </div>

    </div>
    </div>

@endsection
