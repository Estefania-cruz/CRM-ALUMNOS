<?php
class PagosController {
    public function showPagos() {
        // Recuperar los pagos de la base de datos
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM pagos WHERE alumno_id = 1");  // Suponiendo el alumno con ID 1
        $pagos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        include('views/pagos.php');
    }
}
?>
