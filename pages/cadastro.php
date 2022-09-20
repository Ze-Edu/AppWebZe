<?php 

session_start();
//Inclui conexão com o banco de dados
include('../connection/conn.php');
?>

<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/my_style.css" />
    <title>Cadastre-se</title>
  </head>
  <body>
    <!-- Inicio backgv -->
    <video class="backgv" poster="poster.jpg" autoplay playsinline muted>
      <source src="../video/circuit.mp4" type="video/mp4">
    </video>
    <!-- Fim backgv -->

    <main class="container">
      <!-- Inicio div voltar -->
      <div class="voltar">
        <a href="../index.php">
          <h1 class="bi bi-arrow-left-square-f: text-light btn pt-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="50"
              height="50"
              fill="currentColor"
              class="bi bi-arrow-left-square-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"
              />
            </svg>
            Voltar
          </h1>
        </a>
      </div>
      <!-- Fim div voltar -->
      <!-- Inicio cadastro -->
      <div class="row d-flex justify-content-center pt-1">
        <div
          class="alert bg-secondary col-sm-6 col-md-4 d-flex justify-content-center">
          <div class="cadastro">
            <h1 class="text-light text-center bi bi-tools">
              TecNoo
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                class="bi bi-tools"
                viewBox="0 0 16 16"
              >
                <path
                  d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"
                />
              </svg>
            </h1>

            <!-- Inicio form cadastro -->
            <form
              action="../php/cadastro_processa.php"
              method="post"
              name="form_cadastro"
              id="form_cadastro"
              enctype="multipart/form-data"
              class="form-control bg-secondary"
            >           
            <!-- Inicio radio pessoa física-->
            <div class="form-check form-check-inline">
              <label for="pf" class="form-check-label">                
              <input class="form-check-input" onclick="esconderCampos()" type="radio" name="pessoa" id="pf" value="Pessoa Física" checked>
              <strong>Pessoa Física</strong>
              </label>
            </div>
              <!-- Fim radio pessoa física-->
              <!-- Inicio radio pessoa jurídica-->
            <div class="form-check form-check-inline">
              <label for="pf" class="form-check-label">
                <input class="form-check-input" onclick="mostrarCampos()" type="radio" name="pessoa" id="pj" value="Pessoa Jurídica">
                <strong>Pessoa Jurídica</strong>
              </label>
            </div>             
            <!-- Fim radio pessoa jurídica-->
              <!-- Inicio input nome -->
              <div class="mb-1 row d-flex justify-content-center">
                <label for="nome"><strong>Nome:</strong></label>
                <div class="col-sm-12">
                  <input
                    type="text"
                    class="form-control"
                    name="nome"
                    id="nome"
                    placeholder="Nome e Sobrenome"
                    required
                  />
                </div>
              </div>
              <!-- Fim input nome -->
              <!-- Inicio input cpf -->
              <div class="mb-1 row d-flex justify-content-center">
                <label for="cpf"><strong>CPF:</strong></label>
                <div class="col-sm-12">
                  <input
                    type="text"
                    class="form-control"
                    name="cpf"
                    id="cpf"
                    maxlength="11"
                    placeholder="CPF sem prontos e traços"
                    required
                  />
                </div>
              </div>
              <!-- Fim input cpf -->
              <!-- Inicio div oculta -->
              <div id="oculta" class="esconder">
              <!-- Inicio input cnpj -->
              <div class="mb-1 row d-flex justify-content-center esconder">
                <label for="cnpj"><strong>CNPJ:</strong></label>
                <div class="col-sm-12">
                  <input
                    type="text"
                    class="form-control"
                    name="cnpj"
                    id="cnpj"
                    maxlength="14"
                    placeholder="CNPJ sem prontos e traços"
                  />
                </div>
              </div>
              <!-- Fim input cnpj -->
              <!-- Inicio input razão social -->              
                <div class="mb-1 row d-flex justify-content-center">
                  <label for="rsocial"><strong>RAZÃO SOCIAL:</strong></label>
                  <div class="col-sm-12">
                    <input
                      type="text"
                      class="form-control"
                      name="rsocial"
                      id="rsocial"
                      placeholder="exemplo Ltda"
                    />
                  </div>
                </div>              
              <!-- Fim input razão social  -->
            </div>
            <!-- Fim div oculta -->
              <!-- Inicio input email -->
              <div class="mb-1 row d-flex justify-content-center">
                <label for="telefone"><strong>TELEFONE:</strong></label>
                <div class="col-sm-12">
                  <input
                    type="text"
                    class="form-control"
                    name="telefone"
                    id="telefone"
                    maxlength="14"
                    placeholder="99 999999999"
                    required
                  />
                </div>
              </div>
              <!-- Fim input email -->
              <!-- Inicio input email -->
              <div class="mb-1 row d-flex justify-content-center">
                <label for="email"><strong>Email</strong></label>
                <div class="col-sm-12">
                  <input
                    type="text"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="exemplo@email.com.br"
                    required
                  />
                </div>
              </div>
              <!-- Fim input email -->
              <!-- Inicio input senha -->
              <div class="mb-3 row d-flex justify-content-center">
                <label class="" for="senha"><strong>Senha</strong></label>
                <div class="col-sm-12">
                  <input
                    type="password"
                    class="form-control"
                    name="senha"
                    id="senha"
                    maxlength="16"
                    required
                  />
                </div>
              </div>
              <!-- Fim input senha -->
              <!-- Inicio botão entrar -->
              <div class="d-flex justify-content-center">
                <button
                  type="submit"
                  class="btn btn-info col-sm-6 d-flex justify-content-center"
                  name="cadastrar"
                  id="cadastrar"
                >
                  Cadastrar
                </button>
              </div>
              <!-- Fim botão cadastrar -->
            </form>
            <!-- Fim form cadastro -->
          </div>
        </div>
      </div>
      <!-- Inicio cadastro -->
    </main>

    <!-- Link arquivos Bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>

    <!-- Script para função mostar_esconder javascript -->
    <script src="../js/mostrar_esconder.js"></script>
    
  </body>
</html>
