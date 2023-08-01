<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <header><h1>Alterar Cadastro</h1></header>
<main><section><?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   echo $nome;
   $cpf = $array_retorno['cpf'];
   $idade = $array_retorno['idade'];
   $endereco = $array_retorno['endereco'];
   $datanascimento = $array_retorno['datanascimento'];


?>

  <form method="POST" action="crudprof.php">
        <input type="text" name="nome" id="" value=<?php echo $nome?> >

        <input type="text" name="cpf" id="" value=<?php echo $cpf?> >
                                                
        <input type="text" name="idade" id="" value=<?php echo $idade ?> >
      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >

        <input type="text" name="endereco" id="" value=<?php echo $endereco?> >
                                              
        <input type="date" name="datanascimento" id="" value=<?php echo $datanascimento ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html></section></main>
<footer></footer>
