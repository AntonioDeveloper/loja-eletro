<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>
    <!-- Início do menu -->

<div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
      <a href="index.php">
        <img src="./imagens/logo.gif" alt="logo da loja" width="100px" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="produtos.php"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="produtos.php"> Produtos </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="lojas.php.php"> Nossas Lojas </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contato.php"> Contato </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cadastro.php"> Cadastro </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="consultas_gerais.php"> Consultas Gerais </a>
        </li>
      </ul>
      </div>
    </nav>
    <!-- Fim do menu -->

    <main>
      <!-- Destaque -->
      <section class="container-fluid px-0">
       <img src="./imagens/eletronicos.jpg" class="img-fluid" alt="Capa">
        </p>
      </section>
      
      <!-- Mais Vistos -->
      <section class="properties new-arrival fix" id="#queridos">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
              <article class="section-tittle mb-60 text-center wow fadeInUp">
                <!-- Colocar as outras classes depois -->
                <h2> Mais Queridos </h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                  Perferendis minus possimus illum alias facilis est ipsam 
                  consequuntur blanditiis quibusdam. Animi sed, quod at illum 
                  error alias fuga dolorem perspiciatis vitae.</p>
              </article>
              
              <!-- Carrousel -->
              <div class="container-fluid carrossel">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100 item" src="./imagens/lava-loucas-brast-inox_300px.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 item" src="./imagens/lavadora-de-roupas_300px.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 item" src="./imagens/geladeira_300px.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 item" src="./imagens/microondas_300px.jpg" alt="Third slide">
                    </div>
                  </div>
                </div>
              </div>        
            </section>
            
            
            <!-- <section class="jumbotron" id="novidade">
              <h1 class="display-4">Hello, world!</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </p>
            </section>   -->

            <!-- Veja Também -->
            <!-- <section class="properties new-arrival fix" id="#tambem">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xl-7 col-lg-8 col-md-10">
                    <article class="section-tittle mb-60 text-center wow fadeInUp"> -->
                      <!-- Colocar as outras classes depois -->
                      <!-- <h2> Veja Também </h2>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Perferendis minus possimus illum alias facilis est ipsam 
                        consequuntur blanditiis quibusdam. Animi sed, quod at illum 
                        error alias fuga dolorem perspiciatis vitae.</p>
                    </article> -->
                    
                    <!-- Carrousel -->
                    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100 img-fluid " src="./imagens/lava-loucas-brast-inox.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100 img-fluid" src="./imagens/lava-loucas-brast-inox.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100 img-fluid" src="./imagens/lava-loucas-brast-inox.jpg" alt="Third slide">
                        </div>
                      </div>
                    </div>  
                    <div class="container mt-5 mb-5 ml-5">
                      <button type="button" class="btn btn-outline-primary">MAIS AQUI</button>
                    </div>    
                  </section> -->

                  <!--Garantias  -->
                  <section class="container-fluid bg-nav" id="#garantias">
                    <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-6 mt-2">
                        <div>
                          <img src="./imagens/delivery-truck.svg" width="80px">
                        </div>
                        <div>
                          <h4>Entrega rápida</h4>
                          <p class="textos-garantias">
                          Lorem ipsum dolor sit amet.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 mt-2">
                        <div>
                          <img src="./imagens/credit-card.svg" width="80px">
                        </div>
                        <div>
                        <h4>Aceitamos todos os cartões</h4>
                          <p class="textos-garantias">
                          Lorem ipsum dolor sit amet.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 mt-2">
                        <div>
                          <img src="./imagens/24-hours-support.svg" width="80px">
                        </div>
                          <div>
                          <h4>Aceitamos todos os cartões</h4>
                            <p class="textos-garantias">
                            Lorem ipsum dolor sit amet.
                            </p>
                          </div>
                        </div>
                      </div>
                  </section>
                
                <footer class="rodape">
                  <section class="container-fluid bg-footer text-white">
                        <div class="row">
                          <div class="col-lg-4 col-md-6 col-sm-6 px-0 d-flex justify-content-start mb-3">
                          <a href="index.php">
                            <img src="./imagens/logo.gif" alt="logo da loja" width="100px" />
                          </a>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 mb-3 texto-rodape">
                                <div>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                  Id, dolor! Repellat, error in nisi fugiat minima quidem 
                                  ratione perspiciatis iste, libero sapiente saepe atque quo 
                                  cum numquam, sit incidunt quibusdam?
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 mb-3 texto-rodape">
                                    <div>
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                      Id, dolor! Repellat, error in nisi fugiat minima quidem 
                                      ratione perspiciatis iste, libero sapiente saepe atque quo 
                                      cum numquam, sit incidunt quibusdam?
                                    </div>
                                </div>
                            </div>
                      </section>
      <p>&copy 2020 Recode Pro.</p>
    </footer>
  </div>
<!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
