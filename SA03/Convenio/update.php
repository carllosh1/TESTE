<?php
  
    require_once '../conexao.php';

    if(isset($_GET['CNPJ_convenio'], $_POST['save'])){
        $CNPJ_convenio = addslashes($_GET['CNPJ_convenio']);
        $dataCadastroConvenio = addslashes($_POST['dataCadastroConvenio']);
        $nomeFantasia_convenio = addslashes($_POST['nomeFantasiaConvenio']);
        $nomeEmpresa_Convenio = addslashes($_POST['nomeEmpresaConvenio']);
        $email_convenio = addslashes($_POST['emailConvenio']);
        $homePage_convenio = addslashes($_POST['homePageConvenio']);
        $nomeContato_convenio = addslashes($_POST['nomeContatoConvenio']);
        $telefone1_convenio = addslashes($_POST['telefone1Convenio']);
        $telefone2_convenio = addslashes($_POST['telefone2Convenio']);
      
    } 
 

     $cmd = $con->prepare("UPDATE tbl_convenio SET nomeFantasia_convenio=:d, dataCadastro_convenio = :t, nomeEmpresa_convenio = :i, email_convenio= :f, nomeContato_convenio = :g, homePage_convenio = :h, telefone2_covenio = :i, telefone1_covenio = :j WHERE CNPJ_convenio = :id");

     $cmd->bindParam(":t", $dataCadastroConvenio);
    $cmd->bindParam(":d", $nomeFantasia_convenio);
    $cmd->bindParam(":i", $nomeEmpresa_Convenio);
    $cmd->bindParam(":f", $email_convenio);
    $cmd->bindParam(":g", $nomeContato_convenio);
    $cmd->bindParam(":h", $homePage_convenio);
    $cmd->bindParam(":i", $telefone1_convenio);
    $cmd->bindParam(":j", $telefone2_convenio);
  
    $cmd->bindParam(":id", $CNPJ_convenio);
    $cmd->execute();
    header("location: index.php");
   
    ?>