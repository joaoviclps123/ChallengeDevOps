<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $nome = $_POST['nome'];
  $quantidade = $_POST['quantidade'];
  $categoria = $_POST['categoria'];
  $dt_vencimento = $_POST['dt_vencimento'];
  $corredor = $_POST['corredor'];
  $preco = $_POST['preco'];
  $query = "INSERT INTO estoque(nome, quantidade, categoria, dt_vencimento, corredor, preco) VALUES ('$nome', '$quantidade', '$categoria', '$dt_vencimento', '$corredor', '$preco')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
