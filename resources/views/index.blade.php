<!DOCTYPE html>
<html lang="en">
<head>
    @vite([
        'resources/css/app.css',
        'resources/js/hamburger.js'
    ])

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <i class="fa-solid fa-hotel"></i>
        </div>

        <nav class="nav">
            <ul class="nav__links">
                <li><a href="{{ route('index') }}">HOME</a></li>
                <li><a href="#rooms">ROOMS</a></li>
                <li><a href="#footer">CONTACT</a></li>
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
        <div class="frontpage">
            <img src="{{ asset('images/frontpage.png') }}" alt="Imagen de portada">

            <div class="frontpage__text">
                <h1 class="title1">
                    Descansa. Relájate. Disfruta tu estadía
                </h1>

                <h1 class="title2">
                    con nosotros
                </h1>

                <p>
                    Reserva fácil, rápida y segura en los mejores hoteles
                </p>
            </div>
        </div>


        <div id="rooms" class="rooms content">
            <h1>Our rooms</h1>

            <div class="cards">
                <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('images/deluxe.png') }}" alt="imagen">
                    </div>

                    <h1 class="card__title">Deluxe room</h1>

                    <ul class="card__icons">
                        <li>
                            <i class="fa-solid fa-user-group"></i>
                            2 people
                        </li>

                        <li>
                            <i class="fa-solid fa-bed"></i>
                            1 king bed
                        </li>

                        <li>
                            <i class="fa-solid fa-wifi"></i>
                            WiFi
                        </li>

                        <li>
                            <i class="fa-solid fa-snowflake"></i>
                            Air conditioning
                        </li>

                        <li>
                            <i class="fa-solid fa-tv"></i>
                            TV
                        </li>
                    </ul>

                    <div class="card__price">
                        <h3>125$ / Noche</h3>

                        <button class="card__btn">Reserve</button>
                    </div>
                </div>

                 <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('images/deluxe.png') }}" alt="imagen">
                    </div>

                    <h1 class="card__title">Superior room</h1>

                    <ul class="card__icons">
                        <li>
                            <i class="fa-solid fa-user-group"></i>
                            1 people
                        </li>

                        <li>
                            <i class="fa-solid fa-bed"></i>
                            1 king bed
                        </li>

                        <li>
                            <i class="fa-solid fa-wifi"></i>
                            WiFi
                        </li>

                        <li>
                            <i class="fa-solid fa-snowflake"></i>
                            Air conditioning
                        </li>

                        <li>
                            <i class="fa-solid fa-tv"></i>
                            TV
                        </li>
                    </ul>

                    <div class="card__price">
                        <h3>70$ / Noche</h3>

                        <button class="card__btn">Reserve</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('images/deluxe.png') }}" alt="imagen">
                    </div>

                    <h1 class="card__title">Familiar Room</h1>

                    <ul class="card__icons">
                        <li>
                            <i class="fa-solid fa-user-group"></i>
                            5 people
                        </li>

                        <li>
                            <i class="fa-solid fa-bed"></i>
                            2 Queen bed
                        </li>

                        <li>
                            <i class="fa-solid fa-wifi"></i>
                            WiFi
                        </li>

                        <li>
                            <i class="fa-solid fa-snowflake"></i>
                            Air conditioning
                        </li>

                        <li>
                            <i class="fa-solid fa-tv"></i>
                            TV
                        </li>
                    </ul>

                    <div class="card__price">
                        <h3>200$ / Noche</h3>

                        <button class="card__btn">Reserve</button>
                    </div>
                </div>
            </div>
        </div>
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

        <div id="footer" class="footer__card">
            <i class="fa-solid fa-dumbbell"></i>

            <article class="footer__article">
                <h1>Acces a the gym</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>
        </div>
    </footer>
</body>
</html>