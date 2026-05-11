<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Evenova</title>

<link rel="icon" type="image/png" href="{{ asset('icon/icon.png') }}">

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&family=DM+Serif+Display&display=swap" rel="stylesheet">

<style>

/* =========================================
   RESET
========================================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
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

    overflow-x:hidden;

    color:#1a0000;
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

    padding:24px 70px;

    background:
    rgba(247,239,232,.85);

    backdrop-filter:blur(16px);

    border-bottom:
    1px solid rgba(120,0,0,.05);
}

.ev-logo{
    font-family:'DM Serif Display',serif;

    font-size:34px;

    color:#780000;

    text-decoration:none;
}

.ev-nav-links{
    display:flex;
    align-items:center;

    gap:22px;

    list-style:none;
}

/* LOGIN */

.ev-nav-login{
    position:relative;

    color:#555;

    text-decoration:none;

    font-size:15px;
    font-weight:500;
}

.ev-nav-login::after{
    content:'';

    position:absolute;

    left:0;
    bottom:-6px;

    width:0%;
    height:2px;

    background:#780000;

    transition:.3s;
}

.ev-nav-login:hover::after{
    width:100%;
}

/* REGISTER */

.ev-nav-cta{
    background:#780000;

    color:white;

    padding:13px 28px;

    border-radius:999px;

    text-decoration:none;

    font-size:14px;
    font-weight:600;

    transition:.35s;
}

.ev-nav-cta:hover{
    transform:translateY(-2px);

    background:#5f0000;
}

/* USER */

.ev-user-name{
    position:relative;

    color:#780000;

    font-size:15px;
    font-weight:700;

    text-decoration:none;
}

.ev-user-name::after{
    content:'';

    position:absolute;

    left:0;
    bottom:-6px;

    width:0%;
    height:2px;

    background:#780000;

    transition:.3s;
}

.ev-user-name:hover::after{
    width:100%;
}

/* PROFILE */

.ev-profile-link{
    position:relative;

    color:#555;

    text-decoration:none;

    font-size:15px;
    font-weight:500;
}

.ev-profile-link::after{
    content:'';

    position:absolute;

    left:0;
    bottom:-6px;

    width:0%;
    height:2px;

    background:#780000;

    transition:.3s;
}

.ev-profile-link:hover::after{
    width:100%;
}

/* LOGOUT */

.ev-logout-btn{
    border:none;

    background:#780000;

    color:white;

    padding:12px 22px;

    border-radius:999px;

    font-size:14px;
    font-weight:600;

    cursor:pointer;

    transition:.35s;
}

.ev-logout-btn:hover{
    background:#5f0000;
}

/* =========================================
   HERO
========================================= */

.ev-hero{
    min-height:92vh;

    display:grid;
    grid-template-columns:1fr 1fr;
}

/* LEFT */

.ev-hero-left{
    display:flex;
    flex-direction:column;
    justify-content:center;

    padding:90px 70px;
}

.ev-hero-h1{
    font-family:'DM Serif Display',serif;

    font-size:78px;

    line-height:1.02;

    margin-bottom:24px;
}

.ev-hero-h1 em{
    color:#780000;
}

.ev-hero-sub{
    max-width:560px;

    color:#666;

    font-size:18px;

    line-height:1.8;

    margin-bottom:40px;
}

/* SEARCH */

.ev-search{
    display:flex;

    background:white;

    max-width:560px;

    border-radius:22px;

    overflow:hidden;

    box-shadow:
    0 20px 50px rgba(120,0,0,.08);
}

.ev-search input{
    flex:1;

    border:none;
    outline:none;

    padding:20px 24px;

    font-size:15px;
}

.ev-search button{
    border:none;

    background:#780000;

    color:white;

    padding:0 30px;

    font-weight:600;

    cursor:pointer;
}

/* RIGHT */

.ev-hero-right{
    background:
    linear-gradient(
        135deg,
        #780000,
        #520000
    );

    display:flex;
    align-items:center;
    justify-content:center;
}

.ev-card{
    width:320px;

    background:rgba(255,255,255,.08);

    border:1px solid rgba(255,255,255,.15);

    backdrop-filter:blur(14px);

    border-radius:30px;

    padding:24px;

    color:white;

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

.ev-card img{
    width:100%;
    border-radius:18px;
}

.ev-card-title{
    font-family:'DM Serif Display',serif;

    font-size:30px;

    margin-top:20px;
}

/* =========================================
   EVENTS
========================================= */

.ev-events{
    padding:100px 70px;
}

/* HEAD */

.ev-events-head{
    display:flex;
    justify-content:space-between;
    align-items:center;

    gap:20px;

    margin-bottom:50px;
}

.ev-events-head h2{
    font-family:'DM Serif Display',serif;

    font-size:58px;

    margin-bottom:12px;
}

.ev-events-head p{
    color:#777;
}

/* BUTTON */

.ev-add-event-btn{
    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    text-decoration:none;

    padding:16px 26px;

    border-radius:999px;

    font-size:14px;
    font-weight:600;

    transition:.35s;
}

.ev-add-event-btn:hover{
    transform:translateY(-3px);
}

/* GRID */

.ev-events-grid{
    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(320px,1fr));

    gap:34px;
}

/* CARD */

.ev-event-card{
    background:white;

    border-radius:30px;

    overflow:hidden;

    transition:.35s;

    box-shadow:
    0 20px 50px rgba(120,0,0,.06);
}

.ev-event-card:hover{
    transform:translateY(-10px);

    box-shadow:
    0 30px 70px rgba(120,0,0,.12);
}



.ev-event-card{
    text-decoration:none;

    color:inherit;

    background:white;

    border-radius:30px;

    overflow:hidden;

    transition:.35s;

    display:block;

    box-shadow:
    0 20px 50px rgba(120,0,0,.06);
}

.ev-event-card:hover{
    transform:translateY(-10px);

    box-shadow:
    0 30px 70px rgba(120,0,0,.12);
}
.ev-event-card img{
    width:100%;
    height:240px;

    object-fit:cover;
}

/* CONTENT */

.ev-event-content{
    padding:28px;
}

.ev-event-date{
    display:inline-block;

    background:rgba(120,0,0,.08);

    color:#780000;

    padding:6px 12px;

    border-radius:999px;

    font-size:12px;
    font-weight:600;

    margin-bottom:18px;
}

.ev-event-content h3{
    font-size:28px;

    margin-bottom:14px;
}

.ev-event-content p{
    color:#777;

    margin-bottom:18px;
}

.ev-organizer{
    color:#780000;

    font-weight:600;
}

/* =========================================
   GUEST
========================================= */

.ev-guest-lock{
    padding:120px 20px;

    display:flex;
    justify-content:center;
}

.ev-guest-box{
    width:100%;
    max-width:760px;

    background:white;

    border-radius:34px;

    padding:70px;

    text-align:center;

    box-shadow:
    0 25px 70px rgba(120,0,0,.08);
}

.ev-guest-box h2{
    font-family:'DM Serif Display',serif;

    font-size:56px;

    margin-bottom:18px;
}

.ev-guest-box p{
    color:#777;

    line-height:1.8;

    margin-bottom:34px;
}

.ev-guest-btn{
    display:inline-block;

    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    text-decoration:none;

    padding:18px 34px;

    border-radius:999px;

    font-weight:600;
}

/* =========================================
   FOOTER
========================================= */

.ev-footer{
    background:
    linear-gradient(
        135deg,
        #780000,
        #4d0000
    );

    color:white;

    padding:90px 70px 30px;
}

.ev-footer-top{
    display:flex;
    justify-content:space-between;

    gap:70px;

    margin-bottom:50px;
}

.ev-footer-brand{
    max-width:380px;
}

.ev-footer-brand h2{
    font-family:'DM Serif Display',serif;

    font-size:44px;

    margin-bottom:18px;
}

.ev-footer-brand p{
    color:rgba(255,255,255,.75);

    line-height:1.8;
}

.ev-footer-links{
    display:flex;

    gap:70px;
}

.ev-footer-col{
    display:flex;
    flex-direction:column;

    gap:14px;
}

.ev-footer-col a{
    color:rgba(255,255,255,.75);

    text-decoration:none;
}

.ev-footer-bottom{
    border-top:
    1px solid rgba(255,255,255,.08);

    padding-top:24px;

    text-align:center;
}

/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:980px){

    .ev-hero{
        grid-template-columns:1fr;
    }

    .ev-hero-right{
        display:none;
    }

    .ev-hero-left{
        padding:60px 28px;
    }

    .ev-events{
        padding:80px 24px;
    }

    .ev-footer{
        padding:60px 24px 24px;
    }

    .ev-footer-top{
        flex-direction:column;
    }

    .ev-nav{
        padding:20px 24px;
    }

    .ev-hero-h1{
        font-size:52px;
    }

    .ev-events-head{
        flex-direction:column;
        align-items:flex-start;
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

        @guest

            <li>
                <a href="{{ route('login') }}"
                   class="ev-nav-login">

                    Login

                </a>
            </li>

            <li>
                <a href="{{ route('register') }}"
                   class="ev-nav-cta">

                    Register

                </a>
            </li>

        @endguest


        @auth

            <li>

                <a href="{{ route('profile') }}"
                   class="ev-user-name">

                    {{ auth()->user()->name }}

                </a>

            </li>
            @if(auth()->user()->role === 'organisateur')

                <a href="#notifications"
                class="ev-profile-link">

                    Notifications

                </a>

            @endif
            @if(auth()->user()->role === 'participant')

                <a href="#myEvents"
                class="ev-profile-link">

                    My Events

                </a>

            @endif
            <li>

                <a href="{{ route('profile') }}"
                   class="ev-profile-link">

                    Profile

                </a>

            </li>

            <li>

                <form method="POST"
                      action="{{ url('/logout') }}">

                    @csrf

                    <button type="submit"
                            class="ev-logout-btn">

                        Logout

                    </button>

                </form>

            </li>

        @endauth

    </ul>

</nav>

<!-- HERO -->

<section class="ev-hero">

    <div class="ev-hero-left">

        <h1 class="ev-hero-h1">
            Find your <em>next</em><br>
            great event
        </h1>

        <p class="ev-hero-sub">
            Discover events, connect with inspiring people,
            and grow your community everywhere.
        </p>

        <!-- SEARCH -->

        <form class="ev-search"
              method="GET"
              action="{{ route('home') }}">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search events..."
            >

            <button type="submit">
                Search
            </button>

        </form>

    </div>

    <div class="ev-hero-right">

        <div class="ev-card">

            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1200&auto=format&fit=crop">

            <div class="ev-card-title">
                Join inspiring people around your city
            </div>

        </div>

    </div>

</section>
    @if(auth()->check()
        && auth()->user()->role === 'organisateur')

    <section class="ev-events"
            id="notifications">

        <div class="ev-events-head">

            <div>

                <h2>
                    Notifications
                </h2>

                <p>
                    Join requests
                </p>

            </div>

        </div>

        <div class="ev-events-grid">

            <div class="ev-event-card">

                <div class="ev-event-content">

                    <h3 id="notifName">

                        No requests

                    </h3>

                    <p id="notifEmail">

                        Waiting for participants...
                    </p>

                    <p id="notifEvent">

                    </p>

                    <div style="
                        display:flex;
                        gap:12px;
                        margin-top:20px;
                    ">

                        <button class="ev-add-event-btn"
                             onclick="acceptRequest()">
                            Accept
                        </button>

                        <button class="ev-add-event-btn"
                             onclick="refuseRequest()">
                            Refuse

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    @endif

<!-- EVENTS -->

@auth

<section class="ev-events">

    <div class="ev-events-head">

        <div>

            <h2>
                Upcoming events
            </h2>

            <p>
                Discover amazing events around you.
            </p>

        </div>

        <a href="{{ route('event.create') }}"
           class="ev-add-event-btn">

            + Add Event

        </a>

    </div>

<div class="ev-events-grid">

    @foreach($events as $event)

        <!-- EVENT CARD -->

        <a href="{{ route('event.details', $event->id) }}"
           class="ev-event-card">

            <!-- IMAGE -->

            <img
                src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1200&auto=format&fit=crop"
                alt=""
            >

            <!-- CONTENT -->

            <div class="ev-event-content">

                <!-- DATE -->

                <span class="ev-event-date">

                    {{ $event->date_start }}

                </span>

                <!-- TITLE -->

                <h3>
                    {{ $event->title }}
                </h3>

                <!-- LOCATION -->

                <p>
                    📍 {{ $event->location }}
                </p>

                <!-- ORGANIZER -->

                <div class="ev-organizer">

                    Organizer:
                    {{ $event->organizer?->name }}

                </div>

            </div>

        </a>

    @endforeach

</div>

</section>

@endauth

<!-- GUEST -->

@guest

<section class="ev-guest-lock">

    <div class="ev-guest-box">

        <h2>
            Login to explore events
        </h2>

        <p>
            Create an account and discover premium events,
            communities, and networking opportunities.
        </p>

        <a href="{{ route('login') }}"
           class="ev-guest-btn">

            Login now

        </a>

    </div>

</section>

@endguest
<!-- =========================================
     MY EVENTS
========================================= -->

@if(auth()->check()
    && auth()->user()->role === 'participant')

<section class="ev-events"
         id="myEvents">

    <div class="ev-events-head">

        <div>

            <h2>
                My Events
            </h2>

            <p>
                Events you joined
            </p>

        </div>

    </div>

    <div class="ev-events-grid"
         id="myEventsContainer">

    </div>

</section>

@endif
<!-- FOOTER -->

<footer class="ev-footer">

    <div class="ev-footer-top">

        <div class="ev-footer-brand">

            <h2>
                Evenova
            </h2>

            <p>
                Discover events, meet inspiring people,
                and grow your community everywhere.
            </p>

        </div>

        <div class="ev-footer-links">

            <div class="ev-footer-col">

                <h4>
                    Platform
                </h4>

                <a href="#">
                    Events
                </a>

                <a href="#">
                    Communities
                </a>

                <a href="#">
                    Discover
                </a>

            </div>

            <div class="ev-footer-col">

                <h4>
                    Company
                </h4>

                <a href="#">
                    About
                </a>

                <a href="#">
                    Contact
                </a>

                <a href="#">
                    Careers
                </a>

            </div>

            <div class="ev-footer-col">

                <h4>
                    Social
                </h4>

                <a href="#">
                    Instagram
                </a>

                <a href="#">
                    Twitter
                </a>

                <a href="#">
                    LinkedIn
                </a>

            </div>

        </div>

    </div>

    <div class="ev-footer-bottom">

        <p>
            © 2025 Evenova. All rights reserved.
        </p>

    </div>

</footer>
<script>

/* =========================================
   PAGE LOAD
========================================= */

window.onload = function(){

    /* =====================================
       NOTIFICATIONS
    ===================================== */

    let name =
        localStorage.getItem('notifName');

    let email =
        localStorage.getItem('notifEmail');

    let eventName =
        localStorage.getItem('notifEvent');

    if(document.getElementById('notifName')){

        if(name){

            document
                .getElementById('notifName')
                .innerHTML = name;

            document
                .getElementById('notifEmail')
                .innerHTML = email;

            document
                .getElementById('notifEvent')
                .innerHTML =
                'Wants to join ' + eventName;

        }else{

            document
                .getElementById('notifName')
                .innerHTML =
                'No requests';

            document
                .getElementById('notifEmail')
                .innerHTML =
                'Waiting for participants...';

            document
                .getElementById('notifEvent')
                .innerHTML = '';
        }
    }

    /* =====================================
       MY EVENTS
    ===================================== */

    let myEvents =
        JSON.parse(
            localStorage.getItem('myEvents')
        ) || [];

    let container =
        document.getElementById(
            'myEventsContainer'
        );

    if(container){

        if(myEvents.length > 0){

            myEvents.forEach(event => {

                container.innerHTML += `

                <div class="ev-event-card">

                    <img
                    src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1200&auto=format&fit=crop">

                    <div class="ev-event-content">

                        <span class="ev-event-date">

                            Joined

                        </span>

                        <h3>

                            ${event}

                        </h3>

                        <p>

                            You joined this event successfully.

                        </p>

                    </div>

                </div>

                `;
            });

        }else{

            container.innerHTML = `

            <div class="ev-event-card">

                <div class="ev-event-content">

                    <h3>
                        No events joined
                    </h3>

                    <p>
                        Join events to see them here.
                    </p>

                </div>

            </div>

            `;
        }
    }
}

/* =========================================
   ACCEPT REQUEST
========================================= */

function acceptRequest(){

    let eventName =
        localStorage.getItem('notifEvent');

    /* GET EVENTS */

    let myEvents =
        JSON.parse(
            localStorage.getItem('myEvents')
        ) || [];

    /* PUSH EVENT */

    myEvents.push(eventName);

    /* SAVE */

    localStorage.setItem(
        'myEvents',
        JSON.stringify(myEvents)
    );

    /* REMOVE NOTIFICATION */

    localStorage.removeItem('notifName');

    localStorage.removeItem('notifEmail');

    localStorage.removeItem('notifEvent');

    alert('Request accepted');

    location.reload();
}

/* =========================================
   REFUSE REQUEST
========================================= */

function refuseRequest(){

    localStorage.removeItem('notifName');

    localStorage.removeItem('notifEmail');

    localStorage.removeItem('notifEvent');

    alert('Request refused');

    location.reload();
}

</script>

</body>
</html>