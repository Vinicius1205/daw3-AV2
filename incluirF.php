<?php
  header('Content-Type: application/json');

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
  

  if(isset($_POST['nomeF']) && isset($_POST['cpfF']) && isset($_POST['salaProvaF']))
  {
    $nome = $_POST['nomeF'];
    $cpf = $_POST['cpfF'];
    $sala = $_POST['salaProvaF'];
    
  }

  $sql= "INSERT INTO Fiscal(nome,cpf,sala) VALUES ('$nome','$cpf','$sala'))";
  if(mysqli_query($conn,$sql))
  {
    echo "dados inseridos na tabela!";
  }
  else
  {
    echo "error". $sql . <br> . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
