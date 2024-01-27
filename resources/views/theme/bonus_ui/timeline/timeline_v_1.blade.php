@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Timeline 1</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Timeline</li>
                        <li class="breadcrumb-item active">Timeline 1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Example</h3>
                    </div>
                    <div class="card-body">
                        <!-- cd-timeline Start-->
                        <section class="cd-container" id="cd-timeline">
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture bg-primary"><i class="icon-pencil-alt"></i></div>
                                <div class="cd-timeline-content">
                                    <h2>1. Start with this</h2>
                                    <p class="m-0">Make sure you pick out a good luck new job card to go with the words, and pop a beautiful bunch of flowers from our gift range in your basket, to make them feel super special.</p><span class="cd-date">Jan <span class="counter"> 14</span></span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-movie bg-secondary"><i class="icon-video-camera"></i></div>
                                <div class="cd-timeline-content">
                                    <h2>Title of section<span> 2</span></h2>
                                    <div class="ratio ratio-21x9 m-t-20">
                                        <iframe src="https://www.youtube.com/embed/wpmHZspl4EM" allowfullscreen=""></iframe>
                                    </div><span class="cd-date">Jan <span class="counter">18</span></span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture bg-success"><i class="icon-image"></i></div>
                                <div class="cd-timeline-content">
                                    <h2>Title of section<span> 3</span></h2><img class="img-fluid p-t-20"
                                        src="{{ asset('assets/images/banner/1.jpg') }}" alt=""><span class="cd-date">Jan <span
                                            class="counter">24</span></span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-location bg-info"><i class="icon-pulse"></i></div>
                                <div class="cd-timeline-content">
                                    <h2>Title of section<span> 4</span></h2>
                                    <audio class="m-t-20" controls="">
                                        <source src="{{ asset('assets/audio/horse.ogg') }}" type="audio/ogg"> Your browser does not
                                        support the audio element.
                                    </audio><span class="cd-date">Feb <span class="counter">14</span></span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-location bg-warning"><i class="icon-image"></i></div>
                                <div class="cd-timeline-content">
                                    <h2>Title of section<span> 5</span></h2><img class="img-fluid p-t-20"
                                        src="{{ asset('assets/images/banner/3.jpg') }}" alt=""><span class="cd-date">Feb <span
                                            class="counter">18</span></span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-movie bg-danger"><i class="icon-pencil-alt"></i></div>
                                <div class="cd-timeline-content">
                                    <h2>Final Section</h2>
                                    <p class="m-0">This is the content of the last section</p><span class="cd-date">Feb
                                        <span class="counter">26</span></span>
                                </div>
                            </div>
                        </section>
                        <!-- cd-timeline Ends-->
                    @endsection

                    @section('scripts')
                        <script src="{{ asset('assets/js/timeline/timeline-v-1/main.js') }}"></script>
                        <script src="{{ asset('assets/js/modernizr.js') }}"></script>
                    @endsection
