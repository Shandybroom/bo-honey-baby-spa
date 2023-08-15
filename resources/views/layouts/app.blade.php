<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Backoffice Honey Baby Spa</title>

  @include('partials.css-section')
  @yield('style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
        {{-- Navbar --}}
      <div class="navbar-bg"></div>
        @include('partials.navbar')

      {{-- Side Bar --}}
        @include('partials.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('content')
        </section>
      </div>
      <footer class="main-footer fixed-bottom">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  @include('partials.js-section')
  @yield('scripts')
</body>
</html>
