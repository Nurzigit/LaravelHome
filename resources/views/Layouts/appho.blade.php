<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>

@include('inc.header')

@if(Request::is('/'))
    @include('inc.hero')
@endif

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
        @if(Request::is('/k'))
            <div class="col-4">
                @include('inc.aside')
                @endif
            </div>
    </div>
</div>



@include('inc.footer')
</body>
</html>
