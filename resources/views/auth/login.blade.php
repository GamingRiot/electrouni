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
                <div class="landing-content">
                    <h1>Welcome to the Biggest Social Network for students</h1>

                    <a href="/register" class="btn btn-md btn-border c-white">Register Now!</a>
                </div>
            </div>

            <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

                <!-- Login-Registration Form  -->

                <div class="registration-login-form">
                    <!-- Nav tabs -->


                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                            <div class="title h6">Login to Electrouni</div>

                            <form class="content" method="POST" action="{{ url('/login') }}">
                                @include('errors')
                                @csrf
                                <div class="row">
                                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="email">Your Email</label>
                                            <input class="form-control" name="email" placeholder="" type="email">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="password">Your Password</label>
                                            <input class="form-control" name="password" placeholder="" type="password">
                                        </div>
                                        <button type="submit" class="btn btn-purple btn-lg full-width">Login</button>
                                    </div>
                                </div>
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ... end Login-Registration Form  -->
            </div>
        </div>
    </div>

    <!-- Window-popup Restore Password -->

@endsection
<!-- ... end Window-popup Restore Password -->


<!-- Window Popup Main Search -->
