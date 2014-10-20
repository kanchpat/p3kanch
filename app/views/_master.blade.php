<!DOCTYPE html>
<html>
<head>

    <title>@yield('title','Developer Tools')</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' href='/css/styleforpwdgen.css' type='text/css'>
    <div id="header">
        <h1>
        @yield('head')
        </h1>
    </div>
</head>
<body>

     @yield('content')


    <h2>
        @yield('errors','')
    </h2>

    <div id="buttons" class="buttons">
        @yield('buttons')
    </div>

    @yield('body')
    @yield('result')
    @yield('back')
</body>
</html>