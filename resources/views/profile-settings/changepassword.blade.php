@extends('layout.yourAccount')
@section('title')
    Electrouni
@endsection


@section('content')
    <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Change Password</h6>
            </div>
            <div class="ui-block-content">

                <form method="POST">
                    @csrf
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @include("errors")
                    <div class="row">
                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="password">Confirm Current Password</label>
                                <input class="form-control" placeholder="" name="password" id="password" type="password">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" for="new_password">Your New Password</label>
                                <input class="form-control" placeholder="" id="new_password" name="new_password"
                                    type="password">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" for="new_password_confirmation">Confirm New Password</label>
                                <input class="form-control" placeholder="" id="new_password_confirmation"
                                    name="new_password_confirmation" type="password">
                            </div>
                        </div>
                        {{-- <div class="col col-lg-12 col-sm-12 col-sm-12 col-12">
                            <div class="remember">
                                <div class="checkbox">
                                    <label>
                                        <input name="optionsCheckboxes" type="checkbox">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="#" class="forgot" data-bs-toggle="modal" data-bs-target="#restore-password">Forgot
                                    my Password</a>
                            </div>
                        </div> --}}
                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-primary btn-lg full-width">Change Password Now!</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    @endsection
