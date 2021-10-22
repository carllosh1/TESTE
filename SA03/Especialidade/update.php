<?php
    require_once '../conexao.php';

    if(isset($_GET['codigo_especialidade'], $_POST['save'])){
        $codigo_especialidade = addslashes($_GET['codigo_especialidade']);
        $dataCadastro_especialidade = addslashes($_POST['dataCadastroEspecialidade']);
        $nome_especialidade = addslashes($_POST['nomeEspecialidade']);
        
           
     
     
    

    $cmd = $con->prepare("UPDATE tbl_especialidade SET dataCadastro_especialidade=:d, nome_especialidade = :n WHERE codigo_especialidade = :id");


    $cmd->bindParam(":d", $dataCadastro_especialidade);
    $cmd->bindParam(":n", $nome_especialidade);
  
    $cmd->bindParam(":id", $codigo_especialidade);
    $cmd->execute();
}   
    header("location: index.php");
   
    ?>