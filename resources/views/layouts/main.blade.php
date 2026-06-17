<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holle</title>
    <link rel="stylesheet" href="/src/styles.css">
</head>
<body>
    <div class="navbar">
        <div class="logo"><img src="/img/Holle logo.png"><h1>HOLLE</h1></div>
        <div class="searchbar"><input type="search" class="text" placeholder="Search the store"><input type="button" class="button"  value=""></div>
        @if (Auth::check())
        <a class="user"><img src="/img/user.svg"><div><p>Welcome, user</p><b><p style="margin-top: -10%">Your account</p></b></div></a>
        @else
        <a class="user"><img src="/img/user.svg"><div><p>Welcome, user</p><b><p style="margin-top: -10%">Sign/Log in</p></b></div></a>
        @endif
        <div class="purchases"></div>
    </div>
    @yield('content')
</body>
</html>