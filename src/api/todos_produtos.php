<?php

$conn = mysqli_connect("localhost", "root", "", "fstackeletro");

// if (!$conn)
// die ("Falha na conexão com o BD " . mysqli_connect_errno());
// else
// echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";

$sel = "select * from produto";
$res = mysqli_query($conn, $sel);

echo "<ul>";
while($row = mysqli_fetch_assoc($res))
{
      echo "<li>";
      printf("<b>%s</b>, %s, %s, %s", $row["id_prod"], $row["descricao"], $row["preco"],
      $row["nome_imagem"]);
      echo "</li>";
      echo "<hr>";
};
echo "</ul>";

?>