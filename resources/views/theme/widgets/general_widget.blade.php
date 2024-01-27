@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/whether-icon.css') }}">
@endsection


@section('main-content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>General</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Widgets</li>
                        <li class="breadcrumb-item active">General</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid general-widget">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="d-flex static-widget">
                            <div class="flex-grow-1">
                                <h6 class="font-roboto">Earnings</h6>
                                <h2 class="mb-0 counter">6659</h2>
                            </div>
                            <svg class="fill-secondary" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.5938 14.1562V17.2278C20.9604 17.8102 19.7812 19.3566 19.7812 21.1875C19.7812 23.5138 21.6737 25.4062 24 25.4062C24.7759 25.4062 25.4062 26.0366 25.4062 26.8125C25.4062 27.5884 24.7759 28.2188 24 28.2188C23.2241 28.2188 22.5938 27.5884 22.5938 26.8125H19.7812C19.7812 28.6434 20.9604 30.1898 22.5938 30.7722V33.8438H25.4062V30.7722C27.0396 30.1898 28.2188 28.6434 28.2188 26.8125C28.2188 24.4862 26.3263 22.5938 24 22.5938C23.2241 22.5938 22.5938 21.9634 22.5938 21.1875C22.5938 20.4116 23.2241 19.7812 24 19.7812C24.7759 19.7812 25.4062 20.4116 25.4062 21.1875H28.2188C28.2188 19.3566 27.0396 17.8102 25.4062 17.2278V14.1562H22.5938Z">
                                </path>
                                <path
                                    d="M25.4062 0V11.4859C31.2498 12.1433 35.8642 16.7579 36.5232 22.5938H48C47.2954 10.5189 37.4829 0.704531 25.4062 0Z">
                                </path>
                                <path
                                    d="M14.1556 31.8558C12.4237 29.6903 11.3438 26.9823 11.3438 24C11.3438 17.5025 16.283 12.1958 22.5938 11.4859V0C10.0492 0.731813 0 11.2718 0 24C0 30.0952 2.39381 35.6398 6.14897 39.8624L14.1556 31.8558Z">
                                </path>
                                <path
                                    d="M47.9977 25.4062H36.5143C35.8044 31.717 30.4977 36.6562 24.0002 36.6562C21.0179 36.6562 18.3099 35.5763 16.1444 33.8444L8.13779 41.851C12.3604 45.6062 17.905 48 24.0002 48C36.7284 48 47.2659 37.9508 47.9977 25.4062Z">
                                </path>
                            </svg>
                        </div>
                        <div class="progress-widget">
                            <div class="progress sm-progress-bar progress-animate">
                                <div class="progress-gradient-secondary" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                                        class="animate-circle"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="d-flex static-widget">
                            <div class="flex-grow-1">
                                <h6 class="font-roboto">Products</h6>
                                <h2 class="mb-0 counter">9856</h2>
                            </div>
                            <svg class="fill-success" width="45" height="39" viewBox="0 0 45 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.92047 8.49509C5.81037 8.42629 5.81748 8.25971 5.93378 8.20177C7.49907 7.41686 9.01464 6.65821 10.5302 5.89775C14.4012 3.95495 18.2696 2.00762 22.1478 0.0792996C22.3387 -0.0157583 22.6468 -0.029338 22.8359 0.060288C28.2402 2.64315 33.6357 5.24502 39.033 7.84327C39.0339 7.84327 39.0339 7.84417 39.0348 7.84417C39.152 7.90121 39.1582 8.06869 39.0472 8.1375C38.9939 8.17009 38.9433 8.20087 38.8918 8.22984C33.5398 11.2228 28.187 14.2121 22.8385 17.2115C22.5793 17.3572 22.3839 17.3762 22.1131 17.2296C16.7851 14.3507 11.4518 11.4826 6.12023 8.61188C6.05453 8.57748 5.98972 8.53855 5.92047 8.49509Z">
                                </path>
                                <path
                                    d="M21.1347 23.3676V38.8321C21.1347 38.958 21.0042 39.0386 20.895 38.9806C20.4182 38.7271 19.9734 38.4918 19.5295 38.2528C14.498 35.5441 9.46833 32.8317 4.43154 30.1339C4.12612 29.97 4.02046 29.7944 4.02224 29.4422C4.03822 26.8322 4.03023 24.2222 4.02934 21.6122C4.02934 21.4719 4.02934 21.3325 4.02934 21.1659C4.02934 21.0428 4.15542 20.9622 4.26373 21.0147C4.35252 21.0581 4.43065 21.0962 4.50434 21.1396C8.18539 23.2888 11.8664 25.438 15.5457 27.5909C16.5081 28.154 17.0622 28.0453 17.7627 27.1464C18.7748 25.8472 19.7896 24.5508 20.8045 23.2535C20.8053 23.2526 20.8062 23.2517 20.8071 23.2499C20.9172 23.1132 21.1347 23.192 21.1347 23.3676Z">
                                </path>
                                <path
                                    d="M23.83 23.3784C23.83 23.2019 24.0484 23.1241 24.1567 23.2626C25.2168 24.6178 26.2192 25.9016 27.2233 27.1835C27.8928 28.039 28.4504 28.1494 29.3719 27.6117C33.0521 25.4643 36.7323 23.316 40.4133 21.1686C40.4914 21.1233 40.5713 21.0799 40.6592 21.0337C40.7613 20.9803 40.8856 21.0473 40.8972 21.164C40.9025 21.2184 40.9069 21.2691 40.9069 21.3189C40.9087 23.928 40.9052 26.5371 40.9132 29.1462C40.914 29.4006 40.8421 29.5518 40.6131 29.6794C35.1057 32.7539 29.6037 35.8365 24.099 38.9163C24.0892 38.9218 24.0803 38.9263 24.0706 38.9317C23.9605 38.9879 23.8309 38.9082 23.8309 38.7833L23.83 23.3784Z">
                                </path>
                                <path
                                    d="M28.4752 24.454C27.2908 22.9385 26.118 21.4384 24.9203 19.9066C24.6983 19.6232 24.7809 19.2031 25.0925 19.0293L41.3092 9.95809C41.5746 9.80962 41.9076 9.89743 42.0692 10.1582C43.0147 11.6791 43.9541 13.1891 44.9103 14.7264C45.0852 15.0079 44.9946 15.3818 44.7114 15.5475C39.5414 18.5649 34.3875 21.5742 29.2086 24.5979C28.9627 24.74 28.651 24.6794 28.4752 24.454Z">
                                </path>
                                <path
                                    d="M20.0132 19.931C18.819 21.4592 17.6506 22.9539 16.4804 24.4512C16.3037 24.6767 15.9921 24.7373 15.747 24.5943C10.586 21.5814 5.45504 18.5857 0.288619 15.5701C6.65486e-05 15.4017 -0.087831 15.0188 0.0968427 14.7372C1.02554 13.3204 1.94269 11.9208 2.86872 10.5085C3.03209 10.2596 3.35349 10.1763 3.61363 10.3157C9.018 13.2254 14.3975 16.1215 19.833 19.0483C20.1508 19.2194 20.2378 19.644 20.0132 19.931Z">
                                </path>
                            </svg>
                        </div>
                        <div class="progress-widget">
                            <div class="progress sm-progress-bar progress-animate">
                                <div class="progress-gradient-success" role="progressbar" style="width: 60%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                                        class="animate-circle"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="d-flex static-widget">
                            <div class="flex-grow-1">
                                <h6 class="font-roboto">Messages</h6>
                                <h2 class="mb-0 counter">893</h2>
                            </div>
                            <svg class="fill-primary" width="44" height="46" viewBox="0 0 44 46"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.73709 35.2337C6.17884 31.58 4.00316 26.8452 3.49802 21.7377C1.60687 24.237 0.581465 27.3024 0.586192 30.5195C0.589372 32.612 1.03986 34.692 1.89348 36.5729L0.1333 41.9282C-0.169286 42.8488 0.0517454 43.8484 0.7102 44.5369C1.17358 45.0213 1.78451 45.2794 2.4128 45.2794C2.67714 45.2794 2.94458 45.2337 3.2054 45.14L8.32806 43.2997C10.1272 44.1922 12.1167 44.6631 14.1182 44.6665C17.2557 44.6709 20.2418 43.558 22.657 41.5068C17.8005 41.0474 13.2702 38.8615 9.73709 35.2337Z">
                                </path>
                                <path
                                    d="M43.8418 35.7427L41.2863 27.9674C42.5181 25.3348 43.1691 22.407 43.1735 19.4611C43.181 14.3388 41.2854 9.49561 37.8357 5.82369C34.3853 2.15096 29.7875 0.0836476 24.889 0.00251856C19.8097 -0.0814855 15.0354 1.93839 11.446 5.69081C7.85665 9.44332 5.92425 14.4346 6.00469 19.7451C6.08229 24.8661 8.05972 29.673 11.5726 33.2803C15.078 36.8798 19.6988 38.861 24.5879 38.8608C24.5975 38.8608 24.6077 38.8608 24.6171 38.8608C27.435 38.8563 30.2356 38.1757 32.7537 36.8879L40.1911 39.5596C40.501 39.671 40.8188 39.7252 41.1329 39.7252C41.8795 39.7252 42.6055 39.4187 43.1563 38.8428C43.9388 38.0247 44.2014 36.8369 43.8418 35.7427ZM26.3834 26.1731H16.7865C16.0633 26.1731 15.477 25.5601 15.477 24.804C15.477 24.0479 16.0633 23.435 16.7865 23.435H26.3833C27.1066 23.435 27.6929 24.048 27.6929 24.804C27.6929 25.5602 27.1067 26.1731 26.3834 26.1731ZM32.3894 20.5426H16.7866C16.0633 20.5426 15.4771 19.9296 15.4771 19.1736C15.4771 18.4176 16.0634 17.8046 16.7866 17.8046H32.3894C33.1127 17.8046 33.6989 18.4176 33.6989 19.1736C33.6989 19.9296 33.1127 20.5426 32.3894 20.5426ZM32.3894 14.912H16.7866C16.0633 14.912 15.4771 14.299 15.4771 13.543C15.4771 12.7869 16.0634 12.1739 16.7866 12.1739H32.3894C33.1127 12.1739 33.6989 12.787 33.6989 13.543C33.6989 14.299 33.1127 14.912 32.3894 14.912Z">
                                </path>
                            </svg>
                        </div>
                        <div class="progress-widget">
                            <div class="progress sm-progress-bar progress-animate">
                                <div class="progress-gradient-primary" role="progressbar" style="width: 48%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                                        class="animate-circle"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="d-flex static-widget">
                            <div class="flex-grow-1">
                                <h6 class="font-roboto">New User</h6>
                                <h2 class="mb-0 counter">45631</h2>
                            </div>
                            <svg class="fill-danger" width="41" height="46" viewBox="0 0 41 46"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5245 23.3155C24.0019 23.3152 26.3325 16.8296 26.9426 11.5022C27.6941 4.93936 24.5906 0 17.5245 0C10.4593 0 7.35423 4.93899 8.10639 11.5022C8.71709 16.8296 11.047 23.316 17.5245 23.3155Z">
                                </path>
                                <path
                                    d="M31.6878 26.0152C31.8962 26.0152 32.1033 26.0214 32.309 26.0328C32.0007 25.5931 31.6439 25.2053 31.2264 24.8935C29.9817 23.9646 28.3698 23.6598 26.9448 23.0998C26.2511 22.8273 25.6299 22.5567 25.0468 22.2485C23.0787 24.4068 20.5123 25.5359 17.5236 25.5362C14.536 25.5362 11.9697 24.4071 10.0019 22.2485C9.41877 22.5568 8.79747 22.8273 8.10393 23.0998C6.67891 23.6599 5.06703 23.9646 3.82233 24.8935C1.6698 26.5001 1.11351 30.1144 0.676438 32.5797C0.315729 34.6148 0.0734026 36.6917 0.00267388 38.7588C-0.0521202 40.36 0.738448 40.5846 2.07801 41.0679C3.75528 41.6728 5.48712 42.1219 7.23061 42.4901C10.5977 43.2011 14.0684 43.7475 17.5242 43.7719C19.1987 43.76 20.8766 43.6249 22.5446 43.4087C21.3095 41.6193 20.5852 39.4517 20.5852 37.1179C20.5853 30.9957 25.5658 26.0152 31.6878 26.0152Z">
                                </path>
                                <path
                                    d="M31.6878 28.2357C26.7825 28.2357 22.8057 32.2126 22.8057 37.1179C22.8057 42.0232 26.7824 46 31.6878 46C36.5932 46 40.57 42.0232 40.57 37.1179C40.57 32.2125 36.5931 28.2357 31.6878 28.2357ZM35.5738 38.6417H33.2118V41.0037C33.2118 41.8453 32.5295 42.5277 31.6879 42.5277C30.8462 42.5277 30.1639 41.8453 30.1639 41.0037V38.6417H27.802C26.9603 38.6417 26.278 37.9595 26.278 37.1177C26.278 36.276 26.9602 35.5937 27.802 35.5937H30.1639V33.2318C30.1639 32.3901 30.8462 31.7078 31.6879 31.7078C32.5296 31.7078 33.2118 32.3901 33.2118 33.2318V35.5937H35.5738C36.4155 35.5937 37.0978 36.276 37.0978 37.1177C37.0977 37.9595 36.4155 38.6417 35.5738 38.6417Z">
                                </path>
                            </svg>
                        </div>
                        <div class="progress-widget">
                            <div class="progress sm-progress-bar progress-animate">
                                <div class="progress-gradient-danger" role="progressbar" style="width: 48%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                                        class="animate-circle"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 box-col-6">
                <div class="widget-joins card widget-arrow">
                    <div class="card-header pb-0">
                        <h3>Sale details</h3>
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
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="widget-card">
                                    <div class="d-flex align-self-center">
                                        <div class="widget-icon bg-light-primary"><i
                                                class="icofont icofont-arrow-down font-primary"></i></div>
                                        <div class="flex-grow-1">
                                            <h6>Today</h6>
                                            <h5>$<span class="counter">25698</span><span
                                                    class="font-primary">-36%($2658)</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-card">
                                    <div class="d-flex align-self-center">
                                        <div class="widget-icon bg-light-secondary"><i
                                                class="icofont icofont-arrow-down font-secondary"></i></div>
                                        <div class="flex-grow-1">
                                            <h6>Month</h6>
                                            <h5>$<span class="counter">6954</span><span class="font-secondary">-15%($369)
                                                </span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-card">
                                    <div class="d-flex align-self-center">
                                        <div class="widget-icon bg-light-success"><i
                                                class="icofont icofont-arrow-up font-success"></i></div>
                                        <div class="flex-grow-1">
                                            <h6>Week</h6>
                                            <h5>$63147<span class="font-success">+65%($69)</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-card">
                                    <div class="d-flex align-self-center">
                                        <div class="widget-icon bg-light-danger"><i
                                                class="icofont icofont-arrow-up font-danger"></i></div>
                                        <div class="flex-grow-1">
                                            <h6>Year</h6>
                                            <h5>$963198<span class="font-danger">+90%($3654)</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#sale-detail"
                                title="" data-bs-original-title="Copy" aria-label="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="sale-detail">&lt;div class="widget-joins card widget-arrow"&gt;
&lt;div class="card-header pb-0"&gt;
&lt;h3&gt;Sale details&lt;/h3&gt;
&lt;div class="card-header-right"&gt;
&lt;ul class="list-unstyled card-option"&gt;
&lt;li&gt;
 &lt;div&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
&lt;div class="row gy-4"&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="widget-card"&gt;
 &lt;div class="d-flex align-self-center"&gt;
   &lt;div class="widget-icon bg-light-primary"&gt;
     &lt;i class="icofont icofont-arrow-down font-primary"&gt;&lt;/i&gt;
   &lt;/div&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h6&gt;Today&lt;/h6&gt;
     &lt;h5&gt;$&lt;span class="counter"&gt;25698&lt;/span&gt;&lt;span class="font-primary"&gt;-36%($2658)&lt;/span&gt;&lt;/h5&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="widget-card"&gt;
 &lt;div class="d-flex align-self-center"&gt;
   &lt;div class="widget-icon bg-light-secondary"&gt;
     &lt;i class="icofont icofont-arrow-down font-secondary"&gt;&lt;/i&gt;
   &lt;/div&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h6&gt;Month&lt;/h6&gt;
     &lt;h5&gt;$&lt;span class="counter"&gt;$6954&lt;/span&gt;&lt;span class="font-secondary"&gt;-15%($369) &lt;/span&gt;&lt;/h5&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="widget-card"&gt;
 &lt;div class="d-flex align-self-center"&gt;
   &lt;div class="widget-icon bg-light-success"&gt;&lt;i class="icofont icofont-arrow-up font-success"&gt;&lt;/i&gt;&lt;/div&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h6&gt;Week&lt;/h6&gt;
     &lt;h5&gt;$63147&lt;span class="font-success"&gt;+65%($69)&lt;/span&gt;&lt;/h5&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="widget-card"&gt;
 &lt;div class="d-flex align-self-center"&gt;
   &lt;div class="widget-icon bg-light-danger"&gt;&lt;i class="icofont icofont-arrow-up font-danger"&gt;&lt;/i&gt;&lt;/div&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h6&gt;Year&lt;/h6&gt;
     &lt;h5&gt;$963198&lt;span class="font-danger"&gt;+90%($3654)&lt;/span&gt;&lt;/h5&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 box-col-6">
                <div class="widget-joins card">
                    <div class="card-header pb-0">
                        <h3>Order details</h3>
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
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="widget-card">
                                    <div class="d-flex align-self-center">
                                        <div class="widget-icon bg-light-primary">
                                            <svg class="fill-primary" width="110" height="105"
                                                viewBox="0 0 110 105" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M56.4571 104.995C56.4571 100.722 56.4571 96.6523 56.4571 92.5829C56.4596 79.9804 56.4645 67.3755 56.4547 54.773C56.4547 54.0685 56.5307 53.5801 57.3208 53.1997C74.5917 44.9155 91.8454 36.5959 109.104 28.2835C109.318 28.1802 109.543 28.0956 109.914 27.9407C109.943 28.3938 109.985 28.7555 109.985 29.1171C109.987 45.479 109.982 61.8386 110.002 78.2005C110.002 78.9472 109.828 79.3746 109.067 79.7409C91.9092 87.9759 74.7708 96.2437 57.625 104.505C57.3036 104.655 56.9675 104.779 56.4571 104.995Z">
                                                    </path>
                                                    <path
                                                        d="M0.0819734 27.9477C0.543251 28.1426 0.911292 28.2788 1.26216 28.4479C7.06002 31.2375 12.8481 34.0482 18.6607 36.8096C19.4262 37.1736 19.7059 37.5822 19.6985 38.4087C19.6568 43.9645 19.6765 49.5202 19.6765 55.0759C19.6765 55.5033 19.6765 55.933 19.6765 56.5482C21.7645 56.5482 23.7936 56.6257 25.8154 56.52C27.0765 56.4543 27.9353 56.8511 28.799 57.7082C30.8821 59.7816 33.078 61.7494 35.3427 63.8674C35.3427 57.5391 35.3427 51.3095 35.3427 44.8967C36.3487 45.364 37.1878 45.7397 38.0147 46.1365C42.8655 48.4706 47.7089 50.814 52.567 53.1363C53.1927 53.4369 53.573 53.7234 53.573 54.5124C53.5411 71.0621 53.546 87.6119 53.5411 104.162C53.5411 104.387 53.5117 104.613 53.4822 104.998C51.3476 103.976 49.3111 103.011 47.282 102.032C31.8562 94.6 16.4377 87.1587 0.999622 79.7456C0.280715 79.4004 -0.00390273 79.0459 -0.00144913 78.2522C0.0255405 61.8198 0.0181797 45.3874 0.0206333 28.9551C0.0230869 28.6615 0.0574374 28.361 0.0819734 27.9477Z">
                                                    </path>
                                                    <path
                                                        d="M36.9977 42.4758C41.7184 40.0572 46.2846 37.7137 50.8507 35.3773C63.131 29.0936 75.4162 22.8194 87.6842 16.5146C88.4105 16.1412 88.965 16.1248 89.6986 16.484C95.5578 19.3371 101.437 22.1478 107.308 24.975C107.595 25.1135 107.86 25.2873 108.277 25.5244C107.531 25.9001 106.906 26.2265 106.268 26.5318C89.5661 34.5789 72.8596 42.619 56.1677 50.6849C55.3653 51.0723 54.747 51.1217 53.9128 50.7107C48.6866 48.1348 43.4261 45.6223 38.1779 43.0863C37.8245 42.9149 37.4786 42.7247 36.9977 42.4758Z">
                                                    </path>
                                                    <path
                                                        d="M1.65613 25.5056C5.03965 23.8736 8.20725 22.3426 11.3749 20.8163C25.5665 13.9785 39.7606 7.1454 53.94 0.28645C54.7129 -0.086906 55.3042 -0.100995 56.0795 0.279406C61.2763 2.8248 66.5024 5.31854 71.7163 7.83341C72.0697 8.00483 72.4083 8.20677 72.9162 8.4815C72.0868 8.9253 71.3949 9.3104 70.6883 9.67202C54.5509 17.9305 38.416 26.1889 22.264 34.4239C21.8223 34.6493 21.1083 34.8231 20.7182 34.6376C14.4198 31.6648 8.15573 28.6334 1.65613 25.5056Z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6>New Order</h6>
                                            <h5>6981<span class="font-roboto font-primary f-w-700"><i
                                                        class="icofont icofont-arrow-up"></i> 68%</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-card">
                                    <div class="d-flex align-self-center">
                                        <div class="widget-icon bg-light-warning">
                                            <svg class="fill-warning" width="98" height="98" viewBox="0 0 98 98"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.35 84H12.25V77.1167C12.25 61.5883 25.4677 49 41.7725 49C25.4677 49 12.25 36.4117 12.25 20.8833V14H7.35C3.29525 14 0 10.8617 0 7C0 3.13833 3.29525 0 7.35 0H90.65C94.7047 0 98 3.13833 98 7C98 10.8617 94.7047 14 90.65 14H85.75V20.8833C85.75 36.4117 72.5323 49 56.2275 49C72.5323 49 85.75 61.5883 85.75 77.1167V84H90.65C94.7047 84 98 87.1383 98 91C98 94.8617 94.7047 98 90.65 98H7.35C3.29525 98 0 94.8617 0 91C0 87.1383 3.29525 84 7.35 84ZM77.0893 22.6567C77.1505 22.0733 77.175 21.4783 77.175 20.8833V14H20.825V20.8833C20.825 21.4783 20.8495 22.0733 20.9108 22.6567C25.48 27.51 36.3335 30.9167 49 30.9167C61.6665 30.9167 72.52 27.51 77.0893 22.6567ZM56.2275 57.1667H41.7725C30.2207 57.1667 20.825 66.115 20.825 77.1167V77.9567C25.3575 72.9517 36.26 69.4167 49 69.4167C61.74 69.4167 72.6425 72.9517 77.175 77.9567V77.1167C77.175 66.115 67.7793 57.1667 56.2275 57.1667Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6>Pending Order</h6>
                                            <h5>783<span class="font-roboto font-warning f-w-700"><i
                                                        class="icofont icofont-arrow-down"></i> 12%</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-card">
                                    <div class="d-flex align-self-center">
                                        <div class="widget-icon bg-light-success">
                                            <svg class="fill-success" width="112" height="82" viewBox="0 0 112 82"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M40.2301 0.0161888C50.6652 0.0134581 61.103 0.0134581 71.5381 0.0161888C74.6718 0.0161888 75.6717 1.07297 75.6769 4.36891C75.6796 5.82437 75.7532 7.28803 75.6559 8.73529C75.5664 10.046 76.1058 10.3601 77.2582 10.3519C82.7389 10.3109 88.2196 10.33 93.7003 10.3355C97.105 10.3382 98.3048 11.2748 99.252 14.6964C100.946 20.8104 102.601 26.9381 104.341 33.0385C104.512 33.6365 105.098 34.1307 105.556 34.6086C107.556 36.7003 109.616 38.732 111.563 40.8728C111.921 41.266 111.974 42.0661 111.974 42.6778C112 50.0043 112.003 57.3334 111.984 64.6599C111.979 66.9865 110.824 68.2043 108.593 68.2398C105.83 68.2835 103.067 68.2835 100.304 68.248C99.3204 68.2344 98.8836 68.461 98.7389 69.6434C97.9864 75.7219 94.287 80.1812 89.0195 81.5656C81.1181 83.641 73.5115 78.1086 72.6932 69.6106C72.5853 68.4938 72.1854 68.248 71.2382 68.2508C61.0662 68.2671 50.8915 68.2699 40.7195 68.248C39.7407 68.2453 39.4013 68.5648 39.2934 69.6434C38.6199 76.4019 33.6102 81.5001 27.3743 81.907C20.6912 82.3411 15.1185 78.1932 13.5608 71.6259C13.5293 71.4948 13.4872 71.3638 13.4608 71.2299C12.9083 68.259 12.9083 68.2589 9.94563 68.2589C7.75389 68.2589 5.55951 68.2917 3.36777 68.2453C1.13918 68.1989 -0.000101532 66.9755 -0.000101532 64.6381C-0.00273268 45.9301 -0.0185196 27.2248 0.0525214 8.51957C0.0551525 7.50375 0.62348 6.33501 1.26022 5.51308C2.38109 4.06854 3.78612 2.8643 5.02276 1.50988C5.99102 0.447638 7.10662 -0.0056568 8.52744 -0.00019541C19.0941 0.0353036 29.6608 0.0189194 40.2301 0.0161888ZM97.7943 34.1307C97.7549 33.7539 97.7628 33.4836 97.6943 33.2378C96.2972 28.1232 94.8685 23.0196 93.5029 17.8968C93.253 16.9629 92.7136 16.8482 91.9453 16.8509C86.9935 16.8673 82.039 16.8864 77.0872 16.8427C75.9927 16.8318 75.648 17.2332 75.6611 18.3473C75.7085 22.214 75.6717 26.0807 75.6796 29.9473C75.6848 32.8937 76.9372 34.2127 79.7473 34.2181C85.3122 34.229 90.8797 34.2236 96.4445 34.2181C96.8734 34.2154 97.2997 34.1635 97.7943 34.1307ZM32.9392 68.4091C32.9313 64.5425 29.9923 61.4513 26.2903 61.424C22.583 61.3967 19.5835 64.5725 19.6046 68.5047C19.623 72.3386 22.6304 75.4243 26.3219 75.4052C30.0081 75.3833 32.9445 72.2785 32.9392 68.4091ZM79.0553 68.3791C79.0369 72.254 81.9522 75.3642 85.6437 75.4025C89.3273 75.4434 92.3636 72.355 92.39 68.5348C92.4189 64.5944 89.4457 61.4213 85.7332 61.424C82.0417 61.4322 79.0711 64.5261 79.0553 68.3791Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6>Delivered Order</h6>
                                            <h5>$63147<span class="font-roboto font-success f-w-700"><i
                                                        class="icofont icofont-arrow-up"></i> 50%</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-card">
                                    <div class="d-flex align-self-center">
                                        <div class="widget-icon bg-light-danger">
                                            <svg class="fill-danger" width="98" height="98" viewBox="0 0 98 98"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M49.1914 0C22.2778 0 0 21.895 0 48.8086C0 75.7222 22.2778 98 49.1914 98C76.105 98 98 75.7222 98 48.8086C98 21.895 76.105 0 49.1914 0ZM73.3507 64.8465C75.5902 67.086 75.5902 70.7284 73.3507 72.9698C71.1285 75.1901 67.486 75.2265 65.2274 72.9698L49.1914 56.9281L32.7707 72.9717C30.5312 75.2112 26.8888 75.2112 24.6474 72.9717C22.4079 70.7323 22.4079 67.0898 24.6474 64.8484L40.6872 48.8086L24.6474 32.7687C22.4079 30.5274 22.4079 26.8849 24.6474 24.6455C26.8888 22.406 30.5312 22.406 32.7707 24.6455L49.1914 40.6891L65.2274 24.6455C67.463 22.4098 71.1055 22.4022 73.3507 24.6455C75.5902 26.8849 75.5902 30.5274 73.3507 32.7687L57.3109 48.8086L73.3507 64.8465Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6>Cancelled Order</h6>
                                            <h5>69<span class="font-roboto font-danger f-w-700"><i
                                                        class="icofont icofont-arrow-up"></i> 20%</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#order-details"
                                title="" data-bs-original-title="Copy" aria-label="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="order-details"> &lt;div class="widget-joins card"&gt;
&lt;div class="card-header pb-0"&gt;
&lt;h3&gt;Order details&lt;/h3&gt;
&lt;div class="card-header-right"&gt;
&lt;ul class="list-unstyled card-option"&gt;
&lt;li&gt;
 &lt;div&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
&lt;div class="row gy-4"&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="widget-card"&gt;
 &lt;div class="d-flex align-self-center"&gt;
   &lt;div class="widget-icon bg-light-primary"&gt;
     &lt;svg class="fill-primary" width="110" height="105" viewBox="0 0 110 105" xmlns="http://www.w3.org/2000/svg"&gt;&lt;g&gt;&lt;path d="M56.4571 104.995C56.4571 100.722 56.4571 96.6523 56.4571 92.5829C56.4596 79.9804 56.4645 67.3755 56.4547 54.773C56.4547 54.0685 56.5307 53.5801 57.3208 53.1997C74.5917 44.9155 91.8454 36.5959 109.104 28.2835C109.318 28.1802 109.543 28.0956 109.914 27.9407C109.943 28.3938 109.985 28.7555 109.985 29.1171C109.987 45.479 109.982 61.8386 110.002 78.2005C110.002 78.9472 109.828 79.3746 109.067 79.7409C91.9092 87.9759 74.7708 96.2437 57.625 104.505C57.3036 104.655 56.9675 104.779 56.4571 104.995Z"&gt;&lt;/path&gt;&lt;path d="M0.0819734 27.9477C0.543251 28.1426 0.911292 28.2788 1.26216 28.4479C7.06002 31.2375 12.8481 34.0482 18.6607 36.8096C19.4262 37.1736 19.7059 37.5822 19.6985 38.4087C19.6568 43.9645 19.6765 49.5202 19.6765 55.0759C19.6765 55.5033 19.6765 55.933 19.6765 56.5482C21.7645 56.5482 23.7936 56.6257 25.8154 56.52C27.0765 56.4543 27.9353 56.8511 28.799 57.7082C30.8821 59.7816 33.078 61.7494 35.3427 63.8674C35.3427 57.5391 35.3427 51.3095 35.3427 44.8967C36.3487 45.364 37.1878 45.7397 38.0147 46.1365C42.8655 48.4706 47.7089 50.814 52.567 53.1363C53.1927 53.4369 53.573 53.7234 53.573 54.5124C53.5411 71.0621 53.546 87.6119 53.5411 104.162C53.5411 104.387 53.5117 104.613 53.4822 104.998C51.3476 103.976 49.3111 103.011 47.282 102.032C31.8562 94.6 16.4377 87.1587 0.999622 79.7456C0.280715 79.4004 -0.00390273 79.0459 -0.00144913 78.2522C0.0255405 61.8198 0.0181797 45.3874 0.0206333 28.9551C0.0230869 28.6615 0.0574374 28.361 0.0819734 27.9477Z"&gt;&lt;/path&gt;&lt;path d="M36.9977 42.4758C41.7184 40.0572 46.2846 37.7137 50.8507 35.3773C63.131 29.0936 75.4162 22.8194 87.6842 16.5146C88.4105 16.1412 88.965 16.1248 89.6986 16.484C95.5578 19.3371 101.437 22.1478 107.308 24.975C107.595 25.1135 107.86 25.2873 108.277 25.5244C107.531 25.9001 106.906 26.2265 106.268 26.5318C89.5661 34.5789 72.8596 42.619 56.1677 50.6849C55.3653 51.0723 54.747 51.1217 53.9128 50.7107C48.6866 48.1348 43.4261 45.6223 38.1779 43.0863C37.8245 42.9149 37.4786 42.7247 36.9977 42.4758Z"&gt;&lt;/path&gt;&lt;path d="M1.65613 25.5056C5.03965 23.8736 8.20725 22.3426 11.3749 20.8163C25.5665 13.9785 39.7606 7.1454 53.94 0.28645C54.7129 -0.086906 55.3042 -0.100995 56.0795 0.279406C61.2763 2.8248 66.5024 5.31854 71.7163 7.83341C72.0697 8.00483 72.4083 8.20677 72.9162 8.4815C72.0868 8.9253 71.3949 9.3104 70.6883 9.67202C54.5509 17.9305 38.416 26.1889 22.264 34.4239C21.8223 34.6493 21.1083 34.8231 20.7182 34.6376C14.4198 31.6648 8.15573 28.6334 1.65613 25.5056Z"&gt;&lt;/path&gt;&lt;/g&gt;&lt;/svg&gt;
   &lt;/div&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h6&gt;New Order&lt;/h6&gt;
     &lt;h5&gt;6981&lt;span class="font-roboto font-primary f-w-700"&gt;&lt;i class="icofont icofont-arrow-up"&gt;&lt;/i&gt; 68%&lt;/span&gt;&lt;/h5&gt;
     &lt;div class="icon-bg"&gt;
       &lt;svg width="110" height="105" viewBox="0 0 110 105" xmlns="http://www.w3.org/2000/svg"&gt;&lt;g&gt;&lt;path d="M56.4571 104.995C56.4571 100.722 56.4571 96.6523 56.4571 92.5829C56.4596 79.9804 56.4645 67.3755 56.4547 54.773C56.4547 54.0685 56.5307 53.5801 57.3208 53.1997C74.5917 44.9155 91.8454 36.5959 109.104 28.2835C109.318 28.1802 109.543 28.0956 109.914 27.9407C109.943 28.3938 109.985 28.7555 109.985 29.1171C109.987 45.479 109.982 61.8386 110.002 78.2005C110.002 78.9472 109.828 79.3746 109.067 79.7409C91.9092 87.9759 74.7708 96.2437 57.625 104.505C57.3036 104.655 56.9675 104.779 56.4571 104.995Z"&gt;&lt;/path&gt;&lt;path d="M0.0819734 27.9477C0.543251 28.1426 0.911292 28.2788 1.26216 28.4479C7.06002 31.2375 12.8481 34.0482 18.6607 36.8096C19.4262 37.1736 19.7059 37.5822 19.6985 38.4087C19.6568 43.9645 19.6765 49.5202 19.6765 55.0759C19.6765 55.5033 19.6765 55.933 19.6765 56.5482C21.7645 56.5482 23.7936 56.6257 25.8154 56.52C27.0765 56.4543 27.9353 56.8511 28.799 57.7082C30.8821 59.7816 33.078 61.7494 35.3427 63.8674C35.3427 57.5391 35.3427 51.3095 35.3427 44.8967C36.3487 45.364 37.1878 45.7397 38.0147 46.1365C42.8655 48.4706 47.7089 50.814 52.567 53.1363C53.1927 53.4369 53.573 53.7234 53.573 54.5124C53.5411 71.0621 53.546 87.6119 53.5411 104.162C53.5411 104.387 53.5117 104.613 53.4822 104.998C51.3476 103.976 49.3111 103.011 47.282 102.032C31.8562 94.6 16.4377 87.1587 0.999622 79.7456C0.280715 79.4004 -0.00390273 79.0459 -0.00144913 78.2522C0.0255405 61.8198 0.0181797 45.3874 0.0206333 28.9551C0.0230869 28.6615 0.0574374 28.361 0.0819734 27.9477Z"&gt;&lt;/path&gt;&lt;path d="M36.9977 42.4758C41.7184 40.0572 46.2846 37.7137 50.8507 35.3773C63.131 29.0936 75.4162 22.8194 87.6842 16.5146C88.4105 16.1412 88.965 16.1248 89.6986 16.484C95.5578 19.3371 101.437 22.1478 107.308 24.975C107.595 25.1135 107.86 25.2873 108.277 25.5244C107.531 25.9001 106.906 26.2265 106.268 26.5318C89.5661 34.5789 72.8596 42.619 56.1677 50.6849C55.3653 51.0723 54.747 51.1217 53.9128 50.7107C48.6866 48.1348 43.4261 45.6223 38.1779 43.0863C37.8245 42.9149 37.4786 42.7247 36.9977 42.4758Z"&gt;&lt;/path&gt;&lt;path d="M1.65613 25.5056C5.03965 23.8736 8.20725 22.3426 11.3749 20.8163C25.5665 13.9785 39.7606 7.1454 53.94 0.28645C54.7129 -0.086906 55.3042 -0.100995 56.0795 0.279406C61.2763 2.8248 66.5024 5.31854 71.7163 7.83341C72.0697 8.00483 72.4083 8.20677 72.9162 8.4815C72.0868 8.9253 71.3949 9.3104 70.6883 9.67202C54.5509 17.9305 38.416 26.1889 22.264 34.4239C21.8223 34.6493 21.1083 34.8231 20.7182 34.6376C14.4198 31.6648 8.15573 28.6334 1.65613 25.5056Z"&gt;&lt;/path&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/div&gt;
       &lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class="col-sm-6"&gt;&lt;div class="widget-card"&gt;&lt;div class="d-flex align-self-center"&gt;&lt;div class="widget-icon bg-light-warning"&gt;&lt;svg class="fill-warning" width="98" height="98" viewBox="0 0 98 98" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M7.35 84H12.25V77.1167C12.25 61.5883 25.4677 49 41.7725 49C25.4677 49 12.25 36.4117 12.25 20.8833V14H7.35C3.29525 14 0 10.8617 0 7C0 3.13833 3.29525 0 7.35 0H90.65C94.7047 0 98 3.13833 98 7C98 10.8617 94.7047 14 90.65 14H85.75V20.8833C85.75 36.4117 72.5323 49 56.2275 49C72.5323 49 85.75 61.5883 85.75 77.1167V84H90.65C94.7047 84 98 87.1383 98 91C98 94.8617 94.7047 98 90.65 98H7.35C3.29525 98 0 94.8617 0 91C0 87.1383 3.29525 84 7.35 84ZM77.0893 22.6567C77.1505 22.0733 77.175 21.4783 77.175 20.8833V14H20.825V20.8833C20.825 21.4783 20.8495 22.0733 20.9108 22.6567C25.48 27.51 36.3335 30.9167 49 30.9167C61.6665 30.9167 72.52 27.51 77.0893 22.6567ZM56.2275 57.1667H41.7725C30.2207 57.1667 20.825 66.115 20.825 77.1167V77.9567C25.3575 72.9517 36.26 69.4167 49 69.4167C61.74 69.4167 72.6425 72.9517 77.175 77.9567V77.1167C77.175 66.115 67.7793 57.1667 56.2275 57.1667Z"&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/div&gt;&lt;div class="d-flex-body"&gt;&lt;h6&gt;Pending Order&lt;/h6&gt;&lt;h5&gt;783&lt;span class="font-roboto font-warning f-w-700"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt; 12%&lt;/span&gt;&lt;/h5&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class="icon-bg"&gt;&lt;svg width="98" height="98" viewBox="0 0 98 98" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M7.35 84H12.25V77.1167C12.25 61.5883 25.4677 49 41.7725 49C25.4677 49 12.25 36.4117 12.25 20.8833V14H7.35C3.29525 14 0 10.8617 0 7C0 3.13833 3.29525 0 7.35 0H90.65C94.7047 0 98 3.13833 98 7C98 10.8617 94.7047 14 90.65 14H85.75V20.8833C85.75 36.4117 72.5323 49 56.2275 49C72.5323 49 85.75 61.5883 85.75 77.1167V84H90.65C94.7047 84 98 87.1383 98 91C98 94.8617 94.7047 98 90.65 98H7.35C3.29525 98 0 94.8617 0 91C0 87.1383 3.29525 84 7.35 84ZM77.0893 22.6567C77.1505 22.0733 77.175 21.4783 77.175 20.8833V14H20.825V20.8833C20.825 21.4783 20.8495 22.0733 20.9108 22.6567C25.48 27.51 36.3335 30.9167 49 30.9167C61.6665 30.9167 72.52 27.51 77.0893 22.6567ZM56.2275 57.1667H41.7725C30.2207 57.1667 20.825 66.115 20.825 77.1167V77.9567C25.3575 72.9517 36.26 69.4167 49 69.4167C61.74 69.4167 72.6425 72.9517 77.175 77.9567V77.1167C77.175 66.115 67.7793 57.1667 56.2275 57.1667Z"&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="widget-card"&gt;
 &lt;div class="d-flex align-self-center"&gt;
   &lt;div class="widget-icon bg-light-success"&gt;&lt;
     svg class="fill-success" width="112" height="82" viewBox="0 0 112 82" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M40.2301 0.0161888C50.6652 0.0134581 61.103 0.0134581 71.5381 0.0161888C74.6718 0.0161888 75.6717 1.07297 75.6769 4.36891C75.6796 5.82437 75.7532 7.28803 75.6559 8.73529C75.5664 10.046 76.1058 10.3601 77.2582 10.3519C82.7389 10.3109 88.2196 10.33 93.7003 10.3355C97.105 10.3382 98.3048 11.2748 99.252 14.6964C100.946 20.8104 102.601 26.9381 104.341 33.0385C104.512 33.6365 105.098 34.1307 105.556 34.6086C107.556 36.7003 109.616 38.732 111.563 40.8728C111.921 41.266 111.974 42.0661 111.974 42.6778C112 50.0043 112.003 57.3334 111.984 64.6599C111.979 66.9865 110.824 68.2043 108.593 68.2398C105.83 68.2835 103.067 68.2835 100.304 68.248C99.3204 68.2344 98.8836 68.461 98.7389 69.6434C97.9864 75.7219 94.287 80.1812 89.0195 81.5656C81.1181 83.641 73.5115 78.1086 72.6932 69.6106C72.5853 68.4938 72.1854 68.248 71.2382 68.2508C61.0662 68.2671 50.8915 68.2699 40.7195 68.248C39.7407 68.2453 39.4013 68.5648 39.2934 69.6434C38.6199 76.4019 33.6102 81.5001 27.3743 81.907C20.6912 82.3411 15.1185 78.1932 13.5608 71.6259C13.5293 71.4948 13.4872 71.3638 13.4608 71.2299C12.9083 68.259 12.9083 68.2589 9.94563 68.2589C7.75389 68.2589 5.55951 68.2917 3.36777 68.2453C1.13918 68.1989 -0.000101532 66.9755 -0.000101532 64.6381C-0.00273268 45.9301 -0.0185196 27.2248 0.0525214 8.51957C0.0551525 7.50375 0.62348 6.33501 1.26022 5.51308C2.38109 4.06854 3.78612 2.8643 5.02276 1.50988C5.99102 0.447638 7.10662 -0.0056568 8.52744 -0.00019541C19.0941 0.0353036 29.6608 0.0189194 40.2301 0.0161888ZM97.7943 34.1307C97.7549 33.7539 97.7628 33.4836 97.6943 33.2378C96.2972 28.1232 94.8685 23.0196 93.5029 17.8968C93.253 16.9629 92.7136 16.8482 91.9453 16.8509C86.9935 16.8673 82.039 16.8864 77.0872 16.8427C75.9927 16.8318 75.648 17.2332 75.6611 18.3473C75.7085 22.214 75.6717 26.0807 75.6796 29.9473C75.6848 32.8937 76.9372 34.2127 79.7473 34.2181C85.3122 34.229 90.8797 34.2236 96.4445 34.2181C96.8734 34.2154 97.2997 34.1635 97.7943 34.1307ZM32.9392 68.4091C32.9313 64.5425 29.9923 61.4513 26.2903 61.424C22.583 61.3967 19.5835 64.5725 19.6046 68.5047C19.623 72.3386 22.6304 75.4243 26.3219 75.4052C30.0081 75.3833 32.9445 72.2785 32.9392 68.4091ZM79.0553 68.3791C79.0369 72.254 81.9522 75.3642 85.6437 75.4025C89.3273 75.4434 92.3636 72.355 92.39 68.5348C92.4189 64.5944 89.4457 61.4213 85.7332 61.424C82.0417 61.4322 79.0711 64.5261 79.0553 68.3791Z"&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/div&gt;
     &lt;div class="d-flex-body"&gt;
       &lt;h6&gt;Delivered Order&lt;/h6&gt;
       &lt;h5&gt;$63147&lt;span class="font-roboto font-success f-w-700"&gt;&lt;i class="icofont icofont-arrow-up"&gt;&lt;/i&gt; 50%&lt;/span&gt;&lt;/h5&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="icon-bg"&gt;&lt;svg width="112" height="82" viewBox="0 0 112 82" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M40.2301 0.0161888C50.6652 0.0134581 61.103 0.0134581 71.5381 0.0161888C74.6718 0.0161888 75.6717 1.07297 75.6769 4.36891C75.6796 5.82437 75.7532 7.28803 75.6559 8.73529C75.5664 10.046 76.1058 10.3601 77.2582 10.3519C82.7389 10.3109 88.2196 10.33 93.7003 10.3355C97.105 10.3382 98.3048 11.2748 99.252 14.6964C100.946 20.8104 102.601 26.9381 104.341 33.0385C104.512 33.6365 105.098 34.1307 105.556 34.6086C107.556 36.7003 109.616 38.732 111.563 40.8728C111.921 41.266 111.974 42.0661 111.974 42.6778C112 50.0043 112.003 57.3334 111.984 64.6599C111.979 66.9865 110.824 68.2043 108.593 68.2398C105.83 68.2835 103.067 68.2835 100.304 68.248C99.3204 68.2344 98.8836 68.461 98.7389 69.6434C97.9864 75.7219 94.287 80.1812 89.0195 81.5656C81.1181 83.641 73.5115 78.1086 72.6932 69.6106C72.5853 68.4938 72.1854 68.248 71.2382 68.2508C61.0662 68.2671 50.8915 68.2699 40.7195 68.248C39.7407 68.2453 39.4013 68.5648 39.2934 69.6434C38.6199 76.4019 33.6102 81.5001 27.3743 81.907C20.6912 82.3411 15.1185 78.1932 13.5608 71.6259C13.5293 71.4948 13.4872 71.3638 13.4608 71.2299C12.9083 68.259 12.9083 68.2589 9.94563 68.2589C7.75389 68.2589 5.55951 68.2917 3.36777 68.2453C1.13918 68.1989 -0.000101532 66.9755 -0.000101532 64.6381C-0.00273268 45.9301 -0.0185196 27.2248 0.0525214 8.51957C0.0551525 7.50375 0.62348 6.33501 1.26022 5.51308C2.38109 4.06854 3.78612 2.8643 5.02276 1.50988C5.99102 0.447638 7.10662 -0.0056568 8.52744 -0.00019541C19.0941 0.0353036 29.6608 0.0189194 40.2301 0.0161888ZM97.7943 34.1307C97.7549 33.7539 97.7628 33.4836 97.6943 33.2378C96.2972 28.1232 94.8685 23.0196 93.5029 17.8968C93.253 16.9629 92.7136 16.8482 91.9453 16.8509C86.9935 16.8673 82.039 16.8864 77.0872 16.8427C75.9927 16.8318 75.648 17.2332 75.6611 18.3473C75.7085 22.214 75.6717 26.0807 75.6796 29.9473C75.6848 32.8937 76.9372 34.2127 79.7473 34.2181C85.3122 34.229 90.8797 34.2236 96.4445 34.2181C96.8734 34.2154 97.2997 34.1635 97.7943 34.1307ZM32.9392 68.4091C32.9313 64.5425 29.9923 61.4513 26.2903 61.424C22.583 61.3967 19.5835 64.5725 19.6046 68.5047C19.623 72.3386 22.6304 75.4243 26.3219 75.4052C30.0081 75.3833 32.9445 72.2785 32.9392 68.4091ZM79.0553 68.3791C79.0369 72.254 81.9522 75.3642 85.6437 75.4025C89.3273 75.4434 92.3636 72.355 92.39 68.5348C92.4189 64.5944 89.4457 61.4213 85.7332 61.424C82.0417 61.4322 79.0711 64.5261 79.0553 68.3791Z"&gt;&lt;/path&gt;&lt;/svg&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="widget-card"&gt;
 &lt;div class="d-flex align-self-center"&gt;
   &lt;div class="widget-icon bg-light-danger"&gt;
     &lt;svg class="fill-danger" width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M49.1914 0C22.2778 0 0 21.895 0 48.8086C0 75.7222 22.2778 98 49.1914 98C76.105 98 98 75.7222 98 48.8086C98 21.895 76.105 0 49.1914 0ZM73.3507 64.8465C75.5902 67.086 75.5902 70.7284 73.3507 72.9698C71.1285 75.1901 67.486 75.2265 65.2274 72.9698L49.1914 56.9281L32.7707 72.9717C30.5312 75.2112 26.8888 75.2112 24.6474 72.9717C22.4079 70.7323 22.4079 67.0898 24.6474 64.8484L40.6872 48.8086L24.6474 32.7687C22.4079 30.5274 22.4079 26.8849 24.6474 24.6455C26.8888 22.406 30.5312 22.406 32.7707 24.6455L49.1914 40.6891L65.2274 24.6455C67.463 22.4098 71.1055 22.4022 73.3507 24.6455C75.5902 26.8849 75.5902 30.5274 73.3507 32.7687L57.3109 48.8086L73.3507 64.8465Z"&gt;&lt;/path&gt;&lt;/svg&gt;
   &lt;/div&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h6&gt;Cancelled Order&lt;/h6&gt;
     &lt;h5&gt;69&lt;span class="font-roboto font-danger f-w-700"&gt;&lt;i class="icofont icofont-arrow-up"&gt;&lt;/i&gt; 20%&lt;/span&gt;&lt;/h5&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="icon-bg"&gt;
   &lt;svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M49.1914 0C22.2778 0 0 21.895 0 48.8086C0 75.7222 22.2778 98 49.1914 98C76.105 98 98 75.7222 98 48.8086C98 21.895 76.105 0 49.1914 0ZM73.3507 64.8465C75.5902 67.086 75.5902 70.7284 73.3507 72.9698C71.1285 75.1901 67.486 75.2265 65.2274 72.9698L49.1914 56.9281L32.7707 72.9717C30.5312 75.2112 26.8888 75.2112 24.6474 72.9717C22.4079 70.7323 22.4079 67.0898 24.6474 64.8484L40.6872 48.8086L24.6474 32.7687C22.4079 30.5274 22.4079 26.8849 24.6474 24.6455C26.8888 22.406 30.5312 22.406 32.7707 24.6455L49.1914 40.6891L65.2274 24.6455C67.463 22.4098 71.1055 22.4022 73.3507 24.6455C75.5902 26.8849 75.5902 30.5274 73.3507 32.7687L57.3109 48.8086L73.3507 64.8465Z"&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-12 cols-xl-100 col-sm-12 box-col-12">
                <div class="card o-hidden">
                    <div class="weather-widget-two">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5 col-md-6">
                                    <div class="mobile-clock-widget">
                                        <div>
                                            <ul class="clock" id="clock">
                                                <li class="hour" id="hour"></li>
                                                <li class="min" id="min"></li>
                                                <li class="sec" id="sec"></li>
                                            </ul>
                                            <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span
                                                    id="year">, </span></div>
                                            <div>
                                                <p class="m-0 f-14 text-light">kolkata, India</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6">
                                    <div class="widget-list">
                                        <ul>
                                            <li>
                                                <div class="d-flex">
                                                    <svg class="climacon climacon_cloudDrizzleMoonFillAlt"
                                                        id="cloudDrizzleMoonFillAlt" version="1.1"
                                                        viewBox="15 15 70 70">
                                                        <g
                                                            class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonFillAlt">
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                    d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_moon"
                                                                    fill="#FFFFFF"
                                                                    d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z">
                                                                </path>
                                                            </g>
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                    id="Drizzle-Left_1_6"
                                                                    d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                    d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                    d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z">
                                                                </path>
                                                            </g>
                                                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_cloud"
                                                                    fill="#FFFFFF"
                                                                    d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="flex-grow-1">
                                                        <h5>25*C</h5>
                                                    </div><span>Paris</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <svg class="climacon climacon_cloudLightningMoonFill"
                                                        id="cloudLightningMoonFill" version="1.1" viewBox="15 15 70 70">
                                                        <g
                                                            class="climacon_iconWrap climacon_iconWrap-cloudLightningMoonFill">
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                    d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_moon"
                                                                    fill="#FFFFFF"
                                                                    d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z">
                                                                </path>
                                                            </g>
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                                                <polygon
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_lightning"
                                                                    points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 ">
                                                                </polygon>
                                                            </g>
                                                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_cloud"
                                                                    fill="#FFFFFF"
                                                                    d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="flex-grow-1">
                                                        <h5>25*C</h5>
                                                    </div><span>New York</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <svg class="climacon climacon_cloudHailAltSun" id="cloudHailAltSunalt"
                                                        version="1.1" viewBox="15 15 70 70">
                                                        <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltSun">
                                                            <g
                                                                class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                                <g
                                                                    class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z">
                                                                    </path>
                                                                </g>
                                                                <g
                                                                    class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                                                    <circle
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                        cx="58.033" cy="41.612" r="11.999">
                                                                    </circle>
                                                                    <circle
                                                                        class="climacon_component climacon_component-fill climacon_component-fill_sunBody"
                                                                        fill="#FFFFFF" cx="58.033" cy="41.612"
                                                                        r="7.999"></circle>
                                                                </g>
                                                            </g>
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                                                    <circle cx="42" cy="65.498" r="2">
                                                                    </circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                                                    <circle cx="49.999" cy="65.498" r="2">
                                                                    </circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                                                    <circle cx="57.998" cy="65.498" r="2">
                                                                    </circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                                                    <circle cx="42" cy="65.498" r="2">
                                                                    </circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                                                    <circle cx="49.999" cy="65.498" r="2">
                                                                    </circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                                                    <circle cx="57.998" cy="65.498" r="2">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_cloud"
                                                                    fill="#FFFFFF"
                                                                    d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="flex-grow-1">
                                                        <h5>25*C</h5>
                                                    </div><span>India</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 cols-xl-25 col-md-6 box-col-6">
                <div class="card">
                    <div class="cal-date-widget card-body">
                        <div class="cal-datepicker">
                            <div class="datepicker-here float-sm-end" data-language="en"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 cols-xl-25 col-md-6 box-col-6">
                <div class="card">
                    <div class="widget-feedback card-body">
                        <div class="feedback-top text-center">
                            <svg class="fill-secondary" viewBox="0 0 44 46" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.73709 35.2337C6.17884 31.58 4.00316 26.8452 3.49802 21.7377C1.60687 24.237 0.581465 27.3024 0.586192 30.5195C0.589372 32.612 1.03986 34.692 1.89348 36.5729L0.1333 41.9282C-0.169286 42.8488 0.0517454 43.8484 0.7102 44.5369C1.17358 45.0213 1.78451 45.2794 2.4128 45.2794C2.67714 45.2794 2.94458 45.2337 3.2054 45.14L8.32806 43.2997C10.1272 44.1922 12.1167 44.6631 14.1182 44.6665C17.2557 44.6709 20.2418 43.558 22.657 41.5068C17.8005 41.0474 13.2702 38.8615 9.73709 35.2337Z">
                                </path>
                                <path
                                    d="M43.8418 35.7427L41.2863 27.9674C42.5181 25.3348 43.1691 22.407 43.1735 19.4611C43.181 14.3388 41.2854 9.49561 37.8357 5.82369C34.3853 2.15096 29.7875 0.0836476 24.889 0.00251856C19.8097 -0.0814855 15.0354 1.93839 11.446 5.69081C7.85665 9.44332 5.92425 14.4346 6.00469 19.7451C6.08229 24.8661 8.05972 29.673 11.5726 33.2803C15.078 36.8798 19.6988 38.861 24.5879 38.8608C24.5975 38.8608 24.6077 38.8608 24.6171 38.8608C27.435 38.8563 30.2356 38.1757 32.7537 36.8879L40.1911 39.5596C40.501 39.671 40.8188 39.7252 41.1329 39.7252C41.8795 39.7252 42.6055 39.4187 43.1563 38.8428C43.9388 38.0247 44.2014 36.8369 43.8418 35.7427ZM26.3834 26.1731H16.7865C16.0633 26.1731 15.477 25.5601 15.477 24.804C15.477 24.0479 16.0633 23.435 16.7865 23.435H26.3833C27.1066 23.435 27.6929 24.048 27.6929 24.804C27.6929 25.5602 27.1067 26.1731 26.3834 26.1731ZM32.3894 20.5426H16.7866C16.0633 20.5426 15.4771 19.9296 15.4771 19.1736C15.4771 18.4176 16.0634 17.8046 16.7866 17.8046H32.3894C33.1127 17.8046 33.6989 18.4176 33.6989 19.1736C33.6989 19.9296 33.1127 20.5426 32.3894 20.5426ZM32.3894 14.912H16.7866C16.0633 14.912 15.4771 14.299 15.4771 13.543C15.4771 12.7869 16.0634 12.1739 16.7866 12.1739H32.3894C33.1127 12.1739 33.6989 12.787 33.6989 13.543C33.6989 14.299 33.1127 14.912 32.3894 14.912Z">
                                </path>
                            </svg>
                            <h3>Customer Feedback</h3>
                            <h6 class="font-roboto f-w-400">385749</h6>
                        </div>
                        <div id="feedback-chart"></div>
                        <ul>
                            <li class="font-roboto">
                                <h4>Positive</h4>
                                <h5 class="font-success">90%</h5>
                            </li>
                            <li class="font-roboto">
                                <h4>Negative</h4>
                                <h5 class="font-danger">10%</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card custom-profile">
                    <div class="card-body">
                        <div class="card-profile"><img class="user-img"
                                src="{{ asset('assets/images/general-widget/user-profile.png') }}" alt=""></div>
                        <div class="text-center profile-details"><a href="{{ route('user-profile')}}">
                                <h4>Jenny Gester</h4>
                                <h6>Manager</h6>
                            </a></div>
                        <ul class="card-social">
                            <li class="bg-fb"><a href="https://www.facebook.com" target="_blank"
                                    data-bs-original-title="" title=""><i class="fa fa-facebook"></i></a></li>
                            <li class="bg-gplus"><a href="https://www.google.com" target="_blank"
                                    data-bs-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>
                            <li class="bg-twitter"><a href="https://www.twitter.com" target="_blank"
                                    data-bs-original-title="" title=""><i class="fa fa-twitter"></i></a></li>
                            <li class="bg-insta"><a href="https://www.instagram.com" target="_blank"
                                    data-bs-original-title="" title=""><i class="fa fa-instagram"></i></a></li>
                            <li class="bg-linkedin"><a href="https://www.linkedin.com" target="_blank"
                                    data-bs-original-title="" title=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-4 col-sm-4">
                                <h6 class="font-roboto">Follower</h6>
                                <h5 class="counter">9564</h5>
                            </div>
                            <div class="col-4 col-sm-4">
                                <h6 class="font-roboto">Following</h6>
                                <h5><span class="counter">49</span>K</h5>
                            </div>
                            <div class="col-4 col-sm-4">
                                <h6 class="font-roboto">Total Post</h6>
                                <h5><span class="counter">96</span>M</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Recent Activity</h3>
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
                        <div class="activity-media">
                            <div class="d-flex">
                                <div class="recent-circle bg-primary"></div>
                                <div class="flex-grow-1">
                                    <h6 class="font-roboto">Any desktop publishing pack ages editors.</h6><span><i
                                            class="me-2" data-feather="clock"></i><span class="font-roboto">25 July
                                            2017 | 20 hours ago</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="recent-circle bg-secondary"></div>
                                <div class="flex-grow-1">
                                    <h6 class="font-roboto">
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply.
                                    </h6><span><i class="me-2" data-feather="clock"></i><span class="font-roboto">25
                                            July 2017 | 20 hours ago</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="recent-circle bg-success"></div>
                                <div class="flex-grow-1">
                                    <h6 class="font-roboto">Established fact that a reader will be distracted lorem.</h6>
                                    <span><i class="me-2" data-feather="clock"></i><span class="font-roboto">25 July
                                            2017 | 20 hours ago</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="recent-circle bg-info"></div>
                                <div class="flex-grow-1">
                                    <h6 class="font-roboto">Established fact that a reader will be distracted lorem.</h6>
                                    <span><i class="me-2" data-feather="clock"></i><span class="font-roboto">25 July
                                            2017 | 20 hours ago</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#recent-activity"
                                title="" data-bs-original-title="Copy" aria-label="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="recent-activity">&lt;div class="card"&gt;
&lt;div class="card-header"&gt;
&lt;h3&gt;Recent Activity&lt;/h3&gt;
&lt;div class="card-header-right"&gt;
&lt;ul class="list-unstyled card-option"&gt;
&lt;li&gt;&lt;div&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
&lt;div class="activity-d-flex"&gt;
&lt;div class="d-flex"&gt;
&lt;div class="recent-circle bg-primary"&gt;&lt;/div&gt;
 &lt;div class="d-flex-body"&gt;
   &lt;h6 class="font-roboto"&gt;Any desktop publishing pack ages editors.&lt;/h6&gt;
   &lt;span&gt;&lt;i class="me-2" data-feather="clock"&gt;&lt;/i&gt;&lt;span class="font-roboto"&gt;25 July 2017 | 20 hours ago&lt;/span&gt;&lt;/span&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;div class="d-flex"&gt;
&lt;div class="recent-circle bg-primary"&gt;&lt;/div&gt;
&lt;div class="d-flex-body"&gt;
 &lt;h6 class="font-roboto"&gt;Contrary to popular belief, Lorem Ipsumis not simply.&lt;/h6&gt;
 &lt;span&gt;&lt;i class="me-2" data-feather="clock"&gt;&lt;/i&gt;
 &lt;span class="font-roboto"&gt;25 July 2017 | 20 hours ago&lt;/span&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="d-flex"&gt;
&lt;div class="recent-circle bg-primary"&gt;&lt;/div&gt;
 &lt;div class="d-flex-body"&gt;
   &lt;h6 class="font-roboto"&gt;Established fact that a reader will be distracted lorem.&lt;/h6&gt;
   &lt;span&gt;&lt;i class="me-2" data-feather="clock"&gt;&lt;/i&gt;
   &lt;span class="font-roboto"&gt;25 July 2017 | 20 hours ago&lt;/span&gt;&lt;/span&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;div class="d-flex"&gt;
 &lt;div class="recent-circle bg-primary"&gt;&lt;/div&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h6 class="font-roboto"&gt;Established fact that a reader will be distracted lorem.&lt;/h6&gt;
     &lt;span&gt;&lt;i class="me-2" data-feather="clock"&gt;&lt;/i&gt;
       &lt;span class="font-roboto"&gt;25 July 2017 | 20 hours ago&lt;/span&gt;
     &lt;/span&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 box-col-12">
                        <div class="card testimonial">
                            <div class="card-body"> <img class="img-90 user-img"
                                    src="{{ asset('assets/images/general-widget/testimonial.png') }}" alt=""><a
                                    href="{{ route('user-profile') }}">
                                    <h5>Kelvin E. Ledbetter</h5>
                                </a>
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply
                                    random text. It has roots in a piece of classical Latin
                                    literature from 45 BC, making it over 2000 years old.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 box-col-12">
                        <div class="card order-widget">
                            <div class="card-body">
                                <div class="row heder-widget">
                                    <div class="col-6"><span>New Order</span>
                                        <h3 class="total-num counter">25639</h3>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <ul>
                                                <li>Profit<span class="product-stts font-primary m-l-10">8989<i
                                                            class="icon-angle-up f-12 m-l-10"></i></span></li>
                                                <li>Loss<span class="product-stts font-primary m-l-10">2560<i
                                                            class="icon-angle-down f-12 m-l-10"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-order">
                                    <div>
                                        <div class="progress sm-progress-bar">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-12">
                <div class="card browser-table">
                    <div class="card-header pb-0">
                        <h3>Usage in Browser</h3>
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
                        <div class="table-responsive mb-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Browser</th>
                                        <th>Name</th>
                                        <th>Daily</th>
                                        <th>Weekly</th>
                                        <th>Monthly</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="img-fluid" src="{{ asset('assets/images/dashboard/chrom.png') }}"
                                                alt=""></td>
                                        <td>Google Chrome</td>
                                        <td>28%</td>
                                        <td>76%</td>
                                        <td>36%</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid" src="{{ asset('assets/images/dashboard/firefox.png') }}"
                                                alt=""></td>
                                        <td>Mozilla Firefox</td>
                                        <td>28%</td>
                                        <td>76%</td>
                                        <td>36%</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid" src="{{ asset('assets/images/dashboard/safari.png') }}"
                                                alt=""></td>
                                        <td>Safari (web browser)</td>
                                        <td>28%</td>
                                        <td>76%</td>
                                        <td>36%</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid" src="{{ asset('assets/images/dashboard/opera.png') }}"
                                                alt=""></td>
                                        <td>Opera (web browser)</td>
                                        <td>28%</td>
                                        <td>76%</td>
                                        <td>36%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#usage-browser"
                                title="" data-bs-original-title="Copy" aria-label="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="usage-browser">&lt;div class="card browser-table"&gt;
&lt;div class="card-header pb-0"&gt;
&lt;h3&gt;Usage in Browser&lt;/h3&gt;
&lt;div class="card-header-right"&gt;
&lt;ul class="list-unstyled card-option"&gt;
&lt;li&gt;
 &lt;div&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
&lt;div class="table-responsive mb-0"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
 &lt;tr&gt;
   &lt;th&gt;Browser&lt;/th&gt;
   &lt;th&gt;Name&lt;/th&gt;
   &lt;th&gt;Daily&lt;/th&gt;
   &lt;th&gt;Weekly&lt;/th&gt;
   &lt;th&gt;Monthly&lt;/th&gt;
 &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
 &lt;tr&gt;
   &lt;td&gt;
     &lt;img class="img-fluid" src="{{ asset('assets/images/dashboard/chrom.png') }}" alt="" /&gt;
   &lt;/td&gt;
   &lt;td&gt;Google Chrome&lt;/td&gt;
   &lt;td&gt;28%&lt;/td&gt;
   &lt;td&gt;76%&lt;/td&gt;
   &lt;td&gt;36%&lt;/td&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
   &lt;td&gt;&lt;img class="img-fluid" src="{{ asset('assets/images/dashboard/firefox.png') }}" alt="" /&gt;&lt;/td&gt;
   &lt;td&gt;Mozilla Firefox&lt;/td&gt;
   &lt;td&gt;28%&lt;/td&gt;
   &lt;td&gt;76%&lt;/td&gt;
   &lt;td&gt;36%&lt;/td&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
   &lt;td&gt;&lt;img class="img-fluid" src="{{ asset('assets/images/dashboard/safari.png') }}" alt="" /&gt;&lt;/td&gt;
   &lt;td&gt;Safari (web browser)&lt;/td&gt;<br />&lt;td&gt;28%&lt;/td&gt;
   &lt;td&gt;76%&lt;/td&gt;<br />&lt;td&gt;36%&lt;/td&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
   &lt;td&gt;&lt;img class="img-fluid" src="{{ asset('assets/images/dashboard/opera.png') }}" alt="" /&gt;&lt;/td&gt;
   &lt;td&gt;Opera (web browser)&lt;/td&gt;
   &lt;td&gt;28%&lt;/td&gt;
   &lt;td&gt;76%&lt;/td&gt;
  &lt;td&gt;36%&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card social-widget-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="social-font"><img src="{{ asset('assets/images/general-widget/svg-icon/2.svg') }}"
                                            alt=""></div>
                                    <div class="flex-grow-1">
                                        <h2>Facebook</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-center">
                                        <h6 class="font-roboto">Posts</h6>
                                        <h5 class="counter mb-0 font-roboto font-primary mt-1">6589</h5>
                                    </div>
                                    <div class="col text-center">
                                        <h6 class="font-roboto">Likes</h6>
                                        <h5 class="counter mb-0 font-roboto font-primary mt-1">6589</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card social-widget-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="social-font"><img src="{{ asset('assets/images/general-widget/svg-icon/3.svg') }}"
                                            alt=""></div>
                                    <div class="flex-grow-1">
                                        <h2>Twitter</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-center">
                                        <h6 class="font-roboto">Posts</h6>
                                        <h5 class="counter mb-0 font-roboto font-primary mt-1">920</h5>
                                    </div>
                                    <div class="col text-center">
                                        <h6 class="font-roboto">Likes</h6>
                                        <h5 class="mb-0 font-roboto font-primary mt-1"> <span class="counter">4</span>k
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card social-widget-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="social-font"><img src="{{ asset('assets/images/general-widget/svg-icon/6.svg') }}"
                                            alt=""></div>
                                    <div class="flex-grow-1">
                                        <h2>Linkedin</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-center">
                                        <h6 class="font-roboto">Posts</h6>
                                        <h5 class="counter mb-0 font-roboto font-primary mt-1">1234</h5>
                                    </div>
                                    <div class="col text-center">
                                        <h6 class="font-roboto">Likes</h6>
                                        <h5 class="counter mb-0 font-roboto font-primary mt-1">4369</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card social-widget-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="social-font"><img src="{{ asset('assets/images/general-widget/svg-icon/4.svg') }}"
                                            alt=""></div>
                                    <div class="flex-grow-1">
                                        <h2>Instagram</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-center">
                                        <h6 class="font-roboto">Posts</h6>
                                        <h5 class="counter mb-0 font-roboto font-primary mt-1">369</h5>
                                    </div>
                                    <div class="col text-center">
                                        <h6 class="font-roboto">Likes</h6>
                                        <h5 class="counter mb-0 font-roboto font-primary mt-1">3458</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card user-status">
                    <div class="card-header pb-0">
                        <h3>Product cart </h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li>
                                    <div><i class="icon-settings"></i></div>
                                </li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-0">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">Details</th>
                                        <th scope="col">Qty.</th>
                                        <th scope="col">Price</th>
                                        <th class="text-end" scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dummy text usedout print</td>
                                        <td class="digits">10</td>
                                        <td class="digits font-primary">$6523</td>
                                        <td class="text-end"><span class="badge badge-light-success"> Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>Graphic or web designs</td>
                                        <td class="digits">20</td>
                                        <td class="digits font-primary">$6523</td>
                                        <td class="text-end"><span class="badge badge-light-warning"> Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>Attributed Passage</td>
                                        <td class="digits">40</td>
                                        <td class="digits font-primary">$6523</td>
                                        <td class="text-end"><span class="badge badge-light-success"> Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>Unknown typesetter</td>
                                        <td class="digits">05</td>
                                        <td class="digits font-primary">$6523</td>
                                        <td class="text-end"><span class="badge badge-light-info"> In process</span></td>
                                    </tr>
                                    <tr>
                                        <td>Have scrambled</td>
                                        <td class="digits">08</td>
                                        <td class="digits font-primary">$6523</td>
                                        <td class="text-end"><span class="badge badge-light-warning"> Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>Type specimen</td>
                                        <td class="digits">12</td>
                                        <td class="digits font-primary">$6523</td>
                                        <td class="text-end"><span class="badge badge-light-warning"> Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#product-cart"
                                title="" data-bs-original-title="Copy" aria-label="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="product-cart">&lt;div class="card user-status"&gt;
&lt;div class="card-header pb-0"&gt;
&lt;h3&gt;Product cart &lt;/h3&gt;
&lt;div class="card-header-right"&gt;
&lt;ul class="list-unstyled card-option"&gt;
&lt;li&gt;
 &lt;div&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt; &lt;/i&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
&lt;div class="table-responsive mb-0"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
 &lt;tr&gt;
   &lt;th scope="col"&gt;Details&lt;/th&gt;
   &lt;th scope="col"&gt;Qty.&lt;/th&gt;
   &lt;th scope="col"&gt;Price&lt;/th&gt;
   &lt;th class="text-end" scope="col"&gt;Status&lt;/th&gt;
 &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
 &lt;tr&gt;
   &lt;td&gt;Dummy text usedout print&lt;/td&gt;
   &lt;td class="digits"&gt;10&lt;/td&gt;
   &lt;td class="digits font-primary"&gt;$6523&lt;/td&gt;
   &lt;td class="text-end"&gt;
     &lt;span class="badge badge-light-success"&gt; Done&lt;/span&gt;
   &lt;/td&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
   &lt;td&gt;Graphic or web designs&lt;/td&gt;
   &lt;td class="digits"&gt;20&lt;/td&gt;
   &lt;td class="digits font-primary"&gt;$6523&lt;/td&gt;
   &lt;td class="text-end"&gt;
     &lt;span class="badge badge-light-warning"&gt; Pending&lt;/span&gt;
   &lt;/td&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
   &lt;td&gt;Attributed Passage&lt;/td&gt;
   &lt;td class="digits"&gt;40&lt;/td&gt;
   &lt;td class="digits font-primary"&gt;$6523&lt;/td&gt;
   &lt;td class="text-end"&gt;
     &lt;span class="badge badge-light-success"&gt; Done&lt;/span&gt;
   &lt;/td&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
   &lt;td&gt;Unknown typesetter&lt;/td&gt;
   &lt;td class="digits"&gt;05&lt;/td&gt;
   &lt;td class="digits font-primary"&gt;$6523&lt;/td&gt;
   &lt;td class="text-end"&gt;
     &lt;span class="badge badge-light-info"&gt; In process&lt;/span&gt;
   &lt;/td&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
   &lt;td&gt;Have scrambled&lt;/td&gt;
   &lt;td class="digits"&gt;08&lt;/td&gt;
   &lt;td class="digits font-primary"&gt;$6523&lt;/td&gt;
   &lt;td class="text-end"&gt;
     &lt;span class="badge badge-light-warning"&gt; Pending&lt;/span&gt;
   &lt;/td&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
   &lt;td&gt;Type specimen&lt;/td&gt;
   &lt;td class="digits"&gt;12&lt;/td&gt;
   &lt;td class="digits font-primary"&gt;$6523&lt;/td&gt;
   &lt;td class="text-end"&gt;
     &lt;span class="badge badge-light-warning"&gt; Pending&lt;/span&gt;
   &lt;/td&gt;
 &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card employee-status">
                    <div class="card-header pb-0">
                        <h3>Employee status</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li>
                                    <div><i class="icon-settings"></i></div>
                                </li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Skill Level</th>
                                        <th scope="col">Experience</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex"> <img src="{{ asset('assets/images/user/4.jpg') }}" alt="">
                                                <div class="flex-grow-1"><a href="{{ route('user-profile') }}">
                                                        <h5>Julia Dio <span class="text-muted">(14+ Online)</span></h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Designer</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 30%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2 Year</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-radius align-top m-r-15 rounded-circle"
                                                    src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                                <div class="flex-grow-1"><a href="{{ route('user-profile') }}">
                                                        <h5>Holio Mako <span class="text-muted">(250+ Online)</span></h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Developer</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 70%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>3 Year</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-radius align-top m-r-15 rounded-circle"
                                                    src="{{ asset('assets/images/user/5.jpg') }}" alt="">
                                                <div class="flex-grow-1"><a href="{{ route('user-profile') }}">
                                                        <h5>Mohsib lara<span class="text-muted">(99+ Online)</span></h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Tester</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>5 Month</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img src="{{ asset('assets/images/user/6.jpg') }}" alt="">
                                                <div class="flex-grow-1"><a href="{{ route('user-profile') }}">
                                                        <h5>Hileri Soli <span class="text-muted">(150+ Online)</span></h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Designer</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 30%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>3 Month</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img src="{{ asset('assets/images/user/7.jpg') }}" alt="">
                                                <div class="flex-grow-1"><a href="{{ route('user-profile') }}">
                                                        <h5>Pusiz bia <span class="text-muted">(14+ Online)</span></h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td>Designer</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>5 Year</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#employee-status"
                                title="" data-bs-original-title="Copy" aria-label="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="employee-status">&lt;div class="card employee-status"&gt;
&lt;div class="card-header pb-0"&gt;
&lt;h3&gt;Employee status&lt;/h3&gt;
&lt;div class="card-header-right"&gt;
&lt;ul class="list-unstyled card-option"&gt;
&lt;li&gt;
 &lt;div&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt; &lt;/i&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
&lt;div class="table-responsive"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
 &lt;tr&gt;
   &lt;th scope="col"&gt;Name&lt;/th&gt;
   &lt;th scope="col"&gt;Designation&lt;/th&gt;
   &lt;th scope="col"&gt;Skill Level&lt;/th&gt;
   &lt;th scope="col"&gt;Experience&lt;/th&gt;
 &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
 &lt;tr&gt;
   &lt;td&gt;
     &lt;div class="d-flex"&gt;
       &lt;img src="{{ asset('assets/images/user/4.jpg') }}" alt="" /&gt;
       &lt;div class="d-flex-body"&gt;
         &lt;h5&gt;John Deo &lt;span class="text-muted"&gt;(14+ Online)&lt;/span&gt;&lt;/h5&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/td&gt;
 &lt;td&gt;Designer&lt;/td&gt;
 &lt;td&gt;
   &lt;div class="progress-showcase"&gt;
     &lt;div class="progress" style="height: 8px;"&gt;
       &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/td&gt;
 &lt;td&gt;2 Year&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
 &lt;td&gt;
   &lt;div class="d-flex"&gt;
     &lt;img class="img-radius align-top m-r-15 rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}" alt="" /&gt;
     &lt;div class="d-flex-body"&gt;
       &lt;h5&gt;Holio Mako &lt;span class="text-muted"&gt;(250+ Online)&lt;/span&gt;&lt;/h5&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/td&gt;
 &lt;td&gt;Developer&lt;/td&gt;
 &lt;td&gt;
   &lt;div class="progress-showcase"&gt;
     &lt;div class="progress" style="height: 8px;"&gt;
       &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/td&gt;
 &lt;td&gt;3 Year&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
 &lt;td&gt;
   &lt;div class="d-flex"&gt;
     &lt;img class="img-radius align-top m-r-15 rounded-circle" src="{{ asset('assets/images/user/5.jpg') }}" alt="" /&gt;
     &lt;div class="d-flex-body"&gt;
       &lt;h5&gt;Mohsib lara&lt;span class="text-muted"&gt;(99+ Online)&lt;/span&gt;&lt;/h5&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/td&gt;
 &lt;td&gt;Tester&lt;/td&gt;
 &lt;td&gt;
   &lt;div class="progress-showcase"&gt;
     &lt;div class="progress" style="height: 8px;"&gt;
       &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/td&gt;
 &lt;td&gt;5 Month&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
 &lt;div class="d-flex"&gt;
   &lt;img src="{{ asset('assets/images/user/6.jpg') }}" alt="" /&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h5&gt;Hileri Soli &lt;span class="text-muted"&gt;(150+ Online)&lt;/span&gt;&lt;/h5&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td&gt;
 &lt;div class="progress-showcase"&gt;
   &lt;div class="progress" style="height: 8px;"&gt;
     &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;3 Month&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
 &lt;div class="d-flex"&gt;
   &lt;img src="{{ asset('assets/images/user/7.jpg') }}" alt="" /&gt;
   &lt;div class="d-flex-body"&gt;
     &lt;h5&gt;Pusiz bia &lt;span class="text-muted"&gt;(14+ Online)&lt;/span&gt;&lt;/h5&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td&gt;
 &lt;div class="progress-showcase"&gt;
   &lt;div class="progress" style="height: 8px;"&gt;
    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;5 Year&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-4 col-md-12 box-col-6 xl-50">
                <div class="card height-equal">
                    <div class="calender-widget">
                        <div class="cal-img"></div>
                        <div class="cal-date">
                            <h5>25<br>APRIL</h5>
                        </div>
                        <div class="cal-desc text-center card-body">
                            <h3>I must explain to you how? </h3>
                            <p>Denouncing pleasure and praising pain was born and I will give you a complete account of the
                                system, and expound the actual teachings of the great explorer of the truth,Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop Lorem Ipsum is simply.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-8 col-md-12 box-col-6 xl-50">
                <div class="card">
                    <div class="card-header">
                        <h3>Contact Us </h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li>
                                    <div><i class="icon-settings"></i></div>
                                </li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-form card-body">
                        <form class="theme-form">
                            <div class="form-icon"><i class="icofont icofont-envelope-open"></i></div>
                            <div class="mb-3">
                                <label for="exampleInputName">Your Name</label>
                                <input class="form-control" id="exampleInputName" type="text"
                                    placeholder="John Dio">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="exampleInputEmail1">Email</label>
                                <input class="form-control" id="exampleInputEmail1" type="email"
                                    placeholder="Demo@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="exampleInputEmail1">Message</label>
                                <textarea class="form-control textarea" rows="3" cols="50" placeholder="Your Message"></textarea>
                            </div>
                            <div class="text-sm-end"><a class="btn btn-primary" href="{{ route('email_read')}}">SEND IT</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-body p-0">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#contact-us"
                                title="" data-bs-original-title="Copy" aria-label="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="contact-us">&lt;div class="card"&gt;
&lt;div class="card-header"&gt;
&lt;h3&gt;Contact Us &lt;/h3&gt;
&lt;div class="card-header-right"&gt;
&lt;ul class="list-unstyled card-option"&gt;
&lt;li&gt;
 &lt;div&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
&lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt; &lt;/i&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="contact-form card-body"&gt;
&lt;form class="theme-form"&gt;
&lt;div class="form-icon"&gt;&lt;i class="icofont icofont-envelope-open"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;div class="mb-3"&gt;
&lt;label for="exampleInputName"&gt;Your Name&lt;/label&gt;
&lt;input class="form-control" id="exampleInputName" type="text" placeholder="John Dio" /&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
&lt;label class="col-form-label" for="exampleInputEmail1"&gt;Email&lt;/label&gt;
&lt;input class="form-control" id="exampleInputEmail1" type="email" placeholder="Demo@gmail.com" /&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
&lt;label class="col-form-label" for="exampleInputEmail1"&gt;Message&lt;/label&gt;
&lt;textarea class="form-control textarea" rows="3" cols="50" placeholder="Your Message"&gt;
&lt;/textarea&gt;
&lt;/div&gt;
&lt;div class="text-sm-end"&gt;
&lt;a class="btn btn-primary" href="index.html"&gt;SEND IT&lt;/a&gt;
&lt;/div&gt;
&lt;/form&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/general-widget.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>

@endsection
