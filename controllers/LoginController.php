<?php
require_once('config/db.php');

class LoginController {
    public function showLoginForm() {
        include('views/login.php');
    }

    public function login() {
        //echo "Entrando al método login";  

        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = :username");
            $stmt->execute(['username' => $username]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
            //    echo "Usuario encontrado: " . $usuario['username'];  
            } else {
              //  echo "Usuario no encontrado";  
            }

            if ($usuario && $usuario['password'] === $password) {
              //  echo "Login exitoso"; 
                header('Location: index.php?action=dashboard');
                exit();
            } else {
               // echo "Usuario o contraseña incorrectos."; 
            }
        }
    }
}
?>
