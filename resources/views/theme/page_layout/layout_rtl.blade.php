@extends('page_layout.layout_pages.master')

@section('page-html')
    <html lang="en" dir="rtl">
@endsection
@section('page-body')

    <body class="rtl">
    @endsection

    @section('page-content')
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>RTL Layout</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Page Layout</li>
                            <li class="breadcrumb-item active"> RTL Layout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card alert alert-primary bg-primary" role="alert">
                        <h3 class="alert-heading">Tip!</h3>
                        <p>Add the dir="rtl" to the html tag to get this layout.</p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>How to use it?</h3>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li>
                                        <div><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5>Step 1</h5>
                            <p>On this layout, First of all you have to add the class rtl attribute in body tag</p>
                            <h5>Step 2</h5>
                            <p>Contents are change right to left from left to right respectively</p>
                            <h5>Step 3</h5>
                            <p>when you want to change spacing left to right at that right left spacing you have to unset
                                css and apply right spacing in css</p>
                            <h5>Step 4</h5>
                            <p>Sometimes js are not change directly with text-align css,so that time you have to copy js and
                                change the class as rtl="true".</p>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                    title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;h5&gt;Step 1&lt;/h5&gt;
&lt;p&gt;On this layout, First of all you have to add the class rtl in body tag&lt;/p&gt;
&lt;h5&gt;Step 2&lt;/h5&gt;
&lt;p&gt;Contents are change right to left from left to right respectively&lt;/p&gt;
&lt;h5&gt;Step 3&lt;/h5&gt;
&lt;p&gt;when you want to change spacing left to right at that right left spacing you have to unset css and apply right spacing in css&lt;/p&gt;
&lt;h5&gt;Step 4&lt;/h5&gt;
&lt;p&gt;Sometimes js are not change directly with text-align css,so that time you have to copy js and change the class as rtl="true".&lt;/p&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h4 class="mb-0">Card Footer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('page-footer')
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 p-0 footer-left">
                        <p class="mb-0">Copyright 2022 © Koho theme by pixelstrap</p>
                    </div>
                    <div class="col-2 p-0 footer-right"> <i class="fa fa-heart font-danger"> </i></div>
                </div>
            </div>
        </footer>
    @endsection
    @section('page-scripts')
        <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
        <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    @endsection