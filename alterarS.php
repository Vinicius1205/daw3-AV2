<?php
  header('Content-Type: application/json');

  $servername="localhost";
  $database=;
  $username="username";
  $password="password"; 

  $conn = new mysqli_connect($servername, $username, $password, $database);

  if(!$conn)
  {
    die("Conexao falhou: " . mysqli_connect_error());
  }
  echo "Conexao funcionou!!";


  if(isset($_POST['nomeC']) && isset($_POST['idC']) && isset($_POST['salaProvaN']))
  {
    $nome = $_POST['nomeC'];//se pegar id nao precisa de nome. alterar em casa
    $id = $_POST['idC'];
    $salaNova = $_POST['salaProvaN'];

  }

  $sql= "UPTADE candidatos SET sala='$salaNova' WHERE id='$idC'";
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
