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

<body>
    <!-- Inicio backgv -->
    <img class="backgv-social" src="../img/img-fundo-donate.png" alt="">
    <!-- Fim backgv -->
    <!-- Inicio do header -->
    <header>
        <!-- Inicio do navbar -->
        <nav class="navbar fixed-top navbar-expand-lg bg-dark">
            <!-- Inicio container -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h1 class="text-light bi bi-tools">
                        TecNoo
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                        </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 23">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                                </svg>
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
    <main class="container__social">
        <div class=" mt-5 alert bg-light bg-opacity-75 col">
            <div id="solidari">
                <div><img class="img-donate" src="../img/img-donate.png"></div>
                <div>
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

    </main>
    <!-- Link arquivos Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>