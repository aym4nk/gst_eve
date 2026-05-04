<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.cdnfonts.com/css/porladek" rel="stylesheet">

<title>@yield('title', 'Evenova')</title>

<link rel="icon" type="image/png" href="{{ asset('icon/icon.png') }}">

<style>

/* BODY */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #eee1d7;
}

/* 🔻 NAVBAR */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ffe5d9;
    padding: 10px 30px;
}

.logo-text {
    color: #780000;
    font-family: 'Porladek', sans-serif;
    font-size: 18px;
}

/* NAV LINKS */
.nav-links {
    display: flex;
    gap: 10px;
    align-items: center;
}

/* USER */
.user-name {
    color: #780000;
    font-weight: bold;
    font-size: 13px;
}

/* LOGIN */
.btn-login {
    background-color: transparent;
    border: 1px solid #780000;
    color: #780000;
    padding: 6px 14px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
}

.btn-login:hover {
    background-color: #780000;
    color: white;
}

/* REGISTER */
.btn-register {
    background-color: #780000;
    color: white;
    padding: 6px 14px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
}

.btn-register:hover {
    background-color: #461220;
}

/* LOGOUT */
.btn-logout {
    background-color: #780000;
    color: white;
    padding: 6px 14px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-size: 13px;
}

.btn-logout:hover {
    background-color: #461220;
}

/* MAIN */
main {
    min-height: 60vh;
    padding: 20px;
}

/* 🔥 FOOTER */
footer {
    background: #111;
    color: #ccc;
    padding: 50px 80px;
}

.footer-top {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

.footer-col h4 {
    color: white;
    margin-bottom: 15px;
}

.footer-col a {
    display: block;
    color: #aaa;
    text-decoration: none;
    margin-bottom: 8px;
    font-size: 14px;
}

.footer-col a:hover {
    color: white;
}

.footer-bottom {
    border-top: 1px solid #333;
    padding-top: 15px;
    font-size: 13px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-bottom a {
    color: #aaa;
    margin-right: 15px;
    text-decoration: none;
}

.footer-bottom a:hover {
    color: white;
}

</style>

@yield('styles')

</head>

<body>

<!-- NAVBAR -->
<nav>
   <a href="{{ route('home') }}">
        <h1 class="logo-text">Evenova</h1>
    </a>

    <div class="nav-links">

        @guest
            <a href="{{ route('login') }}" class="btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn-register">Register</a>
        @endguest

        @auth
            <span class="user-name">{{ auth()->user()->name }}</span>

            <form method="POST" action="{{ url('/logout') }}">
                @csrf
                <button class="btn-logout">Logout</button>
            </form>
        @endauth

    </div>
</nav>

<!-- CONTENT -->
<main>
    @yield('content')
</main>

<!-- FOOTER -->
<footer>

    <div class="footer-top">

        <div class="footer-col">
            <h4>Your Account</h4>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            <a href="#">Help</a>
        </div>

        <div class="footer-col">
            <h4>Discover</h4>
            <a href="#">Groups</a>
            <a href="#">Events</a>
            <a href="#">Cities</a>
        </div>

        <div class="footer-col">
            <h4>Evenova</h4>
            <a href="#">About</a>
            <a href="#">Blog</a>
            <a href="#">Careers</a>
        </div>

        <div class="footer-col">
            <h4>Follow Us</h4>
            <a href="https://www.facebook.com/">Facebook</a>
            <a href="https://www.instagram.com/">Instagram</a>
            <a href="https://www.tiktok.com/">TikTok</a>
        </div>

    </div>

    <div class="footer-bottom">
        <div>© 2026 Evenova</div>

        <div>
            <a href="#">Terms</a>
            <a href="#">Privacy</a>
            <a href="#">Cookies</a>
        </div>
    </div>

</footer>

</body>
</html>