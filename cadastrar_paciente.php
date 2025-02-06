<?php
include './DB/connect.php';

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $exame = $_POST['exame'];

    $sql = "INSERT INTO paciente (nome, cpf, exame) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $cpf, $exame);
    
    if ($stmt->execute()) {
        echo "<script>alert('Paciente cadastrado com sucesso!'); window.location='listar_paciente.php';</script>";
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
    <title>Cadastrar Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Cadastro de Paciente</h2>
        <form method="POST" class="shadow p-4 bg-light rounded">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Exame</label>
                <input type="text" name="exame" class="form-control" required>
            </div>
            <button type="submit" name="cadastrar" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</body>
</html>
