<?php
include './DB/connect.php ';
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO medico (nome, telefone, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $telefone, $email);
    
    if ($stmt->execute()) {
        echo "<script>alert('Médico cadastrado com sucesso!'); window.location='listar_medico.php';</script>";
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
    <title>Cadastrar Médico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Cadastro de Médico</h2>
        <form method="POST" class="shadow p-4 bg-light rounded">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" name="cadastrar" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</body>
</html>