<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  @include('partials.css-section')
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="../assets/img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Selamat Datang</h4>
            <p class="text-muted">Silahkan login untuk masuk ke Back Office Honey Baby Spa</p>

            <form method="POST" action="{{url('/login')}}" class="needs-validation" novalidate="">
                @csrf
              <div class="form-group">
                <label for="user_id">User ID</label>
                <input id="text" type="text" class="form-control" name="user_id" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Silahkan isi User ID anda
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  Silahkan isi Password anda
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>

              <div class="form-group text-right">
                {{-- <a href="auth-forgot-password.html" class="float-left mt-3">
                  Forgot Password?
                </a> --}}
                <button type="submit" class="btn bg-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              {{-- <div class="mt-5 text-center">
                Don't have an account? <a href="auth-register.html">Create new one</a>
              </div> --}}
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; Honey Baby Spa. Made with 💙 by <a href="">Sandybroom</a> and powered By Stisla
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{asset('assets/img/login_img.jpg')}}">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Honey Baby Spa</h1>
                <h5 class="font-weight-normal text-muted-transparent">{{date('l')}}, {{date('d')}} {{date('F')}} {{date('Y')}} </h5>
              </div>
              <a href="https://www.freepik.com/free-photo/cute-little-girl-with-easter-eggs-sitting-floor-home_2462255.htm#query=baby%20spa&position=49&from_view=search&track=ais">Image by freepic.diller</a> on Freepik
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('partials.js-section')
</body>
</html>
