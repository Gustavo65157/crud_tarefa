<?php
include './DB/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM exame WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Exame excluído com sucesso!";
        header('Location: listar_exame.php');
    } else {
        echo "Erro ao excluir exame: " . mysqli_error($conn);
    }
}
?>
