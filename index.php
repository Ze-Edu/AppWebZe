<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/my_style.css" />
    <title>Tecnoo</title>
  </head>
  <body>
    <!-- Inicio backgv -->
    <video class="backgv" poster="poster.jpg" autoplay playsinline muted loop>
      <source src="video/matrix.mp4" type="video/mp4">
    </video>
    <!-- Fim backgv -->

    <!-- Inicio do header -->
    <header>
      <!-- Inicio do navbar -->
      <nav class="navbar fixed-top navbar-expand-lg bg-dark">
        <!-- Inicio container -->
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <h1 class="text-light bi bi-tools">
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
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Inicio menu -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active text-light"
                  aria-current="page"
                  href="#"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 23">
                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                </svg>
                  Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#contato">Contato</a>
              </li>
              <!-- Inicio do dropdown -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-light"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Serviços
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#planos">Planos</a></li>
                  <li><a class="dropdown-item" href="#social">Social</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="pages/blog.php">Blog</a></li>
                </ul>
              </li>
              <!-- Fim do dropdown -->
              <li class="nav-item">
                <a href="pages/login.php" class="nav-link text-light">Login</a>
              </li>
            </ul>
            <!-- Inicio do form buscar -->
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Buscar"
                aria-label="Buscar"
              />
              <button class="btn btn-outline-success" type="submit">
                Buscar
              </button>
            </form>
            <!-- Fim do Form buscar -->
          </div>
          <!-- Final do menu -->
        </div>
        <!-- Final do container -->
      </nav>
      <!-- Final do navbar -->
    </header>
    <!-- Fim do header -->

    <!-- Inicio do main -->
    <main class="container">
      <!-- Inicio do carousel -->
      <div id="banners" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#banners"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#banners"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#banners"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner rounded">
          <div class="carousel-item active">
            <img
              src="img/teclado.jpg"
              class="d-block w-100 img-fluid"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="img/globo.jpg"
              class="d-block w-100 img-fluid"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img src="img/security.jpg" class="d-block w-100 img-fluid" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#banners"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#banners"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Fim do carousel -->
      <!-- Inicio planos -->
      <div class="container text-center mt-3 p-2">
        <!-- Inicio row -->
        <div class="row"  id="planos">
          <!-- Inicio botão prata -->
          <div onmouseover="mudacorPrata()" onmouseout="voltaOriginalPrata()" class="alert bg-light bg-opacity-75 col" id="prata">
            <div class="alert bg-secondary bg-opacity-75 "><h4>Prata</h4></div>
            <div class="alert bg-dark text-light">
              <p><h5>Suporte 24Hrs por telefone/app e web + suporte presencial avulso</h5></p>
            </div>
            <div class="">
              <a href=""><button type="button" class="btn btn-info">Saiba Mais...</button></a>              
            </div>
          </div>          
          <!-- Fim botão prata -->

          <!-- Inicio botão ouro -->
          <div onmouseover="mudacorOuro()" onmouseout="voltaOriginalOuro()" class="alert bg-light bg-opacity-75 mx-2 col" id="ouro">
            <div class="alert bg-warning bg-opacity-100"><h4>Ouro</h4></div>
            <div class="alert bg-dark text-light">
              <p><h5>Suporte 24Hrs por telefone/app e web + suporte presencial limitado a 3 visitas</h5></p>
            </div>
            <div class="">
              <a href=""><button type="button" class="btn btn-info">Saiba Mais...</button></a>              
            </div>
          </div>
          <!-- Fim botão ouro -->

          <!-- Inicio botão diamante -->
          <div onmouseover="mudacorDiamante()" onmouseout="voltaOriginalDiamante()" class="alert bg-light bg-opacity-75 col" id="diamante">
            <div class=" alert bg-danger bg-opacity-100"><h4>Diamante</h4></div>
            <div class="alert bg-dark text-light">
              <p><h5>Suporte 24Hrs por telefone/app e web + suporte presencial limitado a 6 visitas</h5></p>
            </div>            
            <div class="">
              <a href=""><button type="button" class="btn btn-info">Saiba Mais...</button></a>              
            </div>
          </div>
          <!-- Fim botão ouro -->
        </div>
        <!-- Fim row -->
      </div>
      <!-- Fim Planos -->
      <!-- Inicio Social -->
      <div id="social" class="container bg-secondary rounded">        
        <div class=" container">
          <h1>Hardware Solidário</h1>
          <a href="pages/social.html">
            <img src="img/solidario.jpg" alt="" class="d-block w-100 img-fluid mb-3 rounded">
            <button class="btn btn-info mb-3">Saiba Mais...</button></a>
        </div>
      </div>
      <!-- Fim Social -->
    <!-- Inicio footer -->
    <footer id="contato" class="mt-3">
      <div class="card-footer text-center bg-dark rounded">
        <div class="card-body">
          <h5 class="card-title text-light bi bi-tools pt-3">TecNoo
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                class="bi bi-tools"
                viewBox="0 0 30 16"
              >
                <path
                  d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"
                />
              </svg>
          </h5>
          <address>
            <i class="text-light">Avenida Itaquera, 8266 Itaquera - São Paulo - SP - CEP 08295-000</i>
            <br>
            <span class="bi bi-telephone-fill text-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg> &nbsp; (11) 2585-9200</span>
            <br>
            <span class="bi bi-envelope-fill text-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
              </svg>
            </span>&nbsp; <a href="mailto:contato@tecnoo.com.br?subject=contato via site&cc=marconysbatera@gmail.com">
              contato@tecnoo.com.br
            </a>
        </address>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7942870047204!2d-46.458731884693755!3d-23.5399001846936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf22458913%3A0xecdac462b58a9475!2sSenac%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1660051724396!5m2!1spt-BR!2sbr" id="mapa" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Inicio div contato -->
        <div class="contato">
          <a href="#" class="bi bi-instagram text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg></a>

          <a href="#" class="bi bi-youtube text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
          </svg></a>

          <a href="#" class="bi bi-whatsapp text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
          </svg></a>
        </div>
        <!-- Final div contato -->
        </div>
        <div class="card-footer text-muted">
          &copy; Copyright Desenvolvido por Tecnoo Ltda - 2022.
        </div>
      </div>
    </footer>
    <!-- Fim footer -->
  </main>
  <!-- Fim do main -->

    <!-- Link arquivos Bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>

    <!-- Script para função mudar_cor_botoes.js javascript -->
    <script src="js/mudar_cor_botoes.js"></script>
  </body>
</html>
