<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="">
    <title>{{ config('app.name') }}</title>

    @include('layouts.inc_top')
</head>

<body>
@include('layouts.main_header')
<div class="row">
    <div class="col m-2">
        @include('partials.notification')
    </div>
</div>
    @yield('content')


</body>

</html>
