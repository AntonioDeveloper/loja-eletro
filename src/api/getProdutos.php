<?php

          $conn = mysqli_connect("localhost", "root", "", "fstackeletro");

          // if(!$conn){
          //   die("Conexão morreu" .mysqli_connect_errno());
          // } else {
          //   echo "Sucesso na conexão!!";
          // }

          $sel = "select * from produto";
          $res = mysqli_query($conn, $sel);
         
          header("Access-Control-Allow-Origin:*");
          header("Content-type: application/json");
          print_r(json_encode($res -> fetch_all(MYSQLI_ASSOC)));
          ?>