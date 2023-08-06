<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tabela.css">
    <link rel="stylesheet" href="estilor.css">
</head>
<body>
<header><h1>Lista</h1></header>
<main><section><?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM professor');
  $retorno->execute();

?>       
        <table>
     <th>ID</th>
                    <th>NOME  DISCIPLINA </th>
                    <th>CH</th>
                    <th>SEMESTRE</th>
                    <th>IDPROFESSOR</th>
                    
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nomedisciplina']?>  </td> 
                            <td> <?php echo $value['ch']?> </td>
                            <td> <?php echo $value['semestre']?> </td> 
                            <td> <?php echo $value['idprofessor']?> </td> 
                            




                            <td>
                               <form method="POST" action="altadisci.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 

                             
                             



                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
        </body>
</html>
<?php         
   echo "<a href='index.php'>voltar</a>";
?>
    
</body>
</html></section></main>
<footer></footer>

