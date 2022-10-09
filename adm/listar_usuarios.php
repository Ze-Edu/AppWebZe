    <?php
    //inclui conexão com o banco de dados
    include('../connection/conn.php');
    //Inclui variável de ambiente
    include('../php/config_global.php');

    $query_usuarios = "SELECT u.id_usuario,
    u.nome_usuario,
    u.login_usuario,
    u.email_usuario,
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
        <!-- import cdn CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
        <!-- import cdn icons Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- import my CSS -->
        <link rel="stylesheet" href="../css/my_style.css" />
        <title><?php echo TECNOO; ?>&nbsp; Listar Usuários</title>
    </head>

    <body>
        <?php include('menu_adm.php'); ?>

        <main class="container pt-5">

            <div class="alert alert-success mt-5 p-2 rounded" role="alert">
                <h1><span><i class="bi bi-person-lines-fill"></i>  Usuários</span></h1>
            </div>
            <!-- Início da tabela -->
            <table class="table table-dark table-hover">
                <!-- Início do cabeçalho da tabela -->
                <thead>
                    <tr>
                        <th class="foto_usuraio">FOTO:</th>
                        <th>ID:</th>
                        <th>NOME:</th>
                        <th>EMAIL:</th>
                        <th>LOGIN:</th>
                        <th>NÍVEL:</th>
                        <th class="largButton">
                            <a href="add_usuario.php" class="btn largButton btn-primary btn">
                                <span><i class="bi bi-plus-square-fill"></i> Adicionar</span>


                            </a>
                        </th>
                    </tr>
                </thead>
                <!-- Fim do cabeçalho da tabela -->
                <!-- Início corpo da tabela -->
                <tbody>
                    <!-- Abri estrutura de repetição -->
                    <?php do { ?>
                        <tr>
                            <!-- Início foto -->
                            <td>
                                <img src="../img/fotos_usuarios/<?php echo $row['foto_usuario']; ?>" alt="" width="100px">
                            </td>
                            <!-- Fim foto -->
                            <!-- Início ID -->
                            <td>
                                <?php echo $row['id_usuario']; ?>
                            </td>
                            <!-- Fim ID -->
                            <!-- Início Nome -->
                            <td>
                                <?php echo $row['nome_usuario']; ?>
                            </td>
                            <!-- Fim Nome -->
                            <!-- Início E-mail -->
                            <td>
                                <?php echo $row['email_usuario']; ?>
                            </td>
                            <!-- Fim E-mail -->
                            <!-- Início Login -->
                            <td>
                                <?php echo $row['login_usuario']; ?>
                            </td>
                            <!-- Fim Login -->
                            <!-- Início Nível -->
                            <td>
                                <?php echo $row['nome_nivel']; ?>
                            </td>
                            <!-- Início Nível -->
                            <!-- Início Botões -->
                            <td>
                                <!-- Início botão alterar -->
                                <a href="update_usuario.php?id_usuario=<?php echo $row['id_usuario']; ?>" class="btn largButton btn-warning btn mt-2">
                                    <span><i class="bi bi-pencil-square"></i>Alterar</span>
                                </a>
                                <!-- Fim botão alterar -->
                                <!-- Início botão excluir -->
                                <button class="btn btn-danger largButton delete mt-2" role="button" data-nome="<?php echo $row['nome_usuario'];?>" 
                                data-id="<?php echo $row['id_usuario']; ?>"
                                data-bs-toggle="modal" data-bs-target="#myModal">
                                    <span class=""><i class="bi bi-trash-fill"></i>Excluir</span>


                                </button>
                                <!-- Fim botão excluir -->
                            </td>
                            <!-- Fim Botões -->
                        </tr>
                </tbody>
                <!-- Fim corpo da tabela -->
            <?php  } while ($row = $result_usuarios->fetch(PDO::FETCH_ASSOC)); ?>
            </table>
            <!-- Fim da tabela -->
        </main>

        <!-- Início Modal -->
        <div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-danger">Atenção!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Deseja realmente <strong> Desligar </strong> o usuário?</p>
            <h3><span class="text-danger nome"></span></h3>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger delete-yes">Confirmar</button>
        </div>
        </div>
    </div>
    </div>
        <!-- Fim Modal -->


        <!-- Link arquivos Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <!-- Links para incluir popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <!-- Link para incluir ajax/jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Script para o modal -->
        <script type="text/javascript">
            $('.delete').on('click', function(){
                //Busca o valor do atributo data-nome
                var nome = $(this).data('nome');
                //Busca o valor do atributo data-id
                var id = $(this).data('id');
                //Insere o nome do item na confirmação do modal
                $('span.nome').text(nome);
                //Envia o id através do link do butão confirmar
                $('a.delete-yes').attr('href', 'usuario_excluir.php?id_usuario='+id);
                //Abre o Modal
                $('#myModal').modal('show');

            });
        </script>
    </body>

    </html>