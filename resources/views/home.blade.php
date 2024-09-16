<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>

    <!-- (CSS) -->
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            scroll-padding-top: 1rem;
            scroll-behavior: smooth;
            list-style: none;
            box-sizing: border-box;
            text-decoration: none;
        }



        :root {
            --main-color: #d90429;
            --text-color: #020102;
            --bg-color: #fff;
        }

        html::-webkit-scrollbar {
            width: 0.5rem;
            background: transparent;
        }

        html::-webkit-scrollbar-thumb {
            border-radius: 5rem;
            background: var(--text-color);
        }

        section {
            padding: 4rem 0 2rem;

        }

        img {
            width: 100%;
        }

        body {
            color: var(--text-color);
        }

        .container {
            max-width: 1068px;
            margin-left: auto;
            margin-right: auto;
        }

        header {
            display: block;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }

        header.shadow {
            background-color: var(--bg-color);
            box-shadow: 4px 4px 4px rgb(15 54 55 / 10%);
            transition: 0.5s ease;
        }

        header.shadow #search-icon {
            color: var(--text-color);
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 35px;
        }

        #menu-icon {
            font-size: 24px;
            cursor: pointer;
            color: var(--text-color);
            display: none;
        }

        .logo {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-color);
        }


        .logo span {
            color: var(--main-color);
        }

        .navbar {
            display: flex;
            column-gap: 2rem;
        }

        .navbar a {
            color: var(--text-color);
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: 500;

        }

        .navbar a:hover,
        .navbar .active {
            color: var(--main-color);
            border-bottom: 3px solid var(--main-color);
        }

        #search-icon {
            font-size: 24px;
            cursor: pointer;
            color: var(--bg-color);
        }

        .search-box {
            position: absolute;
            top: 110%;
            right: 0;
            left: 0;
            background: var(--bg-color);
            box-shadow: 4px 4px 20px rgb(15 54 55 / 10%);
            border: 1px solid var(--main-color);
            border-radius: 0.5rem;
            clip-path: circle(0% at 100% 0%);
        }

        .search-box.active {
            clip-path: circle(144% at 100% 0%);
            transition: 0.4s;
        }

        .search-box input {
            width: 100%;
            padding: 20px;
            border: none;
            outline: none;
            background: transparent;
            font-size: 1rem;

        }

        .home {
            max-width: 1300px;
            margin: auto;
            width: 100%;
            min-height: 640px;
            display: flex;
            align-items: center;
            /En esta parte va la imagen home al lado del "Nostros tenemos todo lo que tu auto necesita, "Back-Image"/
            background-image: url('{{ asset('sa') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center left;
        }

        .home-text {
            padding-left: 130px;
        }

        .home-text h1 {
            font-size: 2.4rem;
        }


        .home-text span {
            color: var(--main-color);
        }

        .home-text p {
            font-size: 0.938rem;
            font-weight: 300;
            margin: 0.5rem 0 1.2rem;
        }

        .btn {
            padding: 10px 22px;
            background: var(--main-color);
            color: var(--bg-color);
            font-weight: 400;
        }

        .btn:hover {
            background: #fd052f;

        }

        .heading {
            text-align: center;
        }

        .heading span {
            font-weight: 500;
            color: var(--main-color);
        }

        .heading p {
            font-size: 0.938rem;
            font-weight: 300;
        }


        .cars-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;

        }

        .cars-container .box {
            flex: 1 1 17rem;
            position: relative;
            height: 200px;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .cars-container .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            overflow: hidden;
        }

        .cars-container .box img:hover {
            transform: scale(1.1);
            transition: 0.5s;

        }

        .cars-container .box h2 {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            font-weight: 400;
            font-size: 1rem;
            background-color: var(--bg-color);
            padding: 8px;
            border-radius: 0.5rem;

        }

        .cars-container .box:hover h2 {
            background: var(--main-color);
            color: var(--bg-color);
        }


        .about {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 1.5rem;

        }

        .about-img {
            flex: 1 1 21rem;
        }

        .about-text {
            flex: 1 1 21rem;
        }


        .about-text span {
            font-weight: 500;
            color: var(--main-color);
        }

        .about-text h2 {
            font-size: 1.7rem;
        }

        .about-text p {
            font-size: 0.938rem;
            margin: 0.5rem 0 1.4rem;
        }


        .parts-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
        }

        .parts-container .box {
            flex: 1 1 17rem;
            position: relative;
            padding: 20px;
            display: flex;
            flex-direction: column;
            background: #f6f6f6;
            border-radius: 0.5rem;

        }

        .parts-container .box img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            object-position: center;
            margin-bottom: 1rem;
        }

        .parts-container .box h2 {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .parts-container .box span {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--main-color);
        }

        .parts-container .box .bx {
            color: var(--main-color);
            margin: 0.8rem 0;
        }

        .parts-container .box .btn {
            max-width: 120px;
        }


        .parts-container .box .details {
            display: flex;
            align-items: center;
            position: absolute;
            bottom: 1.8rem;
            right: 1rem;
            font-size: 1rem;
            color: var(--text-color);
        }

        .parts-container .box .details:hover {
            color: var(--main-color);
            text-decoration: underline;
        }


        .blog-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
        }

        .blog-container .box {
            flex: 1 1 13rem;
            padding: 20px;
        }

        .blog-container .box:hover {
            background: #f6f6f6;
        }

        .blog-container .box span {
            font-size: 0.8rem;
            color: var(--main-color);
        }

        .blog-container h3 {
            font-size: 1.2rem;

        }

        .blog-container.box p {
            font-size: 0.938rems;
            margin: 4px 0;
        }

        .blog-container .box .blog-btn {
            display: flex;
            align-items: center;
            column-gap: 4px;
            color: var(--text-color);

        }

        .blog-container .box .blog-btn .bx {
            font-size: 20px;
        }

        .blog-container .box .blog-btn:hover {
            color: var(--main-color);
            column-gap: 0.7rem;
            transition: 0.4s;

        }

        .footer {
            background: var(--text-color);
            color: #f6f6f6;
            border-top: 2px solid var(--main-color);
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
        }

        .footer-container .logo {
            color: var(--bg-color);
            margin-bottom: 1rem;

        }

        .footer-container .footer-box {
            display: flex;
            flex-direction: column;
        }


        .social {
            display: flex;
            align-items: center;
        }

        .social a {
            font-size: 24px;
            color: var(--bg-color);
            margin-right: 1rem;
        }


        .social a:hover {
            color: var(--main-color);
        }


        .footer-box h3 {
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 1rem;

        }


        .footer-box p:hover {
            color: var(--main-color);
        }


        .footer-box a,
        .footer-box p {
            color: #818181;
            margin-bottom: 10px;

        }


        .footer-box a:hover {
            color: var(--main-color);
        }


        .copyright {
            padding: 20px;
            text-align: center;
            color: var(--bg-color);
            background: var(--text-color);
        }

        .copyright p:hover {
            color: var(--main-color);
        }


        /* Making Responsive */
        @media (max-width: 1080px) {
            .container {
                margin-left: 1rem;
                margin-right: 1rem;
            }
        }

        @media (max-width: 991px) {
            .nav {
                padding: 15px 20px;
            }

            section {
                padding: 3rem 0 1rem;
            }

            .home-text {
                padding-left: 2rem;
            }

            .home-text h1 {
                font-size: 2.1rem;
            }
        }

        @media (max-width: 920px) {
            #search-icon {
                color: var(--text-color);
            }
        }

        @media (max-width: 768px) {
            .search-box input {
                padding: 15px;
            }

            .nav {
                padding: 10px 0;
            }

            #menu-icon {
                display: initial;
            }

            .navbar {
                position: absolute;
                top: 100%;
                right: 0;
                left: 0;
                display: flex;
                flex-direction: column;
                background: var(--bg-color);
                row-gap: 0.5rem;
                text-align: center;
                box-shadow: 4px 4px 20px rgb(15 54 55 / 20%);
                clip-path: circle(0% at 0% 0%);
                transition: 0.6s;
            }

            .navbar a {
                display: block;
                padding: 15px;
            }

            .navbar a:hover,
            .navbar .active {
                border-bottom: none;
                background: var(--main-color);
                color: var(--bg-color);
            }

            .navbar.active {
                clip-path: circle(144% at 0% 0%);
            }

            .blog-container .box {
                padding: 4px;
            }
        }

        @media (max-width: 727px) {
            .heading span {
                font-size: 0.9rem;
            }

            .heading h2 {
                font-size: 1.4rem;
            }

            .about {
                flex-direction: column-reverse;
            }

            .about-text {
                text-align: center;
            }

            .about-text h2 {
                font-size: 1.4rem;
            }
        }

        @media (max-width: 607px) {
            .footer-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 360px) {
            .search-box input {
                padding: 11px;
            }

            .home {
                min-height: 500px;
            }

            .home-text h1 {
                font-size: 2rem;
            }

            .home-text p br {
                display: contents;
            }
        }
    </style>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!--Navbar-->

    @if (session('alert_message'))
    <script>
        // se muetra el mensaje si existe
        var message = @json(session('alert_message'));
        alert(message);
    </script>
@endif
    <header>
        <!--Nav Container-->
        <div class="nav container">
            <i class='bx bx-menu' id="menu-icon"></i>
            <!--Logo-->
            <a href="#" class="logo">Autos<span>Venta</span></a>
            <!--Navbar Lista-->
            <ul class="navbar">
                <li> <a href="#home" class="active">Home</a></li>
                <li> <a href="{{route('viewvehicles')}}">Carros disponibles</a></li>
                <li> <a href="{{route('createCustomer')}}">Crear usuario</a></li>
                <li> <a href="{{route('sale')}}">Vender carro</a></li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
            <!--search Icon-->
            <i class='bx bx-search' id="search-icon"></i>
            <!--search Box-->
            <div class="search-box container">
                <input type="search" name="" id="" placeholder="Search here...">
            </div>
        </div>
    </header>
    <!--Home section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Nosotros tenemos todo <br> tu <span>auto</span> Necesita</h1>
            <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Laudantium id beatae culpa voluptate.</p>
            <!--home Button-->
            <a href="#" class="btn">Descubre ahora</a>
        </div>

    </section>
    <!--cars section-->
    <section class="cars" id="cars">
        <div class="heading">
            <span>Autos</span>
            <h2>Tenemos todo tipo de Autos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Laudantium id beatae culpa voluptate.</p>
        </div>
        <!--Contenedor de los carros-->
        <div class="cars-container container">
            <!--caja 1-->
            <div class="box">
                <img src="jj" alt="">
                <h2> Nissan</h2>
            </div>
            <!--Box 2-->
            <div class="box">
                <img src="/img/car2.jpg" alt="">
                <h2>Nissan</h2>
            </div>

            <!--Box 7-->
            <div class="box">
                <img src="/img/car5.jpg" alt="">
                <h2>Nissan</h2>
            </div>

            <!--Box 3-->
            <div class="box">
                <img src="/img/car3.jpg" alt="">
                <h2>Nissan</h2>
            </div>

            <!--Box 4-->
            <div class="box">
                <img src="/img/car4.jpg" alt="">
                <h2>Nissan</h2>
            </div>

            <!--Box 5-->
            <div class="box">
                <img src="/img/car7.jpeg" alt="">
                <h2>Nissan</h2>
            </div>

            <!--Box 6-->
            <div class="box">
                <img src="/img/car6.jpg" alt="">
                <h2>Nissan</h2>
            </div>

            <!--Box 7-->
            <div class="box">
                <img src="/img/car5.jpg" alt="">
                <h2>Nissan</h2>
            </div>


            <div class="box">
                <img src="/img/car8.jpg" alt="">
                <h2>Nissan</h2>
            </div>
        </div>

    </section>

    <section>
        <section class="about container" id="about">
            <div class="about-img">
                <img src="/img/about.png" alt="">
            </div>
            <div class="about-text">
                <span>Sobre Nosotros</span>
                <h2>Precios baratos con <br> Carros de Calidad</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam
                    voluptate, dolores sit dolorem quisquam maiores.</p>

                <a href="#" class="btn">Mas informacion </a>
            </div>
        </section>
    </section>
    <!--Sesion de repuestos -->
    <section class="parts" id="parts">
        <div class="heading">
            <span>Lo que ofrecemos</span>
            <h2>Nuestros autos siempre son excelentes</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam voluptate,
                dolores sit dolorem quisquam maiores.</p>
        </div>

        <div class="parts-container container">
            <!--Box 1-->

            <div class="box">
                <img src="/img/part1.png" alt="">
                <h3>Repuestos</h3>
                <span>$139.999</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Buy Now</a>
                <a href="#" class="details">Ver Detalles</a>
            </div>

            <!--Box 2-->

            <div class="box">
                <img src="/img/part2.png" alt="">
                <h3>Repuestos</h3>
                <span>$499.999</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Buy Now</a>
                <a href="#" class="details">Ver Detalles</a>
            </div>

            <!--Box 3-->

            <div class="box">
                <img src="/img/part3.png" alt="">
                <h3>Repuestos</h3>
                <span>$249.999</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Buy Now</a>
                <a href="#" class="details">Ver Detalles</a>
            </div>

            <!--Box 4-->

            <div class="box">
                <img src="/img/part4.png" alt="">
                <h3>Repuestos</h3>
                <span>$999.999</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Buy Now</a>
                <a href="#" class="details">Ver Detalles</a>
            </div>

            <!--Box 5-->

            <div class="box">
                <img src="/img/part5.png" alt="">
                <h3>Repuestos</h3>
                <span>$170.999</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Buy Now</a>
                <a href="#" class="details">Ver Detalles</a>
            </div>

            <!--Box 6-->

            <div class="box">
                <img src="/img/part6.png" alt="">
                <h3>Repuestos</h3>
                <span>$130.99</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Buy Now</a>
                <a href="#" class="details">Ver Detalles</a>
            </div>
        </div>
    </section>
    <!--Blog Container-->
    <section class="blog" id="blog">
        <div class="heading">
            <span>Blog & Noticias</span>
            <h2>Contenido</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam voluptate,
                dolores sit dolorem quisquam maiores.</p>
        </div>
        <!--Blog Container-->
        <div class="blog-container container">
            <!--Box 1-->
            <div class="box">
                <img src="/img/car1.jpg" alt="">
                <span>Agosto 21 2024</span>
                <h3>Cómo conseguir el coche perfecto a bajo precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam
                    voluptate, dolores sit dolorem quisquam maiores.</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i> </a>
            </div>

            <!--Box 2-->
            <div class="box">
                <img src="/img/car8.jpg" alt="">
                <span>Agosto 21 2022</span>
                <h3>Cómo conseguir el coche perfecto a bajo precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam
                    voluptate, dolores sit dolorem quisquam maiores.</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i> </a>
            </div>

            <!--Box 3-->
            <div class="box">
                <img src="/img/car3.jpg" alt="">
                <span>Augoto 21 2022</span>
                <h3>Cómo conseguir el coche perfecto a bajo precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, fugit hic molestias numquam
                    voluptate, dolores sit dolorem quisquam maiores.</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i> </a>
            </div>
        </div>
    </section>
    <!--footer-->
    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">Xe<span>Xe</span></a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>Page</h3>
                <a href="#">Home</a>
                <a href="#">Autos</a>
                <a href="#">Repuestos</a>
                <a href="#">Venta</a>
            </div>

            <div class="footer-box">
                <h3>Legal</h3>
                <a href="#">Privacidad</a>
                <a href="#">Politica de Reembolso</a>
                <a href="#">Cookies Politicas</a>
            </div>

            <div class="footer-box">
                <h3>Contacto</h3>
                <p>Colombia</p>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; XeXe All Right Reserved</p>
    </div>
    <!--JavaScript-->
    <script>
        let search = document.querySelector('.search-box');

        document.querySelector('#search-icon').onclick = () => {
            search.classList.toggle('active');
            menu.classList.remove('active');
        }

        let menu = document.querySelector('.navbar');

        document.querySelector('#menu-icon').onclick = () => {
            menu.classList.toggle('active');
            search.classList.remove('active');
        }


        window.onscroll = () => {
            menu.classList.remove('active');
            search.classList.remove('active');

        }



        //header
        let header = document.querySelector('header');


        window.addEventListener('scroll', () => {
            header.classList.toggle('shadow', window.scrollY > 0);

        });



    </script>
</body>

</html>
