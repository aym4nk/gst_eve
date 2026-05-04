@extends('layouts.app')

@section('title', 'Home - Evenova')

@section('styles')
<style>

/* HERO */
.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 60px 80px;
}

.hero-text {
    width: 50%;
}

.hero-text h1 {
    font-size: 32px;
    color: #780000;
    font-family: 'Porladek', sans-serif;
}

.hero-text p {
    margin: 15px 0;
    color: #333;
}

.search-box {
    margin-top: 20px;
}

.search-box input {
    padding: 10px;
    width: 250px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.search-box button {
    padding: 10px 15px;
    background: #780000;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

.hero-img {
    width: 40%;
}

.hero-img img {
    width: 100%;
}

/* EVENTS SECTION */
.events {
    padding: 40px 80px;
}

.events h2 {
    color: #780000;
    margin-bottom: 20px;
}

.event-list {
    display: flex;
    gap: 20px;
}

/* CARD */
.card {
    background: #ffe5d9;
    padding: 20px;
    border-radius: 10px;
    width: 250px;
    box-shadow: 0 10px 20px rgba(70,18,32,0.2);
}

.card h3 {
    color: #780000;
}

.card p {
    font-size: 14px;
}

.card button {
    margin-top: 10px;
    background: #780000;
    color: white;
    border: none;
    padding: 8px;
    border-radius: 6px;
    cursor: pointer;
}

</style>
@endsection

@section('content')

<!-- HERO -->
<div class="hero">

    <div class="hero-text">
        <h1>Find your next event 🔥</h1>

        <p>
            Discover events, connect with people, and grow your network with Evenova.
        </p>

        <div class="search-box">
            <input type="text" placeholder="Search events...">
            <button>Search</button>
        </div>
    </div>

    <div class="hero-img">
        <img src="{{ asset('icon/img2.png') }}">
    </div>

</div>

<!-- EVENTS -->
<div class="events">

    <h2>Upcoming Events 🎯</h2>

    <div class="event-list">

        <div class="card">
            <h3>Tech Meetup</h3>
            <p>Join developers in your city</p>
            <button>Join</button>
        </div>

        <div class="card">
            <h3>Startup Pitch</h3>
            <p>Pitch your idea to investors</p>
            <button>Join</button>
        </div>

        <div class="card">
            <h3>Design Workshop</h3>
            <p>Learn UI/UX basics</p>
            <button>Join</button>
        </div>

    </div>

</div>

@endsection




