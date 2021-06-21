@extends('layout.home')
@section('title')
    Create Question
@endsection
@section('content')
    <div style="margin:0 auto;">
        <div class="ui-block">
            <div class="ui-block-title bg-blue">
                <h6 class="title c-white">Create a New Topic</h6>
            </div>
            <div class="ui-block-content">
                <form method="POST">
                    @csrf
                    @include('errors')
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="title">Question</label>
                                <input class="form-control" type="text" id="title" name="title" placeholder="" value="">
                            </div>
                        </div>


                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="control-label" for="description"></label>
                                <textarea class="form-control" style="height: 240px" id="description" name="description"
                                    placeholder="Forum Description"></textarea>
                            </div>

                        </div>
                        <div class="form-group col col-xl-4 col-lg-6 col-md-8 col-sm-10 col-12">
                            <button type="submit" class="btn btn-purple btn-lg full-width">Create
                                Question</button>
                        </div>
                        <div class="form-group col col-xl-4 col-lg-6 col-md-8 col-sm-10 col-12">
                            <a href="/forum/{{ $forum->slug }}">
                                <button type="button" class="btn btn-blue btn-lg full-width">Go Back</button></a>
                        </div>
                    </div>


                </form>

            </div>

        </div>
    </div>
@endsection
