<!DOCTYPE html>
<html lang="en">

    @include('fixed.head')

<body>

  <!-- Navigacija -->
  @include('fixed.nav')

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  @include('fixed.footer')

  <!-- Bootstrap/JavaScript -->
  @include('fixed.scripts')

</body>

</html>