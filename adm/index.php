<?php
//Inclui o sistema de autenticação
//include('../php/acesso.php');
//Inclui variável de ambiente
include('../php/config_global.php');
?>

  <!DOCTYPE html>
  <html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/my_style.css" />
    <link rel="icon" type="image/x-icon" href="../img/favicon-32x32.png">
    <title><?php echo TECNOO; ?>&nbsp; Área de Trabalho</title>
  </head>

  <body class="bgMain">

    <!-- plano de fundo -->
    <video class="backgv" poster="poster.jpg" autoplay playsinline muted loop>
      <source src="video/matrix.mp4" type="video/mp4">
    </video>
    <!-- fim plano de fundo -->

    <?php
    include('menu_adm.php');
    include('menu_options_adm.php');
    include('footer_adm.php');
    ?>

    <!-- Link arquivos Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  </body>

  </html>