<?php




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;URL=../adm/listar_usuarios.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/my_style.css" />
    <title>Novo Usuário</title>
</head>

<body>

    <!-- Inicio backgv -->
    <video class="backgv" poster="poster.jpg" autoplay playsinline muted loop>
        <source src="../video/matrix.mp4" type="video/mp4">
    </video>
    <!-- Fim backgv -->

    <main class="container">
        <div class="row d-flex justify-content-center pt-5">
            <div class="btn btn-light text-center">
                <h2>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        //Após imprimir destroi a variavel para não imprimir novamente
                        unset($_SESSION['msg']);
                    }
                    ?>
                </h2>
            </div>
        </div>
    </main>


    <!-- Link arquivos Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
