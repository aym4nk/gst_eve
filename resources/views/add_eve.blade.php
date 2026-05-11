<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Add Event - Evenova</title>

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

body{
    font-family:'DM Sans',sans-serif;

    background:
    linear-gradient(
        to bottom,
        #f7efe8,
        #f8f4f0
    );

    min-height:100vh;
}

/* =========================================
   NAVBAR
========================================= */

.ev-nav{
    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:24px 70px;

    background:
    rgba(247,239,232,.82);

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

/* =========================================
   PAGE
========================================= */

.ev-add-wrapper{
    display:flex;
    justify-content:center;
    align-items:center;

    padding:70px 20px;
}

/* CARD */

.ev-add-card{
    width:100%;
    max-width:760px;

    background:white;

    border-radius:34px;

    padding:60px;

    box-shadow:
    0 25px 70px rgba(120,0,0,.08);

    animation:fadeUp 1s ease;
}

@keyframes fadeUp{

    from{
        opacity:0;
        transform:translateY(30px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* TITLE */

.ev-add-title{
    font-family:'DM Serif Display',serif;

    font-size:58px;

    margin-bottom:14px;
}

.ev-add-sub{
    color:#777;

    line-height:1.8;

    margin-bottom:40px;
}

/* INPUT */

.ev-input-group{
    margin-bottom:24px;
}

.ev-input-group label{
    display:block;

    margin-bottom:10px;

    font-size:14px;
    font-weight:600;

    color:#444;
}

.ev-input-group input{
    width:100%;

    padding:18px 20px;

    border-radius:18px;

    border:1px solid rgba(120,0,0,.08);

    background:#faf7f5;

    outline:none;

    font-size:14px;

    transition:.3s;
}

.ev-input-group input:focus{
    border-color:#780000;

    background:white;

    box-shadow:
    0 0 0 4px rgba(120,0,0,.05);
}

/* BUTTON */

.ev-submit-btn{
    width:100%;

    border:none;

    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    padding:18px;

    border-radius:18px;

    font-size:15px;
    font-weight:600;

    cursor:pointer;

    transition:.35s;

    box-shadow:
    0 18px 40px rgba(120,0,0,.14);
}

.ev-submit-btn:hover{
    transform:translateY(-3px);

    box-shadow:
    0 24px 60px rgba(120,0,0,.22);
}

/* RESPONSIVE */

@media(max-width:768px){

    .ev-nav{
        padding:20px 24px;
    }

    .ev-add-card{
        padding:40px 24px;
    }

    .ev-add-title{
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

</nav>

<!-- PAGE -->

<div class="ev-add-wrapper">

    <div class="ev-add-card">

        <h1 class="ev-add-title">
            Add event
        </h1>

        <p class="ev-add-sub">
            Create your own event and share it with the community.
        </p>

        <form method="POST"
              action="{{ route('event.store') }}">

            @csrf

            <!-- TITLE -->

            <div class="ev-input-group">

                <label>
                    Event title
                </label>

                <input
                    type="text"
                    name="title"
                    placeholder="Tech Meetup"
                    required
                >

            </div>

            <!-- DATE START -->

            <div class="ev-input-group">

                <label>
                    Start date
                </label>

                <input
                    type="date"
                    name="date_start"
                    required
                >

            </div>

            <!-- DATE END -->

            <div class="ev-input-group">

                <label>
                    End date
                </label>

                <input
                    type="date"
                    name="date_end"
                    required
                >

            </div>

            <!-- LOCATION -->

            <div class="ev-input-group">

                <label>
                    Location
                </label>

                <input
                    type="text"
                    name="location"
                    placeholder="Casablanca"
                    required
                >

            </div>

            <button type="submit"
                    class="ev-submit-btn">

                Create Event

            </button>

        </form>

    </div>

</div>

</body>
</html>