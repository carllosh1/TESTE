<?php
    require_once '../conexao.php';
    
    if(isset($_GET['id_padroes']) && !empty($_GET['id_padroes'])){
        $id_padroes = addslashes($_GET['id_padroes']);

        $cmd = $con->query("SELECT * FROM tbl_padroes WHERE id_padroes = '$id_padroes'");
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
                    <li class="navbar-item">
                        <a href="../Convenio/Convenio.html"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.html"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="padroes.html"> Padrões</a>
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
                        <a href="../Convenio/Convenio.html"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.html"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="padroes.html"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>


       
        <form action="<?php echo 'update.php?id_padroes='.$id_padroes;?>" method="post">

            <fieldset class="margin-border">
            
            <h4 class="title">Atualizar Pessoa</h4>
            <hr>
            <table class="flex">      
            <tr >    
                <td>
                    <label  for="dataCadastroPadrao">Data: </label>
                    
                    <input type="date"  name="dataCadastroPadrao" id="dataCadastroPadrao" placeholder="dd/mm/aaaa" value="<?php if(isset($res)){echo $res['dataCadastro_padrao'];} ?>">
                </td>   
            </tr>
        </table>  
        <table>  
            <tr>
                <td>    
                    <label for="tempoPadrao">Tempo médio de consulta: </label>
                    <input type="time" name="tempoPadrao" id="tempoPadrao" value="<?php if(isset($res)){echo $res['tempo_padrao'];} ?>"> 
        
                </td>
            </tr> 
            <tr>
                <td> 
                    <label for="inicioPadrao">Inicial: </label>
                    <input type="time" name="inicioPadrao" id="inicioPadrao" value="<?php if(isset($res)){echo $res['inicio_padroes'];} ?>">
                </td>
                <td> 
                    <label for="finalPadrao">Final: </label>
                    <input type="time" name="finalPadrao" id="finalPadrao" value="<?php if(isset($res)){echo $res['fim_padroes'];} ?>">
                
                </td>
                    
            </tr>   
        
                    
            <tr>
                <td>
                    <label>Dias de funcionamento:</label>
                    <input type="text" disabled="disabled" value="<?php if(isset($res)){echo $res['diasFuncionamento_padroes'];} ?>">
                </td>
                    
            </tr>
        </table> 
        <table>         
        <tr>
                <td>
               
                    
                        <span>Segunda:</span>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" value="Segunda"name="checkValores[]" >
                    
                </td>
                <td>
                
                        <span>Terça:<span>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" value="Terça"name="checkValores[]">
             
                </td>   
                <td>
                
                        <span>Quarta:</span>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" value="Quarta"name="checkValores[]">
                  
                </td> 
                <td>
                   
                        <span>Quinta:</span>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" value="Quinta"name="checkValores[]">
                    
                </td> 
                <td>
                   
                        <span>Sexta:</span>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" value="Sexta"name="checkValores[]" >
                 
                </td> 
                <td>
                    
                 
                        <span>Sábado:</span>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" value="Sábado"name="checkValores[]">
                  
                </td> 
                <td>
                
                        <span>Domingo:</span>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" value="Domingo"name="checkValores[]">
                  
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



    
</body>
</html>
       