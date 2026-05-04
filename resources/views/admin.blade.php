<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.cdnfonts.com/css/porladek" rel="stylesheet">

<title>Admin - Evenova</title>

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

.btn-logout {
    background-color: #780000;
    color: white;
    padding: 6px 14px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
}

/* CONTAINER */
.container {
    width: 90%;
    margin: 40px auto;
}

/* TITLES */
h2 {
    color: #780000;
    font-family: 'Porladek', sans-serif;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background: #ffe5d9;
    border-radius: 10px;
    overflow: hidden;
}

th {
    background-color: #780000;
    color: white;
    padding: 12px;
}

td {
    padding: 10px;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #f9d8c7;
}

tr:hover {
    background-color: #f1c1aa;
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <h1 class="logo-text">Evenova</h1>

    <div class="nav-links">
        <span class="user-name">{{ auth()->user()->name }}</span>

        <form method="POST" action="{{ url('/logout') }}">
            @csrf
            <button class="btn-logout">Logout</button>
        </form>
    </div>
</nav>

<div class="container">

    <!-- 🔹 TABLEAU EVENEMENTS -->
    <h2>Liste des événements</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Lieu</th>
            </tr>
        </thead>
        <tbody>
             @isset($events)
               @foreach($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->location }}</td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>

    <!-- 🔹 TABLEAU UTILISATEURS -->
    <h2>Liste des utilisateurs</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
            </tr>
        </thead>
        <tbody>
             @isset($users)
              @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
            @endisset 
        </tbody>
    </table>

</div>

</body>
</html>