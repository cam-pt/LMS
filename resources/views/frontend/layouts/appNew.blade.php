<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta -->
            <meta name="description" content="@yield('meta_description', config('settings.site_description'))">
            <meta name="author" content="@yield('meta_author', 'Dr Gabz')">
            @yield('meta')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon" />
        
        <title>{{app_name()}} - @yield('title', app_name())</title>
        <link rel="stylesheet" href="css/newStyle/bootstrap.min.css">
        <script src="js/newStyle/jquery.js"></script>
        <script src="js/newStyle/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/newStyle/style.css">
    </head>
    <body>
        @yield('content')
    </body>
</html>