<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/my_style.css" />
    <title>Tecnoo</title>
</head>
<body class="bgMain-interno">

<main class="container pt-5 my-5">
<div class="alert alert-primary text-center mt-5 p-2 rounded" role="alert">
      <h1 class="mb-3">Minha Área</h1>
    </div>
        <!-- Inicio row -->
        <div class="row ">
          <!-- Inicio botão Principal chamados -->
          <div class="alert bg-secondary text-center bg-opacity-75 col " >
                <img src="../img/chamados.png" alt="">
                <br>
            <div class="alert bg-warning bg-opacity-75 "><h4>Chamados</h4></div>

            <div class="">
              <a href="novo_chamado_cliente.php"><button type="button" class="btn btn-info">Novo Chamado</button></a> 
              <a href="lista_chamado_cliente.php"><button type="button" class="btn btn-info">Meus Chamados</button></a>             
            </div>
          </div>          
          <!-- Fim botão Principal chamados -->

           <!-- Inicio botão Principal Hardware solidário -->
          <div class="alert bg-secondary mx-2 text-center bg-opacity-75 col " >
                <img src="../img/hardware.png" alt="">
            <div class="alert bg-success bg-opacity-75 "><h4>Hardware Solidário</h4></div>

            <div class="">
              <a href="novo_descrate_cliente.php"><button type="button" class="btn btn-info">Novo Descarte</button></a> 
              <a href="lista_descarte_cliente.php"><button type="button" class="btn btn-info">Meus Descartes</button></a>             
            </div>
          </div>          
          <!-- Fim botão Principal Hardware solidário -->

          <!-- Inicio botão Principal planos -->
          <div class="alert bg-secondary mx-2 text-center bg-opacity-75 col " >
                <img src="../img/planos.png" alt="">
            <div class="alert bg-primary bg-opacity-75 "><h4>Contratos</h4></div>

            <div class="">
              <a href="novo_contrato_cliente.php"><button type="button" class="btn btn-info">Novo Contrato</button></a> 
              <a href="meu_contrato.php"><button type="button" class="btn btn-info">Meu Plano</button></a>             
            </div>
          </div>          
          <!-- Fim botão Principal planos  -->
        </div>
        <!-- Fim row -->
</main>

</body>
</html>