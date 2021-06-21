@extends('layout.home')
@section('title')
    Electrouni
@endsection
@section('content')


    <main class="col col-xl-8 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12 " style="margin: 0 auto;">

        <div class=" ui-block">

            <!-- News Feed Form  -->

            <div class="news-feed-form">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab"
                            aria-expanded="true">

                            <svg class="olymp-status-icon">
                                <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-status-icon') }}">
                                </use>
                            </svg>

                            <span>Status</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                {{-- posts --}}
                <div class="tab-content">
                    <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
                        <div class="px-3">
                            @include('errors')

                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="author-thumb">
                                @if (auth()->user()->about->profile_photo === null)
                                    <img alt="author" src="{{ asset('assets/img/user.jpg') }}" class="avatar"
                                        style="width:30px;">
                                @else
                                    <img src="/{{ auth()->user()->about->profile_photo }}" alt="author"
                                        style="width:30px;">
                                @endif

                            </div>
                            <div class="form-group with-icon label-floating is-empty ">
                                <label class="control-label" for="body">Share what you are thinking here...</label>
                                <br>
                                <textarea class="form-control" name="body" id="body"
                                    type="textarea">{{ $post->body }}</textarea>
                                <br>
                                @if ($post->picture)
                                    <div class="post-thumbnail ">
                                        <div class="post-thumb px-3">
                                            <img id="output" src="/{{ $post->picture }}"
                                                style="width:400px;border-radius:5px;" />
                                        </div>
                                    </div>
                                @endif
                                <div class="px-3 mt-4">
                                    <img id="output" style="width:400px;border-radius:5px;" />
                                </div>
                            </div>
                            <div class="add-options-message">
                                <div class="form-group">

                                    {{-- <label for="picture">Upload Pictures </label>
                                <input type="file" name="picture" id="picture" class="form-control" /> --}}

                                    <label for="picture" style="cursor: pointer;">
                                        <input type="file" name="picture" accept="image/*" onchange="loadFile(event)"
                                            id="picture" style="display:none;" /><svg class="olymp-camera-icon"
                                            data-toggle="modal" data-target="#update-header-photo">
                                            <use
                                                xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-camera-icon') }}">
                                            </use>
                                        </svg>
                                    </label>
                                    <button type="submit" class="btn btn-primary btn-md-2">Update Status</button>
                                </div>
                                <script>
                                    var loadFile = function(event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    };

                                </script>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ... end News Feed Form  -->
        </div>
    @endsection
