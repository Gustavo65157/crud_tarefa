<?php
include './DB/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM consulta WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Consulta excluída com sucesso!";
        header('Location: listar_consulta.php');
    } else {
        echo "Erro ao excluir consulta: " . mysqli_error($conn);
    }
}
?>
