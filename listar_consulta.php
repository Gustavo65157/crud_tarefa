<?php
include './DB/connect.php';

$sql = "SELECT consulta.id, consulta.tipo, consulta.descricao, consulta.data_cons, medico.nome as medico_nome FROM consulta JOIN medico ON consulta.id_medico = medico.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Lista de Consultas</h2>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Médico</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['tipo']; ?></td>
                        <td><?= $row['descricao']; ?></td>
                        <td><?= $row['data_cons']; ?></td>
                        <td><?= $row['medico_nome']; ?></td>
                        <td>
                            <a href="excluir_consulta.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
