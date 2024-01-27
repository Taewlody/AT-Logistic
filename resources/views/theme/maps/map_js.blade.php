@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/mapsjs-ui.css') }}">
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Map JS</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Maps</li>
                        <li class="breadcrumb-item active"> Map JS</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Map at a specified location</h3><span>Display a map at a specified location and zoom
                            level.</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map1"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Map using View Bounds</h3><span>Display a map of a given area.</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map2"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Multi-language support</h3><span>Display a map with labels in a foreign language</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map3"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Terrain Map</h3><span>Display a topographical map</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map4"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Changing from the Metric System</h3><span>Display a map including a scale bar in miles or
                            yards</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map5"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Panning the Map</h3><span>Programmatically pan the map so that it is continually in
                            motion</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map6"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Traffic Information</h3><span>Display traffic information on the map</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map7"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Adding Venues layer to the Map</h3><span>Display venue objects (e.g. shops, airports etc) on the
                            map</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map8"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Zoom into Bounds</h3><span>Zoom into bounds limiting maximum level</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map9"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Restrict Map Movement</h3><span>Restrict a moveable map to a given rectangular area</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map10"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Screen Layer</h3><span>Display animated screen layer</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map11"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Marker on the Map</h3><span>Display a map highlighting points of interest</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map12"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Draggable Marker</h3><span>Display a map highlighting points of interest</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map13"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Polyline on the Map</h3><span>Display a map with a line showing a known route</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map14"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Polygon on the Map</h3><span>Display a map highlighting a region or area</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map15"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Polygon on the Map</h3><span>Display a map highlighting a region or area</span>
                    </div>
                    <div class="card-body">
                        <div class="map-js-height" id="map16"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/map-js/mapsjs-core.js') }}"></script>
    <script src="{{ asset('assets/js/map-js/mapsjs-service.js') }}"></script>
    <script src="{{ asset('assets/js/map-js/mapsjs-ui.js') }}"></script>
    <script src="{{ asset('assets/js/map-js/mapsjs-mapevents.js') }}"></script>
    <script src="{{ asset('assets/js/map-js/custom.js') }}"></script>
@endsection