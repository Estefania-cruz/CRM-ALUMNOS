<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        header {
            background-color: #428BCA;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            margin-right: 15px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            height: 50px;
        }

        .user-menu {
            margin-left: auto;
            position: relative;
        }

        .user-name {
            display: flex;
            align-items: center;
            cursor: pointer;
            gap: 8px;
        }

        .user-name img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
        }

        .dropdown {
            display: none;
            position: absolute;
            right: 0;
            background-color: #fff;
            color: #000;
            border: 1px solid #ccc;
            min-width: 120px;
            z-index: 1000;
        }

        .dropdown a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #000;
        }

        .dropdown a:hover {
            background-color: #eee;
        }

        .user-menu:hover .dropdown {
            display: block;
        }

        .container {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        nav {
            width: 200px;
            background-color: #1D365C;
            color: white;
            padding-top: 20px;
        }

        nav ul {
            list-style: none;
        }

        nav li {
            border-bottom: 1px solid #1b2f4a;
        }

        nav a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }

        nav a:hover,
        nav a.active {
            background-color: #428BCA;
        }

        main {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        section {
            margin-bottom: 20px;
        }

        .tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .tab {
            background-color: #1D365C;
            color: white;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
            border: none;
        }

        .tab:hover,
        .tab.active {
            background-color: #428BCA;
        }

        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }

        .carousel {
            position: relative;
            width: 100%;
            max-width: 2560px;
            aspect-ratio: 2560 / 1282;
            overflow: hidden;
            margin: 0 auto;
            border-radius: 10px;
            background-color: #000;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: calc(100% * 5);
            /* 5 imágenes */
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            flex-shrink: 0;
        }


        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }

        .carousel-btn.prev {
            left: 10px;
        }

        .carousel-btn.next {
            right: 10px;
        }

        @media (max-width: 768px) {
            nav {
                position: absolute;
                left: -220px;
                top: 60px;
                height: calc(100% - 60px);
                transition: left 0.3s ease;
                z-index: 999;
            }

            nav.open {
                left: 0;
            }

            .hamburger {
                display: block;
            }

            .container {
                flex-direction: column;
            }

            .carousel {
        aspect-ratio: auto;
        height: auto;
        max-height: 400px;
    }

            header img {
                display: none;
            }
            
        }
    </style>
</head>

<body>

    <header>
        <span class="hamburger" onclick="toggleMenu()">☰</span>
        <div class="logo-container">
            <img src="assets/img/SECUIEP Logotipo V1 MONO NEG HR.png" alt="Logo">
        </div>

        <div class="user-menu">
            <span class="user-name">
                <img src="assets/img/ATLACOMULCO.png" alt="Foto de usuario">
                Juan Pérez ▼
            </span>
            <div class="dropdown">
                <a href="#">Perfil</a>
                <a href="#">Salir</a>
            </div>
        </div>
    </header>

    <div class="container">
        <nav id="sidebar">
            <ul>
                <li><a href="#" class="active"><i class="fas fa-user"></i> Detalles</a></li>
                <li><a href="#"><i class="fas fa-laptop"></i> Campus Virtual</a></li>
                <li><a href="#"><i class="fas fa-calendar-alt"></i> Calendario</a></li>
                <li><a href="#"><i class="fas fa-credit-card"></i> Pagos</a></li>
                <li><a href="#"><i class="fas fa-book"></i> Materias</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Padre/Tutor</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Salir</a></li>
            </ul>
        </nav>

        <main>
            <section id="datos">
                <h2>Datos</h2>
                <p>Aquí puedes mostrar los datos principales del usuario o del CRM.</p>
            </section>

            <section id="noticias">
                <h2>Noticias</h2>
                <div class="tabs">
                    <button class="tab active" onclick="showTab('noticia1')">Noticia 1</button>
                    <button class="tab" onclick="showTab('noticia2')">Noticia 2</button>
                    <button class="tab" onclick="showTab('avisos')">Avisos</button>
                    <button class="tab" onclick="showTab('proximamente')">Próximamente</button>
                </div>

                <div id="noticia1" class="tab-pane active">
                    <div class="carousel" id="carousel">
                        <div class="carousel-inner">
                            <img src="assets/img/Diseño_sin_titulo.png" alt="Imagen 1">
                            <img src="assets\img\BTS_during_a_White_House_press_conference_May_31,_2022_(cropped).jpg" alt="Imagen 2">
                            <img src="assets\img\13_sabias que.jpeg" alt="Imagen 3">
                            <img src="assets\img\13_sabias que.jpeg" alt="Imagen 4">
                            <img src="assets\img\13_sabias que.jpeg" alt="Imagen 5">
                        </div>
                        <button class="carousel-btn prev" onclick="prevSlide()">❮</button>
                        <button class="carousel-btn next" onclick="nextSlide()">❯</button>
                    </div>

                </div>

                <div class="tab-pane" id="noticia2">
                    <p>Actualización disponible. Revisa las nuevas mejoras en el sistema.</p>
                </div>

                <div class="tab-pane" id="avisos">
                    <p>No olvides entregar tus documentos oficiales antes del viernes.</p>
                </div>

                <div class="tab-pane" id="proximamente">
                    <p>¡Nuevas funciones llegarán pronto! Mantente atento.</p>
                </div>
            </section>
        </main>
    </div>

    <script>
        function toggleMenu() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open");
        }

        function showTab(tabId) {
            const tabPanes = document.querySelectorAll('.tab-pane');
            const tabs = document.querySelectorAll('.tab');
            tabPanes.forEach(pane => pane.classList.remove('active'));
            tabs.forEach(tab => tab.classList.remove('active'));

            document.getElementById(tabId).classList.add('active');
            document.querySelector(`[onclick="showTab('${tabId}')"]`).classList.add('active');
        }

        // Carrusel
        let slideIndex = 0;
        const slides = document.querySelectorAll('.carousel-inner img');
        const totalSlides = slides.length;
        const carouselInner = document.querySelector('.carousel-inner');

        function showSlide(index) {
            slideIndex = (index + totalSlides) % totalSlides;
            carouselInner.style.transform = `translateX(-${slideIndex * 100}%)`;
        }

        function nextSlide() {
            showSlide(slideIndex + 1);
        }

        function prevSlide() {
            showSlide(slideIndex - 1);
        }

        setInterval(() => {
            nextSlide();
        }, 5000);

        showSlide(0);
    </script>

</body>

</html>