<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if(strlen($email) > 3 && strlen($senha) > 3){
  $senha_cripto = md5($senha);

  $conn = mysqli_connect("localhost", "root", "", "fstackeletro");  

  $consulta_entrada = mysqli_query($conn, "SELECT * from clientes where email ='$email' AND senha ='$senha_cripto'");

  // $clientes = mysqli_fetch_all($consulta_entrada);

  // $_SESSION['nome'] = $clientes[0][1];
  // $_SESSION['foto'] = $clientes[0][2];
  // $_SESSION['email'] = $clientes[0][3];
  // $_SESSION['id'] = $clientes[0][4];

  $row = mysqli_fetch_assoc($consulta_entrada); 
		if(!$row) { 
			echo "
      <script>
        alert('E-mail ou senha inválidos!')
        location.href = 'http://localhost:3000/login.js'
      </script>";
		} 
		else { 
	        session_start(); 
	        $_SESSION['user']=$user; 
          header('location: http://localhost:3000/'); 
		} 
}
  else {
    echo "
      <script>
        alert('E-mail ou senha inválidos!')
        location.href = 'http://localhost:3000/login.js'
      </script>";
  }

