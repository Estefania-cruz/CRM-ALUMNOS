<?php
require_once('config/db.php');
require_once('controllers/LoginController.php');
require_once('controllers/DashboardController.php');
require_once('controllers/PagosController.php');
require_once('controllers/MateriasController.php');

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

//echo "Acción solicitada: " . $action;

switch ($action) {
    case 'login':
        //echo "Entrando a la acción de login";  
        $controller = new LoginController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $controller->login();  
        } else {
           
            $controller->showLoginForm();
        }
        break;
    case 'dashboard':
        $controller = new DashboardController();
        $controller->showDashboard();  
        break;
    case 'pagos':
        $controller = new PagosController();
        $controller->showPagos(); 
        break;
    case 'materias':
        $controller = new MateriasController();
        $controller->showMaterias(); 
        break;
    default:
        echo "Página no encontrada.";
}
?>
