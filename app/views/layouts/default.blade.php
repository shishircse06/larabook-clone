<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    {{ HTML::style('css/main.css') }}
    <title>Document</title>
</head>
<body>
@include('layouts.partials.nav')
<div class="container">
    @yield('content')
</div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>