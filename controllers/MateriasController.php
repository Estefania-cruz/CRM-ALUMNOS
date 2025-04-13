<?php
class MateriasController {
    public function showMaterias() {
        // Recuperar materias de la base de datos
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM materias WHERE alumno_id = 1");
        $materias = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        include('views/materias.php');
    }
}
?>
