<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            justify-content: space-between;
            align-items: center;
        }

        header img {
            height: 40px;
        }

        .user-menu {
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

        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: white;
        }

        .logo-container {
            display: flex;
    align-items: center;
    margin-left: 15px;
        }

        .logo-container img {
            height: 60px;
        }

        .user-name img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
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
                margin-left: 10px;
            }

            .container {
                flex-direction: column;
            }

            header img {
                display: none;
            }
        }
    </style>
</head>

<body>



    <header>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <span class="hamburger" onclick="toggleMenu()">☰</span>

        <!-- Logo centrado y más grande -->
        <div class="logo-container">
            <img src="assets/img/SECUIEP Logotipo V1 MONO NEG HR.png" alt="Logo">
        </div>

        <!-- Usuario -->
        <div class="user-menu">
            <span class="user-name">
                <img src="assets\img\ATLACOMULCO.png" alt="Foto de usuario">
                Juan Pérez ▼
            </span>
            <div class="dropdown">
                <a href="index.php?action=detalles">Perfil</a>
                <a href="index.php?action=logout">Salir</a>
            </div>
        </div>

    </header>


    <div class="container">
        <nav id="sidebar">
            <ul>
                <!-- Se puede usar PHP para resaltar el activo -->
                <?php $action = $_GET['action'] ?? ''; ?>
                <li><a href="index.php?action=detalles" class="<?= $action == 'detalles' ? 'active' : '' ?>"><i class="fas fa-user"></i> Detalles</a></li>
                <li><a href="https://online.sistemasecuiep.com/login/index.php" target="_blank"><i class="fas fa-laptop"></i> Campus Virtual</a></li>
                <li><a href="index.php?action=calendario" class="<?= $action == 'calendario' ? 'active' : '' ?>"><i class="fas fa-calendar-alt"></i> Calendario de Actividades</a></li>
                <li><a href="index.php?action=pagos" class="<?= $action == 'pagos' ? 'active' : '' ?>"><i class="fas fa-credit-card"></i> Pagos</a></li>
                <li><a href="index.php?action=materias" class="<?= $action == 'materias' ? 'active' : '' ?>"><i class="fas fa-book"></i> Materias</a></li>
                <li><a href="index.php?action=familiares" class="<?= $action == 'familiares' ? 'active' : '' ?>"><i class="fas fa-users"></i> Padre/Tutor</a></li>
                <li><a href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Salir</a></li>

            </ul>
        </nav>

        <main>
            <section id="datos">
                <h2>Datos</h2>
                <p>Aquí puedes mostrar los datos principales del usuario o del CRM.</p>
            </section>

            <section id="noticias">
                <h2>Noticias</h2>
                <ul>
                    <li>Noticia 1: Información relevante del sistema.</li>
                    <li>Noticia 2: Nueva actualización disponible.</li>
                    <li>Noticia 3: Mantenimiento programado el viernes.</li>
                </ul>
            </section>
        </main>
    </div>

    <script>
        function toggleMenu() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open");
        }
    </script>

</body>

</html>