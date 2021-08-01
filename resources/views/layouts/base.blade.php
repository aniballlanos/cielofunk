<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

{{--    <link rel="icon" href="/favicon.ico">--}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.3-web/css/all.min.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


</head>
<body>

    <div class="container-fluid bg-dark">
        <div class="container">
            @include('parts.navmenu')
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('info'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert-wrapper position-fixed w-100">
            <div class="alert alert-danger position-relative">
                <ul class="position-absolute top-50 start-0 translate-middle-y list-unstyled" style="display: contents">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn btn-outline-danger position-absolute top-0 end-0 me-3 mt-2 px-2 py-1" data-dismiss="alert"><i class="fas fa-times-circle"></i></button>
            </div>
        </div>
    @endif


    <div class="container py-2 bg-light mh-100 h-100">
        <div class="row content">
            @yield('content')
        </div>
    </div>

<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@livewireScripts
</body>
</html>
