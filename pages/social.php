<?php 
session_start();
//inclui conexão com o banco de dados
include('../connection/conn.php');
//Inclui variável de ambiente
include('../php/config_global.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import cdn CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- import cdn icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- import my CSS -->
    <link rel="stylesheet" href="../css/my_style.css" />
    <title><?php echo TECNOO; ?>&nbsp; Social</title>
</head>

<body class="backgv-social">
    <header>
        <!-- Inicio do navbar -->
        <nav class="navbar fixed-top navbar-expand-lg bg-dark">
            <!-- Inicio container -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h1 class="text-light">
                        TecNoo
                        <span><i class="bi bi-tools"></i></span>
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Inicio menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="../index.php">
                                <span><i class="bi bi-house-door-fill"></i></span>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../index.php#contato">Contato</a>
                        </li>
                        <!-- Inicio do dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../index.php#planos">Planos</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="pages/blog.php">Blog</a></li>
                            </ul>
                        </li>
                        <!-- Fim do dropdown -->
                        <li class="nav-item">
                            <a href="./login.php" class="nav-link text-light">Login</a>
                        </li>
                    </ul>
                    <!-- Inicio do form buscar -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" />
                        <button class="btn btn-outline-success" type="submit">
                            Buscar
                        </button>
                    </form>
                    <!-- Fim do Form buscar -->
                </div>
                <!-- Final do menu -->
            </div>
            <!-- Final do container -->
        </nav>
        <!-- Final do navbar -->
    </header>
    <main class="container-fluid mt-5 text-center pt-5">
        <div class="card" style="max-width: 100vw;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/img-donate.png" class="img-fluid rounded-start" alt="donate">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1>Hardware Solidário</h1>
                        <br>
                        <h4>Criado com o objetivo de ajudar as pessoas que não conseguem ter algum tipo de hardware para diversos fins,
                            como estudos, jogos e etc...
                            Temos em mente que hoje em dia tudo com relação a atualidade e evolução envolve algum tipo de hardware, e queremos levar
                            essas tecnologias para todos.
                            <br>
                            Abaixo encontra-se um botão caso queira nos ajudar com esse projeto, com doações de hardwares, como
                            cases, placas mães, cabos, monitores, mouses e etc...
                            <br>
                            Caso não esteja funcionando, não há problema, apenas informar no formulario clicando no botão abaixo.
                        </h4>
                        <a href="./login.php"><button class="align-self-center btn btn-dark mb-3 mt-5">Contribuir</button></a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Link arquivos Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>