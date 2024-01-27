@extends('layout.master')

@section('main-content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Typeahead</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Typeahead</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="typeahead">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Basic Demo</h3><span>This is the simple demo for Typeahead.</span>
                        </div>
                        <div class="card-body">
                            <div id="the-basics">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="States of USA">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Prefetch</h3><span>Prefetched data is fetched and processed on initialization</span>
                        </div>
                        <div class="card-body">
                            <div id="prefetch">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="Countries">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Bloodhound (Suggestion Engine)</h3><span>Bloodhound offers advanced functionalities such as
                                prefetching and backfilling with remote data.</span>
                        </div>
                        <div class="card-body">
                            <div id="bloodhound">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="States of USA">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Remote</h3><span>Remote data is only used when the data provided by local and prefetch is
                                insufficient</span>
                        </div>
                        <div class="card-body">
                            <div id="remote">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="Choose Option">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Custom Templates</h3><span>Custom templates give you full control over how suggestions get
                                rendered</span>
                        </div>
                        <div class="card-body">
                            <div id="custom-templates">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="Oscar winners">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Multiple Sections with Headers</h3><span>Two datasets that are prefetched, stored, and
                                searched on the client. Highlighting is enabled.</span>
                        </div>
                        <div class="card-body">
                            <div id="multiple-datasets">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text"
                                            placeholder="NBA and NHL teams">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Default Suggestions</h3><span>Default suggestions can be shown for empty queries.</span>
                        </div>
                        <div class="card-body">
                            <div id="default-suggestions">
                                <form class="theme-form">
                                    <div>
                                        <input class="tyeahead form-control" type="text" placeholder="NFL Teams">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Scrollable Dropdown Menu</h3><span>Dataset shows in scrollable dropdown menu.</span>
                        </div>
                        <div class="card-body">
                            <div id="scrollable-dropdown-menu">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" placeholder="Countries">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>RTL Support</h3><span>Dataset shows in Right Side.</span>
                        </div>
                        <div class="card-body">
                            <div id="rtl-support">
                                <form class="theme-form">
                                    <div>
                                        <input class="typeahead form-control" type="text" dir="rtl"
                                            placeholder="Countries">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
@endsection
