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
    <title>Novo Plano</title>
</head>

<body>

    <main class="contaimer">

        <div class="container bg-primary p-4 rounded my-4">
            <a href="index.php" class="text-decoration-none">
            <h1 class="text-dark">
                <i class="bi bi-arrow-left-square-fill"></i>
                    Novo Plano
                </h1>
            </a>
        </div>

        <div class="col-md-6 offset-md-3">
            <form class="form-control alert alert-success" action="novo_chamado_cliente.php" method="post" enctype="multipart/form-data">
                <div class=" form-control form-group  bg-secondary">
                    <div class="form-group">
                        <label class="h5" for="nome-hardware">Títular do Cartão:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="30">
                    </div>

                    <div class="form-group">
                        <label class="h5" for="nome-hardware">CPF/CNPJ:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="30">
                    </div>

                    <div class="form-group">
                        <label class="h5" for="nome-hardware">Número do Cartão:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="30">
                    </div>

                    <div class="form-group">
                        <label class="h5" for="nome-hardware">Validade (MM/AAAA):</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="30">
                    </div>

                    <div class="form-group">
                        <label class="h5" for="nome-hardware">Código (CVV):</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="30">
                    </div>

                    <div class="form-group">
                        <label class="h5" for="nome-hardware">Número de Parcelas:</label>
                        <input type="number" min="1" max="12" class="form-control" name="titulo" id="titulo" maxlength="30">
                    </div>

                    <div class="form-group">
                    <input class="form-control btn btn-primary mt-2" type="submit" value="Contratar" id="enviar" name="enviar">
                    </div>
                </div>
            </form>
        </div>

    </main>



    <!-- Link arquivos Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>