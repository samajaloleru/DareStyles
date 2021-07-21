<!doctype html>
<html class="no-js" lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <link href="css/app.css" rel="stylesheet">
        <link href="css/plugins.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <title>{{config('app.name', 'LSAPP')}}</title>

    </head>
    <body>
        @include('inc.navbar')
        
        @yield('content')

        @include('inc.footer')
        <script src="{{ asset('js/plugins.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/main.js')}}" type="text/javascript"></script>
    </body>
</html>
