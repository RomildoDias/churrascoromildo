<?php include_once"conexao.php";?>
<?php
  $nome = $_POST['nome'];
  $acompanhantes = $_POST['acompanhante'];
  $itens = $_POST['lista'];
  
  $sql = "INSERT INTO convidados(idconvidado,nome, acompanhate, item)VALUES(default, '$nome', '$acompanhantes', '$itens')";

  if (mysqli_query($conn, $sql)){
      header("location:index.php");
  }else{
      echo "Deu erro!!!". $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

  
  
?>