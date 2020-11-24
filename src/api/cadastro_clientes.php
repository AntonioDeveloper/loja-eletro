<?php

$conn = mysqli_connect("localhost", "root", "", "fstackeletro");

if (!$conn)
die ("Falha na conexão com o BD " . mysqli_connect_errno());
else
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";


$nome_cli = $_POST['name'];
$end = $_POST['end'];
$tel = $_POST['phone'];
$email = $_POST['email'];
$foto = $_POST['foto'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

if(strlen ($nome_cli) > 3 && strlen($email) > 3 && $senha === $conf_senha){
  $senha_cripto = md5($senha);

  $sql = "INSERT INTO clientes (nome_cli, end_cli, tel_cli, email, foto, senha)
  values('$nome_cli', '$end', '$tel', '$email', '$foto', '$senha_cripto')";
  
  $conn->query($sql);
   
  #echo "$sql";

  echo "<script>
  alert('Cadastro efetuado com sucesso!')
  window.location.href = 'login.php'
  </script>";

} 
else if($senha != $conf_senha){
  echo "<script> 
    alert('As senhas devem ser iguais. Tente novamente.')
    window.location.href= 'cadastro_clientes.php'
  <script>";

}
else if(strlen($nome_cli) <= 3){
  echo "<script>
    alert('O nome deve conter mais do que 3 caracteres.')
    window.location.href = 'cadastro_clientes.php'
  </script>";
}
else if(strlen($senha) <= 3){
  echo "<script>
    alert('A senha deve ter mais do que 3 caracteres.')
    window.location.href = 'cadastro_clientes.php'
  </script>";
}

