<?php
include_once('conexao.php');
$lista_sql = "SELECT * FROM convidados ORDER BY idconvidado DESC";
  $resultado = $conn->query($lista_sql);

?>