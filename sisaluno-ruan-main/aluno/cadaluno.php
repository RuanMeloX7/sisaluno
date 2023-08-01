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

 <header><h1>Cadastramento</h1></header> 
 <main>

   
  <form method="GET" action="crudaluno.php">
    <label for="">nome </label>
     <input type="text" name="nome">
     <label for="">idade</label>
     <input type="text" name="idade"> 
     <label for="">endereco</label>
     <input type="text" name="endereco"> 
     <label for="">matricula</label>
     <input type="text" name="matricula">
     <label for="">estatus</label>
     <input type="text" name="estatus">
     <label for="">datanascimento</label>
     <input type="date" name="datanascimento">


     <input type="submit" name="cadastrar" value="cadastrar">
     </form>

     <a href="index.php">voltar</a>
     </main>
     <footer></footer>
</body>
</html>