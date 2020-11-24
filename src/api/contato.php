<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato - Full Stack Eletro</title>
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
        <img src="./imagens/contato.jpg" alt="Contato" class="img-fluid" />
        <div class="texto-foto"><span>Contato</span></div>
      </div>

      <!-- Formulário -->
      <div class="container-fluid py-2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Nomes</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Qual o seu nome?">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Qual o seu email?">
              </div>        
              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <input type="submit" value="Enviar" class="btn btn-primary">
            </form>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6" id="bg-contatos">
            <p style="color: #2B9410;
              font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen,
                Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
              font-weight: 600;font-size: 35px; text-align: center;">Estamos aqui para bem atender!
            </p>
            <div class="email-whats_blocos">
          <img src="imagens/letter.svg" alt="e-mail" width="40px" />
          contato@fullstackeletro.com.br
        </div>

        <div class="email-whats_blocos" style="float: right">
          <img src="imagens/whatsapp.svg" alt="whatsapp" width="40px" />
          (11) 97815-3254
        </div>
          </div>
        </div>
      </div>
      <!-- Formulário -->
      
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
    </footer>
  </body>
</html>
