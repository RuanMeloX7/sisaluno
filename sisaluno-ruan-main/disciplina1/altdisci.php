<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="estilor.css">
</head>
<body>
  <header><h1>Alterar Cadastro</h1></header>
<main><section><?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];
   


?>

<form method="POST" action="cruddisci.php">
    
    <p> ID: <br> <input type="text" name="id" id="" value=<?php echo $id?> > </p>

     <p> Nome disciplina: <br>  <input type="text" name="nomedisciplina" id="" required value=""<?php echo $nomedisciplina?> > </p>
                                              
     <p> CH: <br> <input type="text" name="ch" id="" value= <?php echo $ch ?> > </p> 
     
     <p> SEMESTRE: <br> <input type="text"  name="semestre" id="" value=<?php echo $semestre?>> </p>
   
    <p> IDPROFESSOR: <br> <input type="text" name="idprofessor" id="" value=<?php echo $idprofessor ?> > </p>
   
    
  
      
      <input type="submit" name="update" value="Alterar">
</form>
</body>
</html></section></main>
<footer></footer>
