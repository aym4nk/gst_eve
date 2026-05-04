<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.cdnfonts.com/css/porladek" rel="stylesheet">

<title>Evenova</title>

<link rel="icon" type="image/png" href="{{ asset('icon/icon.png') }}">

<style>

/* BODY */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #eee1d7;
}

/* NAVBAR */
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

.user-name {
    color: #780000;
    font-weight: bold;
    font-size: 13px;
}

/* LOGIN BUTTON NAV */
.btn-login {
    background-color: transparent;
    border: 1px solid #780000;
    color: #780000;
    padding: 6px 14px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
    transition: all 0.2s ease;
}

.btn-login:hover {
    background-color: #780000;
    color: white;
    transform: scale(1.05);
}

/* REGISTER BUTTON NAV */
.btn-register {
    background-color: #780000;
    color: white;
    padding: 6px 14px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
    transition: all 0.2s ease;
}

.btn-register:hover {
    background-color: #461220;
    transform: scale(1.05);
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

/* ANIMATION BOX */
@keyframes glowMove {
    0% { box-shadow: 0 0 15px rgba(120,0,0,0.4); }
    25% { box-shadow: 15px 0 35px rgba(255,107,107,0.5); }
    50% { box-shadow: 0 15px 40px rgba(120,0,0,0.5); }
    75% { box-shadow: -15px 0 35px rgba(255,107,107,0.5); }
    100% { box-shadow: 0 0 15px rgba(120,0,0,0.4); }
}

/* LOGIN BOX */
.login-box {
    background-color: #ffe5d9;
    width: 850px;
    margin: 70px auto;
    border-radius: 15px;
    display: flex;
    align-items: center;
    gap: 40px;
    padding: 35px;
    animation: glowMove 8s infinite ease-in-out;
}

/* IMAGE */
.img {
    width: 50%;
}

.img img {
    width: 100%;
    border-radius: 10px;
}

/* FORM */
.form-side {
    width: 50%;
    text-align: center;
}

.form-side h2 {
    color: #780000;
    font-family: 'Porladek', sans-serif;
}

/* INPUT */
.form-side input {
    width: 100%;
    padding: 10px 5px;
    margin: 15px 0;
    border: none;
    border-bottom: 2px solid #780000;
    background: transparent;
    outline: none;
}

/* BUTTON LOGIN */
.form-side button {
    width: 100%;
    padding: 10px;
    background: linear-gradient(135deg, #780000, #a00000);
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    font-size: 14px;
    transition: all 0.25s ease;
}

.form-side button:hover {
    transform: scale(1.05);
    background: linear-gradient(135deg, #a00000, #780000);
    box-shadow: 0 8px 20px rgba(120,0,0,0.4);
}

.form-side button:active {
    transform: scale(0.97);
}

/* ERROR */
.error {
    color: red;
    margin-top: 10px;
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <a href="{{ route('home') }}" style="text-decoration:none;">
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

<!-- LOGIN -->
<div class="login-box">

    <div class="img">
        <img src="{{ asset('icon/img1.png') }}">
    </div>

    <div class="form-side">
        <h2>Login</h2>

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>

        @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif

        <p>
            Don't have an account?
            <a href="{{ route('register') }}">Register</a>
        </p>
    </div>

</div>

</body>
</html>