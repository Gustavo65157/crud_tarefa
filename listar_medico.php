<?php
include './DB/connect.php';

$sql = "SELECT * FROM medico";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Médicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Lista de Médicos</h2>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nome']; ?></td>
                        <td><?= $row['telefone']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td>
                            <a href="editar_medico.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="excluir_medico.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>