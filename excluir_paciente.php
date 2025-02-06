<?php
include './DB/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM paciente WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Paciente excluído com sucesso!";
        header('Location: listar_paciente.php');
    } else {
        echo "Erro ao excluir paciente: " . mysqli_error($conn);
    }
}
?>
