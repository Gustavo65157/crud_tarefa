<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Consultório Médico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Consultório Médico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="listar_medico.php">Médicos</a></li>
                    <li class="nav-item"><a class="nav-link" href="listar_paciente.php">Pacientes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container text-center mt-5 pt-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-4 mb-4 text-primary">Bem-vindo ao Sistema de Consultório Médico</h1>
                <p class="lead text-muted">Utilize o menu abaixo para navegar entre as funcionalidades de cadastro e consulta.</p>
            </div>
        </div>
    </section>

    <section class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-light h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Médicos</h5>
                        <p class="card-text text-muted">Cadastre e consulte os médicos do consultório.</p>
                        <a href="cadastrar_medico.php" class="btn btn-outline-primary mt-auto">Cadastrar Médico</a>
                        <a href="listar_medico.php" class="btn btn-outline-secondary mt-2">Listar Médicos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-light h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Pacientes</h5>
                        <p class="card-text text-muted">Cadastre e consulte os pacientes atendidos no consultório.</p>
                        <a href="cadastrar_paciente.php" class="btn btn-outline-primary mt-auto">Cadastrar Paciente</a>
                        <a href="listar_paciente.php" class="btn btn-outline-secondary mt-2">Listar Pacientes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-light h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Consultas & Exames</h5>
                        <p class="card-text text-muted">Gerencie as consultas e exames realizados no consultório.</p>
                        <a href="cadastrar_consulta.php" class="btn btn-outline-primary mt-auto">Cadastrar Consulta</a>
                        <a href="cadastrar_exame.php" class="btn btn-outline-primary mt-2">Cadastrar Exame</a>
                        <a href="listar_consulta.php" class="btn btn-outline-secondary mt-2">Listar Consultas</a>
                        <a href="listar_exame.php" class="btn btn-outline-secondary mt-2">Listar Exames</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
