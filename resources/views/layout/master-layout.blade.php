<!doctype html>
<html class="no-js" lang="en">

@include('layout.head')

<body>
<!-- Start Left menu area -->
@include('layout.left-sidebar')
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
@include('layout.header')
<!------Content ----------->

@yield('content')

<!------End Content ----------->


    @include('layout.footer')
</div>
@yield('js')
@include('layout.scripts')
</body>
</html>
