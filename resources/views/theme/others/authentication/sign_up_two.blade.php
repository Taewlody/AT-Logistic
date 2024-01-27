@extends('others.layout_others.master')

@section('others-content')
<div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/1.jpg') }}" alt="bg1"></div>
      <div class="col-xl-5 p-0">
        <div class="login-card">
          <div>
            <div><a class="logo text-center" href="{{ route('dashboard') }}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo image"></a></div>
            <div class="login-main">
              <form class="theme-form">
                <h2>Create your account</h2>
                <p>Enter your personal details to create account</p>
                <div class="form-group">
                  <label class="col-form-label pt-0">Your Name</label>
                  <div class="row g-2">
                    <div class="col-6">
                      <input class="form-control" type="text" required="" placeholder="First name">
                    </div>
                    <div class="col-6">
                      <input class="form-control" type="text" required="" placeholder="Last name">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"></span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="javascript:void(0)">Privacy Policy</a></label>
                  </div>
                  <button class="btn btn-primary btn-block w-100 mt-3" type="submit">unlock</button>
                </div>
                <div class="login-social-title">
                  <h3>Or Sign in with                 </h3>
                </div>
                <div class="form-group">
                  <ul class="login-social">
                    <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"> </i></a></li>
                    <li><a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
                <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ route('login')}}">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
