<?php 
//Inclui o sistema de autenticação
//include('../php/acesso.php');
//Inclui variável de ambiente
include('../php/config_global.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo TECNOO; ?>&nbsp; Área Administrativa</title>
</head>
<body>

<?php 
include('menu_cliente.php');
include('menu_options_cliente.php');
?>
  
</body>
</html>