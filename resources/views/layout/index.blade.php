<!DOCTYPE html>
<html lang="en">

<head>
  @include('component.style')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('component.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('component.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- @include('component.footer') --}}
   <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('component.script')
  
  @stack('addon-script')

  @stack('js')

</body>

</html>