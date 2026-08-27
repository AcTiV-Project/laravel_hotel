<!DOCTYPE html>
<html lang="en">
<head>
    @vite([
        'resources/css/app.css',
        'resources/js/reservations.js'
    ])

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL</title>
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <i class="fa-solid fa-hotel"></i>
        </div>

        <nav class="nav">
            <ul class="nav__links">
                <li><a href="{{ route('index') }}">HOME</a></li>
                <li><a href="{{ route('index') }}">ROOMS</a></li>
                <li><a href="{{ route('index') }}">CONTACT</a></li>
            </ul>
        </nav>

        <a class="header__btn" href="{{ route('reserve') }}">RESERVE</a>


        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </header>


    <section class="section">
        <div class="reservations">
            <img src="{{ asset('images/deluxe.png') }}" alt="Deluxe room">

            <div class="reservations__message">
                <span>YOUR STAY, YOUR MOMENT</span>

                <h2>
                    Make yourself<br>
                    at home.
                </h2>

                <p>
                    Relax, unwind and enjoy<br>
                    every moment of your stay.
                </p>
            </div>
        </div>

        <form class="myform" action="" method="POST">
            @csrf

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="entry_date">Entry Date</label>
            <input type="date" id="entry_date" name="entry_date" required>

            <label for="departure_date">Departure Date</label>
            <input type="date" id="departure_date" name="departure_date" required>

            <label for="room_id">Room</label>

            <select id="room_id" name="room_id" required>
                <option value="">Select a room</option>

                @foreach($rooms as $room) 
                    <option value="{{ $room->id }}">
                        Room {{ $room->number }} - {{ $room->type }}
                    </option>
                @endforeach
            </select>

            <label for="people">Number of People</label>
            <input type="number" id="people" name="people" min="1" required>

            <input type="submit" value="RESERVE">

            <p class="msg"></p>
        </form>
    </section>

    <footer class="footer">
        <div class="footer__card">
            <i class="fa-solid fa-bell-concierge"></i>

            <article class="footer__article">
                <h1>Quality service</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>
        </div>

        <div class="footer__card">
            <i class="fa-solid fa-wifi"></i>

            <article class="footer__article">
                <h1>Wifi in the rooms</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>
        </div>

        <div class="footer__card">
            <i class="fa-solid fa-map-location"></i>

            <article class="footer__article">
                <h1>Location premiun</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>
        </div>

        <div class="footer__card">
            <i class="fa-solid fa-dumbbell"></i>

            <article class="footer__article">
                <h1>Acces a the gym</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>
        </div>
    </footer>
</body>
</html>