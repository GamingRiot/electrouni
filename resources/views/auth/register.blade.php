@extends("layout.auth")

@section('title')
    Electrouni
@endsection

@section('content')
    <!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

    <div class="container">
        <div class="row display-flex">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="landing-content">
                        <h1>Welcome to the Biggest Social Network for students</h1>

                        <a href="/login" class="btn btn-md btn-border c-white full-width">Login Now</a>
                    </div>
                </div>
            </div>

            <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

                <!-- Login-Registration Form  -->

                <div class="registration-login-form">
                    <!-- Nav tabs -->


                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                            <div class="title h6">Register to Electrouni</div>
                            <form class="content" method="POST">
                                @csrf
                                @include('errors')
                                <div class="row">
                                    <div class="col col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="first_name">First Name</label>
                                            <input class="form-control" name="first_name" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="last_name">Last Name</label>
                                            <input class="form-control" name="last_name" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="user_name">User Name</label>
                                            <input class="form-control" name="user_name" placeholder="" type="text">

                                        </div>
                                    </div>

                                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group date-time-picker label-floating">
                                            <label class="" for="birthday">Your Birthday</label>
                                            <input class="form-control " name="birthday" id="birthday" type="date"
                                                value="" />
                                            <span class="input-group-addon">
                                                <svg class="olymp-month-calendar-icon icon">
                                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-month-calendar-icon">
                                                    </use>
                                                </svg>
                                            </span>

                                        </div>
                                    </div>


                                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="email">Your Email</label>
                                            <input class="form-control" name="email" placeholder="" type="email">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="password">Your Password</label>
                                            <input class="form-control" placeholder="" name="password" type="password">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="password_confirmation">confirm
                                                Password</label>
                                            <input class="form-control" placeholder="" name="password_confirmation"
                                                type="password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-purple btn-lg full-width">Create
                                                account</button>
                                        </div>
                                        @if (session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- ... end Login-Registration Form  -->
            </div>
        </div>
    </div>

@endsection
