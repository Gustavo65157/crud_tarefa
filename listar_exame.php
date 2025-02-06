<?php
include './DB/connect.php';

$sql = "SELECT exame.id, exame.data_exam, medico.nome as medico_nome, paciente.nome as paciente_nome, consulta.tipo as consulta_tipo 
        FROM exame 
        JOIN medico ON exame.id_medico = medico.id 
        JOIN paciente ON exame.id_pacie = paciente.id 
        JOIN consulta ON exame.id_consu = consulta.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exames</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Lista de Exames</h2>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Data do Exame</th>
                    <th>Médico</th>
                    <th>Paciente</th>
                    <th>Consulta</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['data_exam']; ?></td>
                        <td><?= $row['medico_nome']; ?></td>
                        <td><?= $row['paciente_nome']; ?></td>
                        <td><?= $row['consulta_tipo']; ?></td>
                        <td>
                            <a href="excluir_exame.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
