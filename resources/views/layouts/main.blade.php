<!DOCTYPE html>
<html>
<head>

    @include('partials._head')

</head>
<body>
    @section('nav')
        <div class="resume_bg">
            @include('partials._nav')
        </div>
    @show

    @yield('content')

    @section('footer')
        @include('partials._footer')
    @show

    @section('scripts')
        @include('partials._scripts')
    @show

</body>
</html>