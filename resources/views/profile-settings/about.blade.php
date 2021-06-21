@extends('layout.yourAccount')
@section('title')
    Electrouni
@endsection
@section('content')

    <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Personal Information</h6>
            </div>
            <div class="ui-block-content">


                <!-- Personal Information Form  -->

                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('errors')
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="control-label" for="description">About</label>
                                <textarea class="form-control" name="description" id="description"
                                    placeholder="Enter About Yourself">{{ $about->description }}</textarea>
                            </div>
                            <div class=" form-group">
                                <label class="control-label" for="skills">Skills</label>
                                <textarea class="form-control" name="skills" id="skills"
                                    palceholder="What are Your Skills?">{{ $about->skills }}</textarea>
                            </div>

                            <div class="form-group label-floating is-select">
                                <label for="gender">Your Gender</label>
                                <select class="selectpicker form-control" name="gender">
                                    <option value="MA" @if (strtoupper($about->gender) === 'MA') selected @endif>Male</option>
                                    <option value="FE" @if (strtoupper($about->gender) === 'FE') selected @endif>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- <div class="form-group label-floating"></div> -->

                            <div class="form-group">
                                <label class="control-label" for="hobby">Hobbies</label>
                                <textarea class="form-control" name="hobby" id="hobby"
                                    placeholder="What about your Hobbies?">{{ $about->hobby }}</textarea>
                            </div>

                            <div class="form-group label-floating is-empty">
                                <label for="profile_photo">Profile Photo</label>
                                <input class="form-control" placeholder="" name="profile_photo" id="profile_photo"
                                    type="file" value="">
                            </div>
                            <div class="form-group label-floating">
                                <label for="cover_photo">Cover Photo</label>
                                <input class="form-control" placeholder="" name="cover_photo" id="cover_photo" type="file"
                                    value="">
                            </div>
                        </div>
                        <!-- <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group with-icon label-floating">
                                <label class="control-label" for="facebook">Your Facebook Account</label>
                                <input class="form-control" name="facebook" id="facebook" type="text"
                                    value="{{ $about->facebook }}">
                                <i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
                            </div>
                            <div class="form-group with-icon label-floating">
                                <label class="control-label" for="twitter">Your Twitter Account</label>
                                <input class="form-control" name="twitter" id="twitter" type="text"
                                    value="{{ $about->twitter }}">
                                <i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
                            </div>

                            <div class="form-group with-icon label-floating">
                                <label class="control-label" for="linkedin">Your LinkedIn Account</label>
                                <input class="form-control" name="linkedin" id="linkedin" type="text"
                                    value="{{ $about->linkedin }}">
                                <i class="fab fa-linkedin c-linkedin" aria-hidden="true"></i>
                            </div>

                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-primary btn-lg full-width" type="submit">Save all Changes</button>
                        </div>

                    </div>

                </form>

                <!-- ... end Personal Information Form  -->
            </div>
        </div>
    </div>
    </div>

@endsection
