<?php

  $servername=;
  $database=;
  $username=;
  $password=; 

  $conn = new mysqli_connect($servername, $username, $password, $database);

  if(!$conn)
  {
    die("Conexao falhou: " . mysqli_connect_error());
  }
  echo "Conexao funcionou!!";

  $sql = "SELECT * FROM candidato";

  mysqli_close($conn);
?>
