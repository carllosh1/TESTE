<?php
    require_once '../conexao.php';

    if(isset($_GET['id_padroes']) && !empty($_GET['id_padroes'])){
        $id_padroes = addslashes($_GET['id_padroes']);
                
       $cmd = $con->prepare("DELETE FROM tbl_padroes WHERE id_padroes = :id"); 
       $cmd->bindParam(":id", $id_padroes);
       $cmd->execute();
       
       header("location: index.php");
    }
?>