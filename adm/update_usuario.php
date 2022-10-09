
<?php
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
    <title><?php echo TECNOO; ?>&nbsp; Adicioonar Usuários</title>
</head>

<body class="fundo">
    <!-- Inicio main -->
    <main class="contaimer">

        <div class="container bg-warning p-4 rounded my-2">
            <a href="listar_usuarios.php" class="text-decoration-none">
                <h1 class="text-dark">
                    <i class="bi bi-arrow-left-square-fill"></i>
                    Voltar
                </h1>
            </a>
        </div>
        <!-- Início div principal -->
        <div class="col-md-6 offset-md-3">
            <!-- Início form -->
            <form action="" method="post" enctype="multipart/form-data"></form>
            <div class=" form-control  bg-secondary">
                <div class="form-group">
                    <!--Inserir o campo id_usuario oculto para uso no filtro -->
                    <input type="hidden" name="id_usuario" id="id_usuario">
                </div>

                <div class="form-group">
                    <!-- Select id_nivel_usuario -->
                    <label class="h5" for="id_nivel_usuario">Nível:</label>
                    <div class="input-group">
                        <select class="bi bi-person-badge-fill form-select" name="id_nivel_usuario" id="id_nivel_usuario" required>

                        </select>

                    </div>
                    <!-- input nome_usuario -->
                    <label class="h5 mt-2" for="nome_usuario">Nome:</label>
                    <div class="input-group">
                        <input class="form-control" type="text" id="nome_usuario" name="nome_usuario" placeholder="Digíte o nome">

                    </div>
                    <!-- input email_usuario -->
                    <label class="h5 mt-2" for="email_usuario">E-mail:</label>
                    <div class="input-group">
                        <input class="form-control" type="text" id="email_usuario" name="email_usuario" placeholder="usuario@tecnoo.com.br">

                    </div>

                    <!-- input login_usuario -->
                    <label class="h5 mt-2" for="login_usuario">Login:</label>
                    <div class="input-group">
                        <input class="form-control" type="text" id="login_usuario" name="login_usuario" placeholder="usuario">

                    </div>

                    <!-- input senha_usuario -->
                    <label class="h5 mt-2" for="senha_usuario">Senha:</label>
                    <div class="input-group">
                        <input class="form-control" type="password" id="senha_usuario" name="senha_usuario" placeholder="Digite a senha">

                    </div>

                    <!-- input senha_usuario -->
                    <label class="h5 mt-2" for="foto_usuario">Foto:</label>
                    <div class="input-group">
                        <input class="form-control" type="file" id="foto_usuario" name="foto_usuario">

                    </div>

                    <div class="form-group">
                        <input class="form-control btn btn-primary mt-2" type="submit" value="Enviar" id="enviar" name="enviar">
                    </div>

                </div>
            </div>
            <!-- Fim form -->

        </div>
        <!-- Início div principal -->
    </main>
    <!-- Fim main -->

</body>

</html>