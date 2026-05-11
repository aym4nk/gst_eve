<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - Evenova</title>

<link rel="icon" type="image/png" href="{{ asset('icon/icon.png') }}">

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

<style>

/* =========================================
   RESET
========================================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'DM Sans',sans-serif;

    background:
    linear-gradient(
        to bottom,
        #f7efe8 0%,
        #f8f4f0 40%,
        #f8f4f0 100%
    );

    min-height:100vh;

    overflow-x:hidden;
}

/* =========================================
   NAVBAR
========================================= */

.ev-nav{
    position:sticky;
    top:0;
    z-index:1000;

    display:flex;
    justify-content:space-between;
    align-items:center;

    width:100%;

    padding:26px 70px;

    background:
    rgba(247,239,232,.78);

    backdrop-filter:blur(18px);

    border-bottom:
    1px solid rgba(120,0,0,.05);
}

/* LOGO */

.ev-logo{
    font-family:'DM Serif Display',serif;

    font-size:34px;

    color:#780000;

    text-decoration:none;

    letter-spacing:-1.5px;

    transition:.3s;
}

.ev-logo:hover{
    transform:scale(1.03);
}

/* LINKS */

.ev-nav-links{
    display:flex;
    align-items:center;
    gap:24px;

    list-style:none;
}

.ev-nav-links a{
    text-decoration:none;
}

/* LOGIN */

.ev-nav-login{
    color:#555;

    font-size:15px;
    font-weight:500;

    position:relative;

    transition:.3s;
}

.ev-nav-login::after{
    content:'';

    position:absolute;

    left:0;
    bottom:-6px;

    width:100%;
    height:2px;

    background:#780000;
}

/* REGISTER */

.ev-nav-cta{
    background:#780000;

    color:white !important;

    padding:13px 28px;

    border-radius:999px;

    font-size:14px;
    font-weight:600;

    transition:.3s;

    box-shadow:
    0 12px 30px rgba(120,0,0,.14);
}

.ev-nav-cta:hover{
    transform:translateY(-2px);

    background:#5f0000;
}

/* =========================================
   PAGE
========================================= */

.login-wrapper{
    min-height:calc(100vh - 100px);

    display:flex;
    align-items:center;
    justify-content:center;

    padding:50px;
}

/* =========================================
   LOGIN BOX
========================================= */

.login-box{
    width:1100px;

    display:grid;
    grid-template-columns:1fr 1fr;

    background:white;

    border-radius:34px;

    overflow:hidden;

    box-shadow:
    0 25px 80px rgba(120,0,0,.10);

    animation:fadeUp 1s ease;
}

@keyframes fadeUp{

    from{
        opacity:0;
        transform:translateY(40px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* =========================================
   LEFT SIDE
========================================= */

.login-left{
    background:
    linear-gradient(
        135deg,
        #780000,
        #4d0000
    );

    position:relative;

    display:flex;
    align-items:center;
    justify-content:center;

    overflow:hidden;
}

/* circles */

.login-left::before{
    content:'';

    position:absolute;

    width:520px;
    height:520px;

    border-radius:50%;

    border:70px solid rgba(255,255,255,.05);

    top:-140px;
    right:-120px;

    animation:rotateSlow 18s linear infinite;
}

.login-left::after{
    content:'';

    position:absolute;

    width:320px;
    height:320px;

    border-radius:50%;

    border:50px solid rgba(255,255,255,.04);

    bottom:-100px;
    left:-100px;

    animation:rotateReverse 18s linear infinite;
}

@keyframes rotateSlow{

    from{
        transform:rotate(0deg);
    }

    to{
        transform:rotate(360deg);
    }
}

@keyframes rotateReverse{

    from{
        transform:rotate(360deg);
    }

    to{
        transform:rotate(0deg);
    }
}

/* CARD */

.login-card{
    width:320px;

    background:rgba(255,255,255,.08);

    backdrop-filter:blur(14px);

    border:1px solid rgba(255,255,255,.15);

    border-radius:30px;

    padding:24px;

    position:relative;
    z-index:2;

    animation:floatCard 4s ease-in-out infinite;
}

@keyframes floatCard{

    0%{
        transform:translateY(0) rotate(-3deg);
    }

    50%{
        transform:translateY(-10px) rotate(-2deg);
    }

    100%{
        transform:translateY(0) rotate(-3deg);
    }
}

.login-card img{
    width:100%;
    border-radius:18px;
}

.card-tag{
    display:inline-block;

    background:rgba(255,255,255,.14);

    color:white;

    padding:6px 12px;

    border-radius:999px;

    font-size:11px;
    font-weight:600;

    margin-bottom:16px;
}

.card-title{
    font-family:'DM Serif Display',serif;

    color:white;

    font-size:28px;

    line-height:1.2;

    margin-top:18px;
}

/* =========================================
   RIGHT SIDE
========================================= */

.login-right{
    padding:80px;

    display:flex;
    flex-direction:column;
    justify-content:center;
}

.login-right h1{
    font-family:'DM Serif Display',serif;

    font-size:58px;

    color:#1a0000;

    margin-bottom:16px;
}

.login-right p{
    color:#777;

    line-height:1.8;

    margin-bottom:36px;

    font-size:15px;
}

/* INPUTS */

.input-group{
    margin-bottom:22px;
}

.input-group input{
    width:100%;

    padding:18px 20px;

    border-radius:16px;

    border:1px solid rgba(120,0,0,.08);

    background:#faf7f5;

    outline:none;

    font-size:14px;

    transition:.3s;
}

.input-group input:focus{
    border-color:#780000;

    background:white;

    box-shadow:
    0 0 0 4px rgba(120,0,0,.05);
}

/* BUTTON */

.login-btn{
    width:100%;

    border:none;

    padding:18px;

    border-radius:16px;

    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    font-size:15px;
    font-weight:600;

    cursor:pointer;

    transition:.3s;

    box-shadow:
    0 15px 35px rgba(120,0,0,.16);
}

.login-btn:hover{
    transform:translateY(-3px);

    box-shadow:
    0 20px 45px rgba(120,0,0,.24);
}

/* FOOT TEXT */

.bottom-text{
    margin-top:24px;

    color:#666;

    font-size:14px;
}

.bottom-text a{
    color:#780000;

    text-decoration:none;

    font-weight:600;
}

/* ERROR */

.error{
    color:red;

    margin-top:16px;

    font-size:14px;
}

/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:980px){

    .login-box{
        grid-template-columns:1fr;
    }

    .login-left{
        display:none;
    }

    .login-right{
        padding:50px 28px;
    }

    .ev-nav{
        padding:20px 24px;
    }

    .ev-logo{
        font-size:28px;
    }

    .login-right h1{
        font-size:42px;
    }
}

</style>
</head>

<body>

<!-- NAVBAR -->

<nav class="ev-nav">

    <a href="{{ route('home') }}" class="ev-logo">
        Evenova
    </a>

    <ul class="ev-nav-links">

        <li>
            <a href="{{ route('login') }}" class="ev-nav-login">
                Login
            </a>
        </li>

        <li>
            <a href="{{ route('register') }}" class="ev-nav-cta">
                Register
            </a>
        </li>

    </ul>

</nav>

<!-- LOGIN -->

<div class="login-wrapper">

    <div class="login-box">

        <!-- LEFT -->

        <div class="login-left">

            <div class="login-card">

                <span class="card-tag">
                    Featured Event
                </span>

                <img src="{{ asset('icon/img1.png') }}">

                <div class="card-title">
                    Meet amazing people around your city.
                </div>

            </div>

        </div>

        <!-- RIGHT -->

        <div class="login-right">

            <h1>Welcome back</h1>

            <p>
                Login to discover events, connect with people,
                and explore communities with Evenova.
            </p>

            <form method="POST" action="{{ url('/login') }}">

                @csrf

                <div class="input-group">
                    <input
                        type="email"
                        name="email"
                        placeholder="Email address"
                        required
                    >
                </div>

                <div class="input-group">
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                    >
                </div>

                <button type="submit" class="login-btn">
                    Login
                </button>

            </form>

            @if ($errors->any())
                <p class="error">
                    {{ $errors->first() }}
                </p>
            @endif

            <div class="bottom-text">
                Don’t have an account?
                <a href="{{ route('register') }}">
                    Register
                </a>
            </div>

        </div>

    </div>

</div>

</body>
</html>