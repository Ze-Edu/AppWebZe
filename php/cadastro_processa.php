<?php
session_start(); //Inica a sessão obs: não pode haver nenhum comando ou comentario acima de session_start()
//Limpar o buffer de saida
ob_start();
//Inclui conexão com o banco de dados
include('../connection/conn.php');
//Recebe todos os dados do form cadastro.html
//Atribui os campos recebidos a variável $dados
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Confere se realmente esta recebendo os dados
// var_dump($dados);

try {
     //Inserindo dados na tabela cliente
     $query_cliente = "INSERT INTO tbcliente (nome_cliente, cpf_cliente, telefone_cliente, cnpj_cliente,
     razao_social_cliente, id_tipo_cliente, email_cliente, senha_cliente)
     VALUES(:nome_cliente, :cpf_cliente, :telefone_cliente, :cnpj_cliente, :razao_social_cliente, :id_tipo_cliente, :email_cliente, :senha_cliente)";
        //Prepara a query e atribui a váriavel $cad_cliente
        $cad_cliente = $conn->prepare($query_cliente);

        //Verica tipo cliente
        if ($dados['cnpj'] == "") {
            $id_tipo_cliente = 1;
        } else {
            $id_tipo_cliente = 2;
        }

        //Criptografa a senha do usuário
        $hash = password_hash($dados['senha'], PASSWORD_DEFAULT);
        //substitui o link pelos valores armazenados na variável $dados
        $cad_cliente->bindParam(':nome_cliente', $dados['nome'], PDO::PARAM_STR);
        $cad_cliente->bindParam(':cpf_cliente', $dados['cpf'], PDO::PARAM_STR);
        $cad_cliente->bindParam(':telefone_cliente', $dados['telefone'], PDO::PARAM_STR);
        $cad_cliente->bindParam(':cnpj_cliente', $dados['cnpj'], PDO::PARAM_STR);
        $cad_cliente->bindParam(':razao_social_cliente', $dados['rsocial'], PDO::PARAM_STR);
        $cad_cliente->bindParam(':id_tipo_cliente', $id_tipo_cliente, PDO::PARAM_INT);
        $cad_cliente->bindParam(':email_cliente', $dados['email'], PDO::PARAM_STR);
        $cad_cliente->bindParam(':senha_cliente', $hash, PDO::PARAM_STR);
        //executa a query
        $cad_cliente->execute();
        //Cria variável global para salvar a menssagem de sucesso
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!<br>Use o seu e-mail e senha para efetuar login</P> ";
    
} catch (Exception) {

    //Cria variável global para salvar a menssagem de erro
    $_SESSION['msg'] = "<p style='color:#f00;'> Erro: Ops!! Parece que o e-mail ou CPF já estão cadastrados!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;URL=../pages/login.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/my_style.css" />
    <title>Cadastro</title>
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