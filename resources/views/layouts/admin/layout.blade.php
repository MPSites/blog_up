<!DOCTYPE html>
<html lang="en">

{{-- head --}}

@include('pages.admin.fixed.head')

<body class="animsition">

        {{-- navigacija --}}

        @include('pages.admin.fixed.nav')

        {{-- CONTENT --}}

        @yield('content')

        {{-- END CONTENT --}}
        
        {{-- footer --}}

        @include('pages.admin.fixed.footer')

        {{-- scripts --}}

        @include('pages.admin.fixed.scripts')

</body>

</html>
<!-- end document-->
