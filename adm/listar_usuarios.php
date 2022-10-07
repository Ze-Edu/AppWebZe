<?php
//inclui conexão com o banco de dados
include('../connection/conn.php');

$query_usuarios = "SELECT u.id_usuario,
u.nome_usuario,
u.login_usuario,
u.foto_usuario,
u.id_nivel_usuario,
n.nome_nivel
FROM tbusuarios u INNER JOIN tbnivel n ON u.id_nivel_usuario = n.id_nivel";

//Prepara a query
$result_usuarios = $conn->prepare($query_usuarios);
//Executa a query
$result_usuarios->execute();
//Retorna uma matriz associativa e atribui a variável $row 
$row = $result_usuarios->fetch(PDO::FETCH_ASSOC);
//var_dump($row);


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
</head>

<body>
    <?php include('menu_adm.php'); ?>

    <main class="container pt-5">

        <div class="alert alert-success mt-5 p-2 rounded" role="alert">
            <h1 class="bi bi-person-lines-fill">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                </svg>
                Usuários
            </h1>
        </div>

    </main>



</body>

</html>