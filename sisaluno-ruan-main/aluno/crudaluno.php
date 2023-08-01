<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header></header>
    <main><section>
    <?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $endereco = $_GET["endereco"];
        $matricula = $_GET["matricula"];
        $estatus = $_GET["estatus"];
        $datanascimento = $_GET["datanascimento"];

        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,idade,endereco,matricula,estatus,datanascimento) 
                VALUES('$nome','$idade','$endereco','$matricula','$estatus','$datanascimento')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!"; 
                echo " <a href='index.php'>voltar</a>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $endereco = $_POST["endereco"];
    $matricula = $_POST["matricula"];
    $estatus = $_POST["estatus"];
    $datanascimento = $_POST["datanascimento"];
    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, idade= :idade, endereco= :endereco, matricula= :matricula, estatus= :estatus, datanascimento= :datanascimento  WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_INT);
    $stmt->bindParam(':matricula',$matricula, PDO::PARAM_INT);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <a href='index.php'>voltar</a>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <a href='listaalunos.php'>voltar</a>";
        }

}

        
?>

    </section></main>
    <footer></footer>
    
</body>
</html>


