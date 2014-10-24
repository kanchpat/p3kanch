<!DOCTYPE html>
<html>
<head>

    <title>@yield('title','Developer Tools')</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' href='/css/styleforpwdgen.css' type='text/css'>
    <div id="header" class="header">
        <h1>
            @yield('head')
        </h1>
    </div>
</head>
<body>
<br> <br>
<div id="content" class="content">
    <h2>
        @yield('content')
    </h2>
</div>
<div id="errors" class="errors">
    <h2>
        @yield('errors','')
    </h2>
</div>
<br>
<div id="buttons" class="buttons">
    @yield('buttons')
</div>
<div id="body" class="body">
    @yield('body')
</div>
<br>
<h3>
    <div id="result" class="result">
        @yield('result')
    </div>
</h3>
<div id="back" class="back">
    <br>
    @yield('back')
</div>
</body>
</html>