<?php

$conn = mysqli_connect("localhost", "root", "", "fstackeletro");

if (!$conn)
die ("Falha na conexão com o BD " . mysqli_connect_errno());
else
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";


$nome_cli = $_POST['name'];
$end_cli = $_POST['end'];
$tel = $_POST['phone'];
$id_produto = $_POST['id_prod'];
$nome_prod = $_POST['nome_prod'];
$val_unit = $_POST['val_unit'];
$qtde = $_POST['quantidade'];

  $sql = "INSERT INTO pedido (nome_cli, end_cli, tel_cli, id_produto, nome_prod,
  val_unit, quantidade, val_total)
  values('$nome_cli', '$end_cli', $tel, $id_produto, '$nome_prod', $val_unit,
  $qtde, ($qtde * $val_unit))"; //colocar entre aspas somente o que for string!
  
  $conn->query($sql);

  echo "<script>
  alert('Cadastro efetuado com sucesso!')
  window.location.href = 'produtos.php'
  </script>";

