<?php
   include 'conexao.php';
   include 'class.php';
   include 'crud.php';
   $crudProcedimento = new crudProcedimento();
    $classProcedimento = new classProcedimento();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <link rel="stylesheet" href="../style.css">
    <title>Clínica XYZ</title>
    
</head>
<body>
   
    <nav>
        <div class="nav-wrapper deep-orange accent-1">
            <a href="../index.html" class="brand-logo">Clínica XYZ</a>
            <a href="../index.html" data-activates="menu-mobile" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li class="navbar-item ">
                        <a href="../index.html">Home</a>
                </li>
                    <li class="navbar-item">
                        <a href="../Paciente/paciente.html"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Medico/medico.html"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Convenio/Convenio.html"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.html"> Especialidade</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Padroes/padroes.html"> Padrões</a>
                    </li>
            </ul>
            <ul class="side-nav" id="menu-mobile">
                    <li class="navbar-item ">
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Paciente/paciente.html"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Medico/medico.html"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Convenio/convenio.html"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.html"> Especialidade</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Padroes/padroes.html"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>

    <fieldset>
 

        <?php

            require_once '../conexao.php';

            $cmd = $con->query("SELECT * FROM tbl_procedimento ORDER BY codigo_procedimento");
            $res = $cmd->fetchALL(PDO::FETCH_ASSOC);

            foreach($res as $valor){
                echo"<table>";
                echo"<tr>";
                    echo "  <th>Cod</th>";
                    echo "  <th>Data Cadastro</th>";
                    echo "  <th>Nome Procedimento</th>";
                    echo "  <th>Valor Procedimento</th>";
                    echo "  <th>Gênero Procedimento</th>";
                    echo "  <th>Exceção Procedimento</th>";
                   
                echo"</tr>";
                echo "<tr>";
                
                    echo "<td>".$valor['codigo_procedimento']."</td>";
                    echo "<td>".$valor['dataCadastro_procedimento']."</td>";
                    echo "<td>".$valor['nome_procedimento']."</td>";
                    echo "<td>".$valor['valor_procedimento']."</td>";
                    echo "<td>".$valor['genero_procedimento']."</td>";
                    echo "<td>".$valor['exececao_procedimento']."</td>";
                 
               
                    echo "<td><a href='deletar.php?codigo_procedimento=".$valor['codigo_procedimento']."' class='white-text text-darken-2 waves-effect waves-light btn-small red darken-3'>Excluir
                    <i class='material-icons right'>delete_sweep</i></a> </td>";
               
                    echo "<td><a href='atualizar.php?codigo_procedimento=".$valor['codigo_procedimento']."' class='white-text text-darken-2 waves-effect waves-light  green darken-1 btn-small'>Atualizar
                    <i class='material-icons right'>edit</i> </a> </td>";
                
                echo "</tr>";
                

                echo"</table>";
            }
        ?>


    </fieldset>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $(function(){
        $(".button-collapse").sideNav();
        });
    </script>
</body>
</html>