<?php
session_start();
//inclui conexão com o banco de dados
include('../connection/conn.php');
//Inclui variável de ambiente
include('../php/config_global.php');

//Atribui os campos recebidos a variável $dados
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($_POST) {

    //Verifica se há envio de arquivo de foto
    if (isset($_FILES['foto_usuario'])) {
        $img_usuario = $_FILES['foto_usuario'];
        $pasta_img = "../img/fotos_usuarios/";
        $nome_img = $img_usuario['name'];

        //gera um nome aletório e único para a imagem
        $novoNomeImg = uniqid();

        //verifica e coverte a extensão se maiúsculo para minúsculo
        $extensao = strtolower(pathinfo($nome_img, PATHINFO_EXTENSION));
        
        //Gera nome com .extensão para gravar no banco
        $novoNomeImgExtensao = $novoNomeImg . "." . $extensao;
        
        //move o arquivo para a pasta do servidor
        move_uploaded_file($img_usuario['tmp_name'], $pasta_img . $novoNomeImgExtensao);
    }

    //Campo do form para filtar o registro
    $id_filtro = $_POST['id_usuario'];

    //QUERY atualiza dados na tabela tbusuarios e tbnivel
    $query_usuario = " UPDATE tbusuarios SET id_nivel_usuario = :id_nivel_usuario, nome_usuario = :nome_usuario, email_usuario = :email_usuario, 
    login_usuario = :login_usuario, foto_usuario = :foto_usuario
    WHERE id_usuario = :id_usuario";
    //Prepara a query e atribui a váriavel $cad_usuario
    $edit_usuario = $conn->prepare($query_usuario);

    //substitui o link pelos valores armazenados na variável $dados
    $edit_usuario->bindParam(':id_nivel_usuario', $dados['id_nivel_usuario'], PDO::PARAM_INT);
    $edit_usuario->bindParam(':nome_usuario', $dados['nome_usuario'], PDO::PARAM_STR);
    $edit_usuario->bindParam(':email_usuario', $dados['email_usuario'], PDO::PARAM_STR);
    $edit_usuario->bindParam(':login_usuario', $dados['login_usuario'], PDO::PARAM_STR);
    $edit_usuario->bindParam(':foto_usuario', $novoNomeImgExtensao, PDO::PARAM_STR);
    $edit_usuario->bindParam(':id_usuario', $id_filtro, PDO::PARAM_INT);


    if ($edit_usuario->execute()) {
        header("location: msg_alert_usuario.php");
        //Cria variável global para salvar a menssagem de sucesso
        $_SESSION['msg'] = "<p style='color:green;'>Tudo Certo!!<br>Usuário atualizado com sucesso!</P> ";
    } else {
        //Cria variável global para salvar a menssagem de erro
        $_SESSION['msg'] = "<p style='color:#f00;'> Erro: Ops!! Erro ao atualizar usuário!</p>";

        header("location: msg_alert_usuario.php");
    }
}

//Consulta para recuperar dados do filtro da chamada da página...
$id_alterar = $_GET['id_usuario'];

//QUERY consulta na tabela tbusuarios
$busca_usuario = "SELECT * FROM tbusuarios WHERE id_usuario = " . $id_alterar;
$result_busca = $conn->prepare($busca_usuario);
$result_busca->execute();
$row_busca = $result_busca->fetch(PDO::FETCH_ASSOC);



//busca na tabelarelacionada tbnivel
$query_nivel = "SELECT * FROM tbnivel ORDER BY nome_nivel ASC";
$result_nivel = $conn->prepare($query_nivel);
$result_nivel->execute();
$row_nivel = $result_nivel->fetch(PDO::FETCH_ASSOC);
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
    <link rel="icon" type="image/x-icon" href="../img/favicon-32x32.png">
    <title><?php echo TECNOO; ?>&nbsp; Adicioonar Usuários</title>
</head>

<body class="bgMain">
    <!-- Inicio main -->
    <main class="contaimer">

        <div class="container alert alert-primary p-4 rounded my-2">
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
            <form class="form-control alert alert-success" action="update_usuario.php" method="POST" enctype="multipart/form-data" name="form_update_usuario" id="form_update_usuario">
                <div class=" form-control form-group bgMain text-light">

                    <!--Inserir o campo id_usuario oculto para uso no filtro -->
                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $row_busca['id_usuario'];?>">

                    <!-- Select id_nivel_usuario -->
                    <label class="h5" for="id_nivel_usuario">Nível:</label>
                    <select class="bi bi-person-badge-fill form-select" name="id_nivel_usuario" id="id_nivel_usuario" required>
                        <?php do { ?>
                            <option value="<?php echo $row_nivel['id_nivel']; ?>"
                            <?php if (!(strcmp($row_nivel['id_nivel'], $row_busca['id_nivel_usuario']))) {
                                echo "selected=\"selected\"";
                            } ?>>
                                <?php echo $row_nivel['nome_nivel']; ?>
                            </option>
                        <?php } while ($row_nivel = $result_nivel->fetch(PDO::FETCH_ASSOC)); ?>
                    </select>

                    <!-- input nome_usuario -->
                    <label class="h5 mt-2" for="nome_usuario">Nome:</label>
                    <input class="form-control" type="text" id="nome_usuario" name="nome_usuario" value="<?php echo $row_busca['nome_usuario'];?>">

                    <!-- input email_usuario -->
                    <label class="h5 mt-2" for="email_usuario">E-mail:</label>
                    <input class="form-control" type="text" id="email_usuario" name="email_usuario" value="<?php echo $row_busca['email_usuario'];?>">

                    <!-- input login_usuario -->
                    <label class="h5 mt-2" for="login_usuario">Login:</label>
                    <input class="form-control" type="text" id="login_usuario" name="login_usuario" value="<?php echo $row_busca['login_usuario'];?>">

                    <!-- input senha_usuario -->
                    <label class="h5 mt-2" for="foto_usuario">Foto:</label>
                    <img src="" alt="" name="foto" id="foto" class="img-responsive">
                    <input class="form-control" type="file" id="foto_usuario" name="foto_usuario" accept="image/*">

                    <!-- input enviar -->
                    <input class="form-control btn btn-primary mt-2" type="submit" value="Enviar" id="enviar" name="enviar">
                </div>
            </form>
            <!-- Fim form -->
        </div>
        <!-- Início div principal -->
        <?php include('footer_adm.php');?>
    </main>
    <!-- Fim main -->

    <!-- Link arquivos Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Links para incluir popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <!-- Link para incluir ajax/jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Script para a imagem -->
    <script>
        document.getElementById("foto_usuario").onchange = function() {
            var reader = new FileReader();
            if (this.files[0].size > 528385) {
                alert("A imagem deve ter no máximo 500KB");
                $("#foto").attr("src", "blank");
                $("#foto").hide();
                $("#foto_usuario").wrap('<form>').closest('form').get(0).reset();
                $("#ifoto_usuario").unwrap();
                return false;

            }
            // Verifica se o input do titpo file possui dado
            if (this.files[0].type.indexOf("image") == -1) {
                alert("Formato inválido, escolha uma imagem!");
                $("#foto").attr("src", "blank");
                $("#foto").hide();
                $("#foto_usuario").wrap('<form>').closest('form').get(0).reset();
                $("#foto_usuario").unwrap();
                return false;
            };
            reader.onload = function(e) {
                //Obter dados  carregados e renderizar a miniatura
                document.getElementById("foto").src = e.target.result;
                $("#foto").show();
            };
            reader.readAsDataURL(this.files[0]);
        };
    </script>

</body>

</html>