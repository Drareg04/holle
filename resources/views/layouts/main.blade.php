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
    @empty($disableNavbar)
        <div class="navbar">
            <a class="logo" href="/">
                <img src="/img/Holle logo.png">
                <h1>HOLLE</h1>
            </a>

            <form class="searchbar" action="/search">
                <input type="search" class="text" name="q" placeholder="Search the store">
                <input type="submit" class="button" value="">
            </form>
            @if (Auth::check())
                <a class="user"><img style="z-index: 10" src="/img/user.svg">
                    <div class="usertext">
                        <p>Welcome, {{ Auth::user()->name }}</p>
                    </div>
                    <div id="userpopup" class="popup">
                        <div id="userpopupcontent">

                            <a href="/{{ Auth::user()->username }}">
                                <p>Profile</p>
                            </a>
                            <a href="/settings">
                                <p>Settings</p>
                            </a>
                            <a href="/auth/logout">
                                <p>Log Out</p>
                            </a>

                        </div>
                    </div>
                </a>
                <a class="purchases" href="/chat">
                    <div></div>
                </a>
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
    @endempty

    @yield('content')
    <div class="footer">
        <div>
            <h1>Get to know us</h1>
            <a href="https://tacticalpigeon.com">
                <p>TacticalPigeon</p>
            </a>
            <a>
                <p>About us</p>
            </a>
            <a>
                <p>Contact us</p>
            </a>
        </div>
        <div>
            <h1>Make Money with Us</h1>
            <a href="/become_merchant">
                <p>Sell on Holle</p>
            </a>
            <a>
                <p>Host on Subpolygon</p>
            </a>
        </div>
        <div>
            <h1>Holle Payment Methods</h1>
            <a>
                <p>Pigeon trade</p>
            </a>
            <a>
                <p>Gift cards</p>
            </a>
        </div>
    </div>

    <script src="/js/jquery-4.0.0.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
