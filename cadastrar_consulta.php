<?php
include './DB/connect.php';

if (isset($_POST['cadastrar'])) {
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];
    $data_cons = $_POST['data_cons'];
    $id_medico = $_POST['id_medico'];

    $sql = "INSERT INTO consulta (tipo, descricao, data_cons, id_medico) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $tipo, $descricao, $data_cons, $id_medico);
    
    if ($stmt->execute()) {
        echo "<script>alert('Consulta cadastrada com sucesso!'); window.location='listar_consulta.php';</script>";
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
    <title>Cadastrar Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Cadastrar Consulta</h2>
        <form method="POST" class="shadow p-4 bg-light rounded">
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" name="tipo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Data da Consulta</label>
                <input type="date" name="data_cons" class="form-control" required>
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
            <button type="submit" name="cadastrar" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</body>
</html>
