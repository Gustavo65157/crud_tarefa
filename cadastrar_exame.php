<?php
include './DB/connect.php';

if (isset($_POST['cadastrar'])) {
    $data_exam = $_POST['data_exam'];
    $id_medico = $_POST['id_medico'];
    $id_consu = $_POST['id_consu'];
    $id_pacie = $_POST['id_pacie'];

    $sql = "INSERT INTO exame (data_exam, id_medico, id_consu, id_pacie) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siii", $data_exam, $id_medico, $id_consu, $id_pacie);
    
    if ($stmt->execute()) {
        echo "<script>alert('Exame cadastrado com sucesso!'); window.location='listar_exame.php';</script>";
    } else {
        echo "Erro: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Exame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Cadastrar Exame</h2>
        <form method="POST" class="shadow p-4 bg-light rounded">
            <div class="mb-3">
                <label class="form-label">Data do Exame</label>
                <input type="date" name="data_exam" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Médico</label>
                <select name="id_medico" class="form-control" required>
                    <?php 
                    $medicos = $conn->query("SELECT id, nome FROM medico");
                    while ($medico = $medicos->fetch_assoc()) {
                        echo "<option value='".$medico['id']."'>".$medico['nome']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Consulta</label>
                <select name="id_consu" class="form-control" required>
                    <?php 
                    $consultas = $conn->query("SELECT id, tipo FROM consulta");
                    while ($consulta = $consultas->fetch_assoc()) {
                        echo "<option value='".$consulta['id']."'>".$consulta['tipo']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Paciente</label>
                <select name="id_pacie" class="form-control" required>
                    <?php 
                    $pacientes = $conn->query("SELECT id, nome FROM paciente");
                    while ($paciente = $pacientes->fetch_assoc()) {
                        echo "<option value='".$paciente['id']."'>".$paciente['nome']."</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="cadastrar" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</body>
</html>
