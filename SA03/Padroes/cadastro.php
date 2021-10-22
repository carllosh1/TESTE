<?php
require_once '../conexao.php';
   



    if(isset($_POST['save'])){
     
        $tempoPadrao = addslashes($_POST['tempoPadrao']);   
        $inicioPadrao = addslashes($_POST['inicioPadrao']);
        $finalPadrao = addslashes($_POST['finalPadrao']);
        $valoresCheck = addslashes($_POST['checkValores']);
        $dataCadastroPadrao = $_POST['dataCadastroPadrao'];
        
        $space = "";
        
       foreach($valoresCheck as $valoresCheckA){    
           $space .= $valoresCheckA.",";
           
        }   
       }

       $cmd=  $con->query("INSERT INTO tbl_padroes VALUES 
       ('DEFAULT','$dataCadastroPadrao','$tempoPadrao ','$inicioPadrao','$finalPadrao', '$space');");  
     
     header("location: padroes.php");
?>