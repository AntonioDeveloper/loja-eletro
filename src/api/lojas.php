<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nossas lojas - Full Stack Eletro</title>
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
        <li class="nav-item">
            <a class="nav-link" href="produtos.php"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="produtos.php"> Produtos </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="lojas.php"> Nossas Lojas </a>
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

      <div class="container-fluid px-0">
        <img src="./imagens/open.jpg" alt="Contato" class="img-fluid" />      
      </div> 

    <!-- Início Endereços -->
    <header>
      <h2 style="text-align:center;">Nossas lojas</h2>
    </header>
    <hr />

    <section class="container">
          <div class="row" style="text-align: center;">
            <div class="col-lg-4 col-md-4 col-sm-6 mt-4 mb-4">
                <img src="./imagens/rj_300px.jpg" alt="Rio de Janeiro" width="120px" onmouseover='destaque(this)' onmouseout="tirarDestaque(this)" onmouseout="tirarDestaque(this)"/>
                <br />
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000 <br>
                10&ordm; andar <br>
                Centro <br>
                (21) 3333-3333
                </p>
              </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mt-4 mb-4">
                <img src="./imagens/rj_300px.jpg" alt="Rio de Janeiro" width="120px" onmouseover='destaque(this)' onmouseout="tirarDestaque(this)" onmouseout="tirarDestaque(this)"/>
                <br />
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000 <br>
                10&ordm; andar <br>
                Centro <br>
                (21) 3333-3333
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mt-4 mb-4">
                <img src="./imagens/rj_300px.jpg" alt="Rio de Janeiro" width="120px" onmouseover='destaque(this)' onmouseout="tirarDestaque(this)" onmouseout="tirarDestaque(this)"/>
                <br />
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000 <br>
                10&ordm; andar <br>
                Centro <br>
                (21) 3333-3333
                </p>
            </div>
        </div>
      </section>
    <!-- Fim Endereços -->

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
