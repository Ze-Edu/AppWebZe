

<!DOCTYPE html>
<html lang="en">

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
    <link rel="icon" type="image/x-icon" href="../img/favicon-32x32.png">
    <title>Descarte</title>
</head>

<body class="bgMain-interno">

    <main class="contaimer">

        <div class="container alert alert-success p-4 rounded my-4">
            <a href="index.php" class="text-decoration-none">
            <h1 class="text-dark">
                <i class="bi bi-arrow-left-square-fill"></i>
                    Hardware Solidário
                </h1>
            </a>
        </div>

        <div class="col-md-6 offset-md-3">
            <form class="form-control alert alert-success" action="novo_descarte_cliente.php" method="post" enctype="multipart/form-data">
                <div class=" form-control form-group  bg-secondary">
                    <!-- input -->
                        <label class="h5" for="nome-hardware">Qual Hardware deseja descartar?</label>
                        <input type="text" class="form-control" name="nome-hardware" id="nome-hardware" maxlength="30">
                    

                    <div class="form-group">
                    <label class="h5 mt-2" for="nome-hardware">Qual o atual estado desse hardware?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estado-hardware" id="funcok" value="0">
                            <label class="form-check-label" for="estado-hardware">Funcionando</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estado-hardware" id="funcparcial" value="1">
                            <label class="form-check-label" for="estado-hardware">Funcionando Parcialmente</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estado-hardware" id="naofunc" value="2">
                            <label class="form-check-label" for="estado-hardware">Não funciona</label>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="h5 mt-2" for="descricao">Descrição:</label><br>
                    <textarea class="form-control" name="descricao" id="descricao" rows="5" maxlength="500"></textarea>
                    </div>

                    <div class="form-group">
                    <label class="h5 mt-2" for="nome-hardware">Foto do Hardware:</label><br>
                    <input class="form-control" type="file" id="foto" name="foto">
                    </div>

                    <div class="form-group">
                    <input class="form-control btn btn-primary mt-2" type="submit" value="Enviar" id="enviar" name="enviar">
                    </div>
                </div>
            </form>
        </div>

    </main>



    <!-- Link arquivos Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>