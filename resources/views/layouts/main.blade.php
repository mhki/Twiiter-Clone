<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}">
    <title>tWIttER-M</title>
</head>
<body>
@include('partials.header')
<div class="container">
    @yield('main')
</div>
@include('partials.footer')
</body>
</html>