<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastre-se - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>

  <main class="container-fluid d-flex flex-column justify-content-center"  style="background-image: url('./imagens/porta.jpg'); background-repeat: no-repeat;
      background-size: cover; height: 100vh;">
  <div class="jumbotron col-lg-5 col-md-8 col-sm-9 mx-auto py-2 form-group" style="min-height: 700px;">
      <h3 style="text-align: center;">Cadastre-se</h3>  
      <form action="cadastro_clientes.php" method="post">
        <div class="form-group">
            <label for='name'>Nome:</label><br>
            <input type="text" style="width: 400px" id='name' name='name'/> <br><br>
            <label for='end'>Endereço:</label><br>
            <input type="text" style="width: 400px" id='end' name='end'/> <br><br>
            <label for='phone'>Telefone:</label><br>
            <input id='phone' type='number' name='phone'> <br><br>
            <label for='email''>Email:</label><br>
            <input id='email'' type='email' name='email''><br><br>
            <label for='foto'>Foto:</label><br>
            <input type="url" name="foto"><br><br>
            <label for='senha'>Digite uma senha:</label><br>
            <input type="password" name="senha"><br><br>
            <label for='conf_senha'>Confirme sua senha:</label><br>
            <input type="password" name="conf_senha"><br><br>
            <input class="btn btn-primary btn-lg" type="submit" value="Enviar" id="enviar" /><br><br>        
        </div>
      </form>          
    </div>
  </main>    


     <!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
  </body>
</html>

