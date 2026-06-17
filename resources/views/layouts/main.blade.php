<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/src/styles.css">
</head>
<body>
    <div class="navbar">
        <div class="logo"><img src="/img/Holle logo.png"><h1>HOLLE</h1></div>
        <div class="searchbar"><input type="search"><input type="button"></div>
        <div class="user"></div>
        <div class="cart"></div>
    </div>
    @yield('content')
</body>
</html>