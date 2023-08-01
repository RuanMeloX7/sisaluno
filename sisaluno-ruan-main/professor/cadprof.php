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

 <header><h1>Cadastramento de professor</h1></header> 
 <main>

   
  <form method="GET" action="crudprof.php">
    <label for="">nome </label>
     <input type="text" name="nome">
     <label for="">cpf </label>
     <input type="text" name="cpf">
     <label for="">idade</label>
     <input type="text" name="idade"> 
     <label for="">endereco</label>
     <input type="text" name="endereco"> 
     <label for="">datanascimento</label>
     <input type="date" name="datanascimento">


     <input type="submit" name="cadastrar" value="cadastrar">
     </form>

     <a href="index.php">voltar</a>
     </main>
     <footer></footer>
</body>
</html>
