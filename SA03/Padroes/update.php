<?php
    require_once '../conexao.php';

    if(isset($_GET['id_padroes'], $_POST['save'])){
        $id_padroes = addslashes($_GET['id_padroes']);
        $tempo_padrao = addslashes($_POST['tempoPadrao']);
        $dataCadastro_padrao = addslashes($_POST['dataCadastroPadrao']);
        $inicio_padroes = addslashes($_POST['inicioPadrao']);
        $fim_padroes = addslashes($_POST['finalPadrao']);
        $diasFuncionamento_padroes = $_POST['checkValores'];
        $space = "";
        
       foreach($diasFuncionamento_padroes as $diasFuncionamento_padroesA){    
           $space .= $diasFuncionamento_padroesA.",";
           
        }   
     }
    
  

    $cmd = $con->prepare("UPDATE tbl_padroes SET dataCadastro_padrao=:d, tempo_padrao = :t, inicio_padroes = :i, fim_padroes= :f, diasFuncionamento_padroes = :g WHERE id_padroes = :id");

    $cmd->bindParam(":t", $tempo_padrao);
    $cmd->bindParam(":d", $dataCadastro_padrao);
    $cmd->bindParam(":i", $inicio_padroes);
    $cmd->bindParam(":f", $fim_padroes);
    $cmd->bindParam(":g", $space);
  
    $cmd->bindParam(":id", $id_padroes);
    $cmd->execute();

    header("location: index.php");
   
    ?>

