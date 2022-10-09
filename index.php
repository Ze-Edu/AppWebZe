<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- import cdn CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- import cdn icons Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- import my CSS -->
  <link rel="stylesheet" href="css/my_style.css"/>
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
            <h1 class="text-light">
              TecNoo
              <i class="bi bi-tools"></i>
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
                  <span><i class="bi bi-house-door-fill"></i></span>
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
          <a href="pages/social.php">
            <img src="img/solidario.jpg" alt="" class="d-block w-100 img-fluid mb-3 rounded">
            <button class=" btn btn-info mb-3">Saiba Mais...</button></a>
        </div>
      </div>
      <!-- Fim Social -->
    <!-- Inicio footer -->
    <footer id="contato" class="mt-3">
      <div class="card-footer text-center bg-dark rounded">
        <div class="card-body">
          <h5 class="card-title text-light pt-3">TecNoo
            <i class="bi bi-tools"></i>
          </h5>
          <address>
            <i class="text-light">Avenida Itaquera, 8266 Itaquera - São Paulo - SP - CEP 08295-000</i>
            <br>
            <span class=" text-light">
              <i class="bi-telephone-fill"></i> &nbsp; (11) 2585-9200</span>
            <br>
            <span class="text-light">
            <i class="bi bi-envelope-fill"></i>
            </span>&nbsp; <a href="mailto:contato@tecnoo.com.br?subject=contato via site&cc=marconysbatera@gmail.com">
              contato@tecnoo.com.br
            </a>
        </address>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7942870047204!2d-46.458731884693755!3d-23.5399001846936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf22458913%3A0xecdac462b58a9475!2sSenac%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1660051724396!5m2!1spt-BR!2sbr" id="mapa" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Inicio div contato -->
        <div class="contato">
          <a href="#" ><i class="bi bi-instagram text-light"></i></a>

          <a href="#" ><i class="bi bi-youtube text-danger"></i></a>

          <a href="#" ><i class="bi bi-whatsapp text-success"></i></a>
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
