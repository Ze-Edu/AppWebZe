<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/my_style.css" />
    <title>Novo Plano</title>
</head>

<body>

    <main class="contaimer">

        <div class="container bg-primary p-4 rounded my-4">
            <a href="index.php" class="text-decoration-none">
                <h1 class="bi bi-arrow-left-square-f: text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                    </svg>
                    Novo Plano
                </h1>
            </a>
        </div>

        <div class="col-md-6 offset-md-3">
            <form action="novo_chamado_cliente.php" method="post" enctype="multipart/form-data">
                <div class=" form-control  bg-secondary">
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