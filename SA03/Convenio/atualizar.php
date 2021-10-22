<?php
    require_once '../conexao.php';
    
    if(isset($_GET['CNPJ_convenio']) && !empty($_GET['CNPJ_convenio'])){
        $CNPJ_convenio = addslashes($_GET['CNPJ_convenio']);

        $cmd = $con->query("SELECT * FROM tbl_convenio WHERE CNPJ_convenio = '$CNPJ_convenio'");
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
    }       
        
?>
<!DOCTYPE html>
<html lang="en">
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
                    <li class="navbar-item ">
                        <a href="../Medico/medico.html"> Médico</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="Convenio.html"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.html"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item ">
                        <a href="../Padroes/padroes.html"> Padrões</a>
                    </li>
            </ul>
            <ul class="side-nav" id="menu-mobile">
                    <li class="navbar-item active">
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Paciente/paciente.html"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Medico/medico.html"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a href="Convenio.html"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.html"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Padroes/padroes.html"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>


       
        <form action="<?php echo 'update.php?CNPJ_convenio='.$CNPJ_convenio;?>" method="post">
        

            <fieldset class="margin-border">
                
            
            <h4 class="title">Atualizar Convenio</h4>
            <hr>
            <table class="flex">  
            <tr>
                <td>
                    <label  for="dataCadastroConvenio">Data: </label>
                    
                    <input type="date"  name="dataCadastroConvenio" id="dataCadastroConvenio" placeholder="dd/mm/aaaa"value="<?php if(isset($res)){echo $res['dataCadastro_convenio'];} ?>">
                </td>  
                  
            </tr>
        </table>  
        <table>  
            <tr>
                <td>    
                    <label for="nomeFantasiaConvenio">Nome Fantasia: </label>
                    <input type="text" name="nomeFantasiaConvenio" id="nomeFantasiaConvenio" value="<?php if(isset($res)){echo $res['nomeFantasia_convenio'];} ?>">
                </td>
                <td>  
                    <label for="CNPJConvenio">CNPJ: </label>
                    <input type="text" name="CNPJConvenio" id="CNPJConvenio" value="<?php if(isset($res)){echo $res['CNPJ_convenio'];} ?>">

                </td>
                    
            </tr>   
        </table> 
            
        <table>  
           
            <tr>
                <td> 
                    <label for="nomeEmpresaConvenio">Empresa Convenio: </label>
                    <input type="text" name="nomeEmpresaConvenio" id="nomeEmpresaConvenio" value="<?php if(isset($res)){echo $res['nomeEmpresa_convenio'];} ?>">
                </td>
                <td> 
                    <label for="emailConvenio">E-mail Convenio: </label>
                    <input type="text" name="emailConvenio" id="emailConvenio" value="<?php if(isset($res)){echo $res['email_convenio'];} ?>">
                
                </td>
            </tr>
            <tr>
                <td> 
                    <label for="nomeContatoConvenio">Contato Convenio: </label>
                    <input type="text" name="nomeContatoConvenio" id="nomeContatoConvenio" value="<?php if(isset($res)){echo $res['nomeContato_convenio'];} ?>">
                
                </td>
           
                <td> 
                    <label for="homePageConvenio">Home Page Convenio: </label>
                    <input type="text" name="homePageConvenio" id="homePageConvenio" value="<?php if(isset($res)){echo $res['homePage_convenio'];} ?>">
                
                </td>
            </tr>
            <tr>
                <td> 
                    <label for="telefone1Convenio">Telefone 1: </label>
                    <input type="text" name="telefone1Convenio" id="telefone1Convenio" value="<?php if(isset($res)){echo $res['telefone1_covenio'];} ?>">
                
                </td>

                <td> 
                    <label for="telefone2Convenio">Telefone 2</label>
                    <input type="text" name="telefone2Convenio" id="telefone2Convenio" value="<?php if(isset($res)){echo $res['telefone2_covenio'];} ?>">
                
                </td>
                    
            </tr>    
        </table>
        <div class="center">
            <button class="btn waves-effect waves-light" type="submit" name="save" value="Atualizar">Salvar
                <i class="material-icons right">save</i>
            </button>

        </div>
                
        </fieldset>
</form>

            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $(function(){
        $(".button-collapse").sideNav();
        });
    </script>

    
</body>
</html>