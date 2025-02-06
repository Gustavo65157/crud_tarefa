<?php
include './Db/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM medico WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $medico = $result->fetch_assoc();
}

if (isset($_POST['atualizar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "UPDATE medico SET nome=?, telefone=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nome, $telefone, $email, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Dados atualizados!'); window.location='listar_medico.php';</script>";
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
    <title>Editar Médico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Editar Médico</h2>
        <form method="POST" class="shadow p-4 bg-light rounded">
            <input type="hidden" name="id" value="<?= $medico['id']; ?>">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= $medico['nome']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" value="<?= $medico['telefone']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" value="<?= $medico['email']; ?>" required>
            </div>
            <button type="submit" name="atualizar" class="btn btn-success w-100">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
