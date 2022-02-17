<!DOCTYPE html>
<html lang="en">
@section('header')
@include('layouts.partials.header')
@show

<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.partials.sideBar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.partials.mainHeader')
        @yield('mainContent')
        @include('layouts.partials.footerWrapper')
    </main>
    @include('layouts.partials.footerJS')
    @yield('customScript')
</body>

</html>