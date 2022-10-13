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
    <link rel="icon" type="image/x-icon" href="../img/favicon-32x32.png">
    <title>Novo Contrato</title>
</head>

<body class="bgMain-interno">

    <main class="contaimer">

        <div class="container alert alert-primary p-4 rounded my-4">
            <a href="index.php" class="text-decoration-none">
            <h1 class="text-dark">
                <i class="bi bi-arrow-left-square-fill"></i>
                    Novo Contrato
                </h1>
            </a>
        </div>
            
    <!-- Inicio planos -->
    <div class="container text-center mt-10 p-1">
      <!-- Inicio row -->
      <div class="row" id="planos">
        <!-- Inicio botão prata -->
        <div onmouseover="mudacorPrata()" onmouseout="voltaOriginalPrata()" class="alert bg-light bg-opacity-75 col" id="prata">
          <div class="alert bg-secondary bg-opacity-75 ">
            <h4>Prata</h4>
          </div>
          <div class="alert bg-dark text-light">
            <p>
            <h4>Suporte 24Hrs por telefone/app e web + suporte presencial limitado + 10% Off</h4>
            </p>
          </div>
          <div class="row">
            <a href="#" type="button" class="btn btn-outline-dark col col me-1" data-bs-toggle="modal" data-bs-target="#login">Contratar!</a><br>
            <h4>R$49.90</h4>  
        </div>
        </div>
        <!-- Fim botão prata -->

        <!-- Inicio botão ouro -->
        <div onmouseover="mudacorOuro()" onmouseout="voltaOriginalOuro()" class="alert bg-light bg-opacity-75 mx-2 col" id="ouro">
          <div class="alert bg-warning bg-opacity-100">
            <h4>Ouro</h4>
          </div>
          <div class="alert bg-dark text-light">
            <p>
            <h4>Suporte 24Hrs por telefone/app e web + suporte presencial limitado + 20% Off</h4>
            </p>
          </div>
          <div class="row">
            <a href="#" type="button" class="btn btn-outline-dark col me-1" data-bs-toggle="modal" data-bs-target="#login">Contratar!</a><br>
            <h4>R$79.90</h4>
        </div>
        </div>
        <!-- Fim botão ouro -->

        <!-- Inicio botão diamante -->
        <div onmouseover="mudacorDiamante()" onmouseout="voltaOriginalDiamante()" class="alert bg-light bg-opacity-75 col" id="diamante">
          <div class=" alert bg-danger bg-opacity-100">
            <h4>Diamante</h4>
          </div>
          <div class="alert bg-dark text-light">
            <p>
            <h4>Suporte 24Hrs por telefone/app e web + suporte presencial limitado + mão de obra gratis</h4>
            </p>
          </div>
          <div class="row">
            <a href="#" type="button" class="btn btn-outline-dark col me-1" data-bs-toggle="modal" data-bs-target="#login">Contratar!</a>
            <h4>R$99.90</h4> 
        </div>
        </div>
        <!-- Fim botão ouro -->
        <span class="btn btn-secondary rounded-5 "> 
            <a href="https://www.youtube.com/channel/UCg1l0Z8YQ_Qzw9EMIMzWXjw" target="_blanck" style="text-decoration: none; color: black;"><h4>Tutorial contrato</h4></a> 
        </span>
      </div>
      
      <!-- Fim row -->
    </div>

    <!-- Fim Planos -->

    </main>



    <!-- Link arquivos Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script src="../js/mudar_cor_botoes.js"></script>

</body>

</html>