<?php
include './DB/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM medico WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Médico excluído!'); window.location='listar_medico.php';</script>";
    } else {
        echo "Erro ao excluir: " . $stmt->error;
    }
}
?>