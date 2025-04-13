<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
    body {
    margin: 0;
    padding: 0;
    height: 100vh;
   /* background-image: url('https://alumnos.sistemasecuiep.com/images/fondo-login.jpeg');*/
   background-image: url('assets/img/Diseño_sin_titulo.png');
   background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}



        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con opacidad */
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-container label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }

        .login-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Formulario de Login</h2>
        <form method="POST" action="index.php?action=login">
            <label>Usuario:</label>
            <input type="text" name="username" required><br><br>
            <label>Contraseña:</label>
            <input type="password" name="password" required><br><br>
            <button type="submit" name="login">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
