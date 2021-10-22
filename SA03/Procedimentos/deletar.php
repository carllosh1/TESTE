

<?php
   include 'conexao.php';
   include 'class.php';
   include 'crud.php';
   $crudProcedimento = new crudProcedimento();
    $classProcedimento = new classProcedimento();

    if(isset ($_GET['codigo_procedimento']) && !empty ($_GET['codigo_procedimento'])){
        

        $classProcedimento->setCod($_GET['codigo_procedimento']);
        
        $crudProcedimento->excluir($classProcedimento);

        header("location: index.php");
        
    }
?>