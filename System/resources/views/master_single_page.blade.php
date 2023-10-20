<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-toke" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <meta name="SubRouteName" content="@yield('subRouter')">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@200;300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('static/css/core.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('static/css/single_page.css?v='.time()) }}">

    <title> {{ Config('cms.app_name') }} </title>
    
</head>
<body>

    <div class="wrapper">
        @section('content')
        @show
    </div>
    
</body>