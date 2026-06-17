<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holle</title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>

<body>
    <div class="navbar">
        <div class="logo"><img src="/img/Holle logo.png">
            <h1>HOLLE</h1>
        </div>
        <div class="searchbar"><input type="search" class="text" placeholder="Search the store"><input type="button"
                class="button" value=""></div>
        @if (Auth::check())
            <a class="user"><img src="/img/user.svg">
                <div>
                    <p>Welcome, user</p><b>
                        <p style="margin-top: -10%">Your account</p>
                    </b>
                </div>
            </a>
        <div class="purchases"></div>
        @else
            <a class="user" href="https://holle.tacticalpigeon.com/login"><img src="/img/user.svg">
                <div>
                    <p>Hello!</p><b>
                        <p style="margin-top: -10%">Sign/Log in</p>
                    </b>
                </div>
            </a>
        @endif
    </div>
    @yield('content')
    <div class="footer">
        <div>
            <h1>Get to know us</h1>
            <a href="https://tacticalpigeon.com"><p>TacticalPigeon</p></a>
            <a><p>About us</p></a>
            <a><p>Contact us</p></a>
        </div>
        <div>
            <h1>Make Money with Us</h1>
            <a><p>Sell on Holle</p></a>
            <a><p>Host on Subpolygon</p></a>
        </div>
        <div>
            <h1>Holle Payment Methods</h1>
            <a><p>Pigeon trade</p></a>
            <a><p>Gift cards</p></a>
        </div>
    </div>
</body>

</html>
