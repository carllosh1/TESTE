<?php
    require_once '../conexao.php';
    if(isset ($_GET['CNPJ_convenio']) && !empty ($_GET['CNPJ_convenio'])){
        $CNPJ_convenio = addslashes($_GET['CNPJ_convenio']);

        $cmd = $con->prepare("DELETE FROM tbl_convenio WHERE CNPJ_convenio = :CNPJ_convenio");
        $cmd->bindParam(":CNPJ_convenio", $CNPJ_convenio);
        $cmd->execute();

        header("location: index.php");
    }
?>