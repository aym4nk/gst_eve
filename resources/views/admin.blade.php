<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard - Evenova</title>

<link rel="icon"
      type="image/png"
      href="{{ asset('icon/icon.png') }}">

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&family=DM+Serif+Display&display=swap"
      rel="stylesheet">

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

    color:#1a0000;

    min-height:100vh;
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

    padding:24px 70px;

    background:
    rgba(247,239,232,.86);

    backdrop-filter:blur(16px);

    border-bottom:
    1px solid rgba(120,0,0,.05);
}

/* LOGO */

.ev-logo{
    font-family:'DM Serif Display',serif;

    font-size:34px;

    color:#780000;

    text-decoration:none;
}

/* LINKS */

.ev-nav-links{
    display:flex;
    align-items:center;

    gap:20px;
}

/* ADMIN */

.ev-admin-name{
    position:relative;

    color:#780000;

    font-size:15px;
    font-weight:700;
}

.ev-admin-name::after{
    content:'';

    position:absolute;

    left:0;
    bottom:-6px;

    width:100%;
    height:2px;

    background:#780000;
}

/* LOGOUT */

.ev-logout-btn{
    border:none;

    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    padding:12px 24px;

    border-radius:999px;

    cursor:pointer;

    font-size:14px;
    font-weight:600;

    transition:.35s;

    box-shadow:
    0 14px 34px rgba(120,0,0,.15);
}

.ev-logout-btn:hover{
    transform:translateY(-3px);
}

/* =========================================
   CONTAINER
========================================= */

.ev-container{
    width:92%;

    margin:60px auto;
}

/* TITLE */

.ev-page-title{
    font-family:'DM Serif Display',serif;

    font-size:70px;

    margin-bottom:12px;
}

.ev-page-sub{
    color:#777;

    margin-bottom:50px;

    line-height:1.8;
}

/* =========================================
   STATS
========================================= */

.ev-stats{
    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(250px,1fr));

    gap:26px;

    margin-bottom:60px;
}

/* CARD */

.ev-stat-card{
    background:white;

    border-radius:28px;

    padding:34px;

    box-shadow:
    0 20px 50px rgba(120,0,0,.06);

    transition:.35s;
}

.ev-stat-card:hover{
    transform:translateY(-6px);
}

/* NUMBER */

.ev-stat-number{
    font-size:52px;

    font-weight:700;

    color:#780000;

    margin-bottom:10px;
}

/* LABEL */

.ev-stat-label{
    color:#777;

    font-size:15px;
}

/* =========================================
   TABLE SECTION
========================================= */

.ev-table-section{
    margin-bottom:60px;
}

/* SECTION TITLE */

.ev-section-title{
    font-family:'DM Serif Display',serif;

    font-size:44px;

    margin-bottom:26px;
}

/* TABLE WRAPPER */

.ev-table-wrapper{
    background:white;

    border-radius:28px;

    overflow:hidden;

    box-shadow:
    0 20px 50px rgba(120,0,0,.06);
}

/* TABLE */

table{
    width:100%;

    border-collapse:collapse;
}

/* HEAD */

th{
    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    padding:20px;

    text-align:left;

    font-size:14px;
    font-weight:600;
}

/* BODY */

td{
    padding:20px;

    border-bottom:
    1px solid rgba(120,0,0,.05);

    font-size:14px;
}

/* ROW */

tr{
    transition:.25s;
}

tr:hover{
    background:#fff7f3;
}

/* ROLE */

.ev-role{
    display:inline-block;

    padding:8px 14px;

    border-radius:999px;

    font-size:12px;
    font-weight:600;
}

/* ADMIN */

.ev-role-admin{
    background:
    rgba(120,0,0,.12);

    color:#780000;
}

/* ORGANIZER */

.ev-role-organizer{
    background:
    rgba(168,85,247,.12);

    color:#7e22ce;
}

/* PARTICIPANT */

.ev-role-participant{
    background:
    rgba(34,197,94,.12);

    color:#15803d;
}

/* =========================================
   DELETE BUTTON
========================================= */

.ev-delete-btn{
    border:none;

    background:
    linear-gradient(
        135deg,
        #780000,
        #5f0000
    );

    color:white;

    padding:10px 18px;

    border-radius:999px;

    cursor:pointer;

    font-size:12px;
    font-weight:600;

    transition:.3s;
}

.ev-delete-btn:hover{
    transform:translateY(-2px);
}

/* DISABLED */

.ev-delete-btn-disabled{
    border:none;

    background:#d4d4d4;

    color:#666;

    padding:10px 18px;

    border-radius:999px;

    font-size:12px;
    font-weight:600;

    cursor:not-allowed;

    opacity:.8;
}

/* EMPTY */

.ev-empty{
    text-align:center;

    color:#888;
}

/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:900px){

    .ev-nav{
        padding:20px 24px;
    }

    .ev-container{
        width:95%;
    }

    .ev-page-title{
        font-size:52px;
    }

    .ev-section-title{
        font-size:34px;
    }

    table{
        min-width:700px;
    }

    .ev-table-wrapper{
        overflow-x:auto;
    }
}

</style>
</head>

<body>

<!-- NAVBAR -->

<nav class="ev-nav">

    <a href="{{ route('home') }}"
       class="ev-logo">

        Evenova

    </a>

    <div class="ev-nav-links">

        <span class="ev-admin-name">

            ADMIN PANEL

        </span>

        <form method="POST"
              action="{{ url('/logout') }}">

            @csrf

            <button class="ev-logout-btn">

                Logout

            </button>

        </form>

    </div>

</nav>

<!-- CONTAINER -->

<div class="ev-container">

    <!-- TITLE -->

    <h1 class="ev-page-title">
        Dashboard
    </h1>

    <p class="ev-page-sub">
        Manage users, events, and platform statistics.
    </p>

    <!-- STATS -->

    <div class="ev-stats">

        <!-- USERS -->

        <div class="ev-stat-card">

            <div class="ev-stat-number">

                {{ $users->count() }}

            </div>

            <div class="ev-stat-label">

                Total users

            </div>

        </div>

        <!-- EVENTS -->

        <div class="ev-stat-card">

            <div class="ev-stat-number">

                {{ $events->count() }}

            </div>

            <div class="ev-stat-label">

                Total events

            </div>

        </div>

    </div>

    <!-- EVENTS TABLE -->

    <div class="ev-table-section">

        <h2 class="ev-section-title">
            Events
        </h2>

        <div class="ev-table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Title</th>

                        <th>Start date</th>

                        <th>End date</th>

                        <th>Location</th>

                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($events as $event)

                        <tr>

                            <td>
                                {{ $event->id }}
                            </td>

                            <td>
                                {{ $event->title }}
                            </td>

                            <td>
                                {{ $event->date_start }}
                            </td>

                            <td>
                                {{ $event->date_end }}
                            </td>

                            <td>
                                {{ $event->location }}
                            </td>

                            <td>

                                @if(auth()->user()->role === 'admin')

                                    <form method="POST"
                                          action="{{ route('event.delete', $event->id) }}">

                                        @csrf
                                        @method('DELETE')

                                        <button class="ev-delete-btn">

                                            Delete

                                        </button>

                                    </form>

                                @else

                                    <button class="ev-delete-btn-disabled">

                                        Delete

                                    </button>

                                @endif

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6"
                                class="ev-empty">

                                No events found

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

    <!-- USERS TABLE -->

    <div class="ev-table-section">

        <h2 class="ev-section-title">
            Users
        </h2>

        <div class="ev-table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Role</th>

                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($users as $user)

                        <tr>

                            <td>
                                {{ $user->id }}
                            </td>

                            <td>
                                {{ $user->name }}
                            </td>

                            <td>
                                {{ $user->email }}
                            </td>

                            <td>

                                @if($user->role === 'admin')

                                    <span class="ev-role ev-role-admin">

                                        Admin

                                    </span>

                                @elseif($user->role === 'organisateur')

                                    <span class="ev-role ev-role-organizer">

                                        Organisateur

                                    </span>

                                @else

                                    <span class="ev-role ev-role-participant">

                                        Participant

                                    </span>

                                @endif

                            </td>

                            <td>

                                @if(auth()->user()->role === 'admin')

                                    @if($user->id != auth()->id())

                                        <form method="POST"
                                              action="{{ route('user.delete', $user->id) }}">

                                            @csrf
                                            @method('DELETE')

                                            <button class="ev-delete-btn">

                                                Delete

                                            </button>

                                        </form>

                                    @else

                                        <button class="ev-delete-btn-disabled">

                                            Owner

                                        </button>

                                    @endif

                                @else

                                    <button class="ev-delete-btn-disabled">

                                        Delete

                                    </button>

                                @endif

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5"
                                class="ev-empty">

                                No users found

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>