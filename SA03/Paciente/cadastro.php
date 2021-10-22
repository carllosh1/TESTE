<?php
require_once '../conexao.php';
    

    if(isset($_POST['nomePaciente'],$_POST['ruaPaciente'],$_POST['numeroRuaPaciente'],$_POST['bairroPaciente'],$_POST['complementoPaciente'],$_POST['lograduroPaciente'],$_POST['cepPaciente'],$_POST['emailPaciente'],$_POST['telefoneFixoPaciente'],$_POST['celularPaciente'],$_POST['telefonePaciente'],$_POST['convenioPaciente'])){

        $nomePaciente = addslashes($_POST['nomePaciente']);   
        $ruaPaciente = addslashes($_POST['ruaPaciente']);
        $numeroRuaPaciente = addslashes($_POST['numeroRuaPaciente']);
        $bairroPaciente = addslashes($_POST['bairroPaciente']);
        $complementoPaciente = addslashes($_POST['cepPaciente']);
        $lograduroPaciente = addslashes($_POST['lograduroPaciente']);
        $cepPaciente = addslashes($_POST['cepPaciente']);
        $emailPaciente = addslashes($_POST['emailPaciente']);
        $telefoneFixoPaciente =addslashes($_POST['telefoneFixoPaciente']);
        $celularPaciente = addslashes($_POST['celularPaciente']);
        $telefonePaciente = addslashes($_POST['telefonePaciente']);
        $crmPaciente = addslashes($_POST['crmPaciente']);
        $dataCadastroPaciente = addslashes($_POST['dataCadastroPaciente']);
        
       
  
        $cmd=  $con->query("INSERT INTO tbl_paciente VALUES 
        ('DEFAULT','$nomePaciente ','$convenioPaciente','$dataCadastroPaciente', '$ruaPaciente','$numeroRuaPaciente', '$bairroPaciente', '$complementoPaciente', '$lograduroPaciente', '$cepPaciente', '$emailPaciente', '$telefoneFixoPaciente', '$celularPaciente', '$telefonePaciente');");
    }

    header("location: paciente.html");

?>