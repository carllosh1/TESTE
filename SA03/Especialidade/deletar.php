<?php
require_once '../conexao.php';

if(isset($_GET['codigo_especialidade']) && !empty($_GET['codigo_especialidade'])){
    $codigo_especialidade
 = addslashes($_GET['codigo_especialidade']);
            
   $cmd = $con->prepare("DELETE FROM tbl_especialidade WHERE codigo_especialidade = :id"); 
   $cmd->bindParam(":id", $codigo_especialidade);
   $cmd->execute();
   
   header("location: index.php");

}
?>