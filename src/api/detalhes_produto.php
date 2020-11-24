<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produto X - Full Stack Eletro</title>
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
            <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
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

    <!-- Início Produto -->
    <section class="container">
          <div class="row" style="text-align: center;">
            <div class="col-lg-6 col-md-6 col-sm-6 mt-4 mb-4">
            <!-- Slider do produto -->
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./imagens/geladeira_300px.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./imagens/lava-loucas_300px.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./imagens/microondas_300px.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div> 
            </div>

            <!-- Descrição do produto e Botão Comprar -->
            
            <div class="col-lg-6 col-md-6 col-sm-6 mt-4 mb-4">
               <h3>Geladeira Brastemp</h3>
               <h2>R$ 5000,00</h2>
                <br /> 
                <ul style="list-style-type: none;">
                  <li>
                    <a href="#" class="active"> 
                      <span>Categoria</span> : Eletroeletrônicos
                    </a>
                  </li>
                  <li>
                  <a href="#"> 
                      <span>Disponibilidade</span> : Em estoque
                    </a>
                  </li>
                </ul>    
                <hr>       
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Reprehenderit accusamus molestiae amet magni rerum. Qui ipsam 
                vero, ducimus autem quidem veritatis id dolorem temporibus, 
                architecto cupiditate animi eius nisi dolores?
                </p>
                <br>
                <form>
                  <div class="form-group">
                    <!-- <label for="exampleFormControlSelect1">Quantidade</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select> -->
                  </div>
                  <button type="button" class="btn btn-success" 
                    data-toggle="modal" data-target="#exampleModal">
                    Comprar
                  </button>                  
                </form>
            </div>
        </div>
      </section>
    <!-- Fim Produto -->

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body px-2">
        <form id='frm1' action="cadastro_pedidos.php" method="post" class="px-5">
          <label for='name'>Nome:</label><br>
          <input type="text" style="width: 400px" id='name' name='name'/> <br><br>
          <label for='end'>Endereço:</label><br>
          <input type="text" style="width: 400px" id='end' name='end'/> <br><br>
          <label for='phone'>Telefone:</label><br>
          <input id='phone' type='number' name='phone'> <br><br>
        <!--  <label for='email'>Email:</label>
          <input id='email' type='text' name='email'><br><br>
          -->
          <label for='id_prod'>id Prod:</label><br>
          <input id='id_prod' type='number' name='id_prod'><br><br>
          <label for='nome_prod'>Nome Prod:</label><br>
          <input type='text' name='nome_prod'><br><br>
          <label for='val_unit'>Valor Unitário:</label><br>
          <input type='number' name='val_unit'><br><br>
          <label for='quantidade'>Quantidade:</label><br>
          <input type='number' name='quantidade'><br><br>
          <input type="submit" class="btn btn-primary" value="Enviar" id="enviar" /><br><br>        
        </form>
      </div>      
    </div>
  </div>
</div>

    <!-- Descrição do Produto -->
    <div class="container-fluid">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <p>
            Raw denim you probably haven't heard of them jean shorts Austin. 
            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache 
            cliche tempor, williamsburg carles vegan helvetica. 
            Reprehenderit butcher retro keffiyeh dreamcatcher synth. 
            Cosby sweater eu banh mi, qui irure terry richardson ex squid. 
            Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan 
            american apparel, butcher voluptate nisi qui.
          </p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <p>
              Raw2 denim you probably haven't heard of them jean shorts Austin. 
              Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache 
              cliche tempor, williamsburg carles vegan helvetica. 
              Reprehenderit butcher retro keffiyeh dreamcatcher synth. 
              Cosby sweater eu banh mi, qui irure terry richardson ex squid. 
              Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan 
              american apparel, butcher voluptate nisi qui.
            </p>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <p>
            Raw3 denim you probably haven't heard of them jean shorts Austin. 
            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache 
            cliche tempor, williamsburg carles vegan helvetica. 
            Reprehenderit butcher retro keffiyeh dreamcatcher synth. 
            Cosby sweater eu banh mi, qui irure terry richardson ex squid. 
            Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan 
            american apparel, butcher voluptate nisi qui.
          </p>
        </div>
      </div>
    </div>
    
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
