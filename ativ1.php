<?php
  echo "EXERCICIO 1";
  echo "<br>";
  $caractere=isset($_GET["caractere"])?$_GET["caractere"]:"a";

      if($caractere=="uberaba1990"){
          echo"Password correto!";
      }
      else{
          echo"Password Errado";
      }
      
      echo "<hr>";
?>