<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>{{ $event->title }}</title>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&family=DM+Serif+Display&display=swap"
      rel="stylesheet">

<style>

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
        #f7efe8,
        #f8f4f0
    );

    color:#1a0000;
}

/* HERO */

.ev-hero{
    height:520px;

    overflow:hidden;
}

.ev-hero img{
    width:100%;
    height:100%;

    object-fit:cover;
}

/* CONTENT */

.ev-content{
    width:88%;

    max-width:1100px;

    margin:auto;

    margin-top:-80px;

    background:white;

    border-radius:34px;

    padding:60px;

    position:relative;

    box-shadow:
    0 25px 70px rgba(120,0,0,.08);
}

/* DATE */

.ev-date{
    display:inline-block;

    background:
    rgba(120,0,0,.08);

    color:#780000;

    padding:8px 16px;

    border-radius:999px;

    font-size:13px;
    font-weight:600;

    margin-bottom:24px;
}

/* TITLE */

.ev-title{
    font-family:'DM Serif Display',serif;

    font-size:68px;

    line-height:1.1;

    margin-bottom:24px;
}

/* INFO */

.ev-info{
    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(220px,1fr));

    gap:20px;

    margin-top:40px;
}

/* BOX */

.ev-box{
    background:#faf7f5;

    padding:24px;

    border-radius:22px;

    transition:.3s;
}

.ev-box:hover{
    transform:translateY(-4px);
}

/* LABEL */

.ev-label{
    color:#888;

    font-size:13px;

    margin-bottom:10px;
}

/* VALUE */

.ev-value{
    color:#780000;

    font-size:18px;
    font-weight:700;
}

/* BACK */

.ev-back{
    display:inline-block;

    margin-top:50px;

    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    text-decoration:none;

    padding:16px 28px;

    border-radius:999px;

    font-weight:600;

    transition:.3s;
}

.ev-back:hover{
    transform:translateY(-3px);
}

@media(max-width:900px){

    .ev-content{
        width:94%;

        padding:40px 24px;
    }

    .ev-title{
        font-size:46px;
    }
}

/* JOIN BUTTON */

.ev-join-btn{
    border:none;

    margin-top:40px;

    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    padding:18px 34px;

    border-radius:999px;

    font-size:15px;
    font-weight:600;

    cursor:pointer;

    transition:.35s;

    box-shadow:
    0 18px 40px rgba(120,0,0,.14);
}

.ev-join-btn:hover{
    transform:translateY(-3px);

    box-shadow:
    0 24px 60px rgba(120,0,0,.2);
}
/* =========================================
   JOIN OVERLAY
========================================= */

.ev-join-overlay{
    position:fixed;

    inset:0;

    background:
    rgba(0,0,0,.35);

    backdrop-filter:blur(8px);

    display:flex;
    justify-content:center;
    align-items:center;

    opacity:0;
    visibility:hidden;

    transition:.35s;

    z-index:9999;
}

/* ACTIVE */

.ev-join-overlay.active{
    opacity:1;
    visibility:visible;
}

/* CARD */

.ev-join-card{
    width:92%;
    max-width:520px;

    background:white;

    border-radius:34px;

    padding:40px;

    transform:translateY(20px);

    transition:.35s;

    box-shadow:
    0 25px 70px rgba(0,0,0,.16);
}

/* ACTIVE */

.ev-join-overlay.active .ev-join-card{
    transform:translateY(0);
}

/* TITLE */

.ev-join-card h2{
    font-family:'DM Serif Display',serif;

    font-size:42px;

    margin-bottom:14px;
}

.ev-join-card p{
    color:#777;

    line-height:1.8;

    margin-bottom:30px;
}

/* INFO */

.ev-user-info{
    display:flex;
    flex-direction:column;

    gap:16px;

    margin-bottom:34px;
}

/* BOX */

.ev-user-box{
    background:#faf7f5;

    border-radius:20px;

    padding:18px 22px;
}

.ev-user-box span{
    display:block;

    color:#888;

    font-size:13px;

    margin-bottom:8px;
}

.ev-user-box strong{
    color:#780000;

    font-size:15px;
}

/* ACTIONS */

.ev-join-actions{
    display:flex;

    gap:16px;
}

/* CONFIRM */

.ev-confirm-btn{
    flex:1;

    border:none;

    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    padding:16px;

    border-radius:999px;

    cursor:pointer;

    font-size:14px;
    font-weight:600;

    transition:.3s;
}

.ev-confirm-btn:hover{
    transform:translateY(-2px);
}

/* CANCEL */

.ev-cancel-btn{
    flex:1;

    border:none;

    background:#e7e7e7;

    color:#444;

    padding:16px;

    border-radius:999px;

    cursor:pointer;

    font-size:14px;
    font-weight:600;

    transition:.3s;
}


/* INPUT */

.ev-input{
    width:100%;

    border:none;

    background:white;

    padding:14px 16px;

    border-radius:14px;

    outline:none;

    font-size:14px;

    margin-top:10px;

    border:
    1px solid rgba(120,0,0,.08);
}

.ev-input:focus{
    border-color:#780000;
}
.ev-cancel-btn:hover{
    background:#d8d8d8;
}
</style>
</head>

<body>

<!-- HERO -->

<div class="ev-hero">

    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1200&auto=format&fit=crop">

</div>

<!-- CONTENT -->

<div class="ev-content">

    <span class="ev-date">

        {{ $event->date_start }}

    </span>

    <h1 class="ev-title">

        {{ $event->title }}

    </h1>

    <!-- INFO -->

    <div class="ev-info">

        <!-- LOCATION -->

        <div class="ev-box">

            <div class="ev-label">
                Location
            </div>

            <div class="ev-value">
                {{ $event->location }}
            </div>

        </div>

        <!-- ORGANIZER -->

        <div class="ev-box">

            <div class="ev-label">
                Organizer
            </div>

            <div class="ev-value">
                {{ $event->organizer?->name }}
            </div>

        </div>

        <!-- END DATE -->

        <div class="ev-box">

            <div class="ev-label">
                End date
            </div>

            <div class="ev-value">
                {{ $event->date_end }}
            </div>

        </div>

        <!-- PARTICIPANTS -->

        <div class="ev-box">

            <div class="ev-label">
                Participants
            </div>

            <div class="ev-value">
                250+
            </div>

        </div>

    </div>
    <!-- JOIN BUTTON -->
<!-- JOIN BUTTON -->

    @auth

        @if(auth()->id() != $event->organizer_id)

            <button class="ev-join-btn"
                    onclick="openJoinCard()">

                Join Event

            </button>

        @endif

    @endauth

    <!-- JOIN MODAL -->

<div class="ev-join-overlay"
     id="joinOverlay">

    <div class="ev-join-card">

        <!-- TITLE -->

        <h2>
            Confirm participation
        </h2>

        <p>
            Verify your information before
            joining this event.
        </p>

        <!-- USER INFO -->

        <div class="ev-user-info">

            <div class="ev-user-box">

                <span>
                    Name
                </span>

                <strong>
                    <input type="text"
                    value="{{ auth()->user()->name }}"
                    class="ev-input">
                </strong>

            </div>

            <div class="ev-user-box">

                <span>
                    Email
                </span>

                <strong>
                    <input type="email"
                    value="{{ auth()->user()->email }}"
                    class="ev-input">
                </strong>

            </div>

            <div class="ev-user-box">

                <span>
                    Event
                </span>

                <strong>
                    {{ $event->title }}
                </strong>

            </div>

        </div>

        <!-- BUTTONS -->

        <div class="ev-join-actions">

            <!-- CONFIRM -->

        <button class="ev-confirm-btn"

        onclick="sendNotification(
        '{{ auth()->user()->name }}',
        '{{ auth()->user()->email }}',
        '{{ $event->title }}'
        )">

            Demander

        </button>

            <!-- CANCEL -->

            <button class="ev-cancel-btn"
                    onclick="closeJoinCard()">

                Annuler

            </button>

        </div>

    </div>

</div>
    <!-- BACK -->

    <a href="{{ route('home') }}"
       class="ev-back">

        Back Home

    </a>

</div>
<script>

/* =========================================
   OPEN MODAL
========================================= */

function openJoinCard(){

    document
        .getElementById('joinOverlay')
        .classList
        .add('active');
}

/* =========================================
   CLOSE MODAL
========================================= */

function closeJoinCard(){

    document
        .getElementById('joinOverlay')
        .classList
        .remove('active');
}

/* =========================================
   SEND REQUEST
========================================= */

function sendNotification(name,email,eventName){

    // INPUT VALUES

    let updatedName =
        document.querySelectorAll('.ev-input')[0].value;

    let updatedEmail =
        document.querySelectorAll('.ev-input')[1].value;

    /* SAVE NOTIFICATION */

    localStorage.setItem(
        'notifName',
        updatedName
    );

    localStorage.setItem(
        'notifEmail',
        updatedEmail
    );

    localStorage.setItem(
        'notifEvent',
        eventName
    );

    alert('Request sent successfully');

    closeJoinCard();
}

</script>
</body>
</html>