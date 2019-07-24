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

    @include('partials._footer')

    @include('partials._scripts')

</body>
</html>