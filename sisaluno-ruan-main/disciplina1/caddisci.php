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

 <header><h1>Cadastramento de disciplina
 </h1></header> 
 <main>

   
 <form method="GET" action="cruddisci.php">

<label for="">NOME DISCIPLINA </label>
<input type="text" name="nomedisciplina" required value="" placeholder="NOME" >     
<label for="">CH</label>
<input type="text" name="ch" placeholder="CH"> 
<label for="">SEMESTRE</label>
<input type="text" name="semestre" placeholder="SEMESTRE">
<label for="">IDPROFESSOR</label>
<input type="text" name="idprofessor" placeholder="ID">



<input type="submit" name="cadastrar" value="cadastrar">

</form> 
     <a href="index.php">voltar</a>
     </main>
     <footer></footer>
</body>
</html>
