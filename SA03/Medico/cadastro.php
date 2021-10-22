<?php
require_once '../conexao.php';
    

    if(isset($_POST['nomeMedico'],$_POST['ruaMedico'],$_POST['numeroRuaMedico'],$_POST['bairroMedico'],$_POST['complementoMedico'],$_POST['lograduroMedico'],$_POST['cepMedico'],$_POST['emailMedico'],$_POST['telefoneFixoMedico'],$_POST['celularMedico'],$_POST['telefoneMedico'],$_POST['crmMedico'])){

        $nomeMedico = addslashes($_POST['nomeMedico']);   
        $ruaMedico = addslashes($_POST['ruaMedico']);
        $numeroRuaMedico = addslashes($_POST['numeroRuaMedico']);
        $bairroMedico = addslashes($_POST['bairroMedico']);
        $complementoMedico = addslashes($_POST['cepMedico']);
        $lograduroMedico = addslashes($_POST['lograduroMedico']);
        $cepMedico = addslashes($_POST['cepMedico']);
        $emailMedico = addslashes($_POST['emailMedico']);
        $telefoneFixoMedico =addslashes($_POST['telefoneFixoMedico']);
        $celularMedico = addslashes($_POST['celularMedico']);
        $telefoneMedico = addslashes($_POST['telefoneMedico']);
        $crmMedico = addslashes($_POST['crmMedico']);
        $dataCadastroMedico = addslashes($_POST['dataCadastroMedico']);
        
       
  
     $cmd =  $con->query("INSERT INTO tbl_medico VALUES 
        ('$crmMedico','$nomeMedico ','$dataCadastroMedico', '$ruaMedico','$numeroRuaMedico', '$bairroMedico', '$complementoMedico', '$lograduroMedico', '$cepMedico', '$emailMedico', '$telefoneFixoMedico', '$celularMedico', '$telefoneMedico');");
    }
 
?>