<?php
   include 'conexao.php';
   include 'class.php';
   include 'crud.php';
   require_once '../conexao.php';
   $crudProcedimento = new crudProcedimento();
    $classProcedimento = new classProcedimento();
    $Conexao = new Conexao();

    if(isset($_GET['codigo_procedimento']) && !empty($_GET['codigo_procedimento'])){
        $codigo_procedimento = addslashes($_GET['codigo_procedimento']);

        $sql = $Conexao->getCon()->query("SELECT * FROM tbl_procedimento WHERE codigo_procedimento = '$codigo_procedimento'");
        $res = $sql->fetch(PDO::FETCH_ASSOC);
    }  

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
                        <a href="paciente.html"> Paciente</a>
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
                        <a href="procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Padroes/padroes.html"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>
        
    <form  method="post">
        <fieldset class="margin-border">
           
            <h4 class="title">Cadastro de Procedimento - COM CRUD OOP</h4>
            <hr>
            
        <table class="flex">  
       
            <tr>



                
                <td>
                    <label  for="dataCadastroProcedimento">Data: </label>
                    <input type="date"  name="dataCadastroProcedimento" id="dataCadastroProcedimento" value="<?php if(isset($res)){echo $res['dataCadastro_procedimento'];} ?>" required="required" placeholder="dd/mm/aaaa">
                </td>  
                  
            </tr>
            </table> 
            <table> 
                <tr>
                    <td>    
                        <label for="nomeProcedimento">Nome: </label>
                        <input type="text" required="required" name="nomeProcedimento" placeholder="Nome do procedimento" id="nomeProcedimento" value="<?php   if(isset($res)){echo $res['nome_procedimento'];} ?>">
                    </td>
                    <td>    
                        <label for="codigoProcedimento">Cod: </label>
                        <input type="text" required="required" name="codigoProcedimento" value="<?php   if(isset($res)){echo $res['codigo_procedimento'];} ?>" placeholder="Código procedimento" id="codigoProcedimento" style="display:flex;">
                    </td>
                    
                </tr>   
            </table> 
              
              
            <table> 
                
                    
                    <tr>
                        <td>
                            <label for="valorProcedimento">Valor:</label>
                                <input type="text" placeholder="R$100,00"required="required" value="<?php   if(isset($res)){echo $res['valor_procedimento'];} ?>"name="valorProcedimento" id="valorProcedimento">
                        </td>
                    </tr>

                    
                </table>
              
            <table>

            <td>
                <label for="generoProcedimento">Gênero: </label>
                <select name="generoProcedimento" style="display:flex;" required="required" id="generoProcedimento">
                <option   value="<?php   if(isset($res)){echo $res['genero_procedimento'];} ?>"><?php   if(isset($res)){echo $res['genero_procedimento'];} ?> </option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outros">Outros</option>
                <select>
            </td>

            <td>
                <label for="exececaoProcedimentos">Exceção: </label>
                <select name="exececaoProcedimentos" style="display:flex;" required="required" id="exececaoProcedimentos">
                
                <option   value="<?php   if(isset($res)){echo $res['exececao_procedimento'];} ?>"><?php   if(isset($res)){echo $res['exececao_procedimento'];} ?> </option>
                    <option value="Nenhuma">Nenhuma </option>
                    <option value="Problema A">Problema A</option>
                    <option value="Problema B">Problema B</option>
                    <option value="Problema C">Problema C</option>
                    <option value="Problema D">Problema D</option>
                    <option value="Outros">Outros</option>
                <select>
            </td>

            </table>

            <br><br>
            
                    
            <div class="row">
                <div class="col s4"> 
                    <button class="btn waves-effect waves-light" type="submit" name="save">Salvar
                        <i class="material-icons right">save</i>
                    </button>
                </div>
                <div class="col s4">
                    <button class="btn waves-effect grey darken-3" type="reset" name="action">limpar
                        <i class="material-icons right">delete_sweep</i>
                    </button>

                </div>
                <div class="col s4">
                    <a href="index.php" class="btn waves-effect green accent-4">
                        Editar
                        <i class="material-icons right">edit</i>
                     </button>   
                    </a>
                </div>

            </div>

  
      
      
           
        </fieldset>
        

    </form>
    <?php
  
        if( isset($_GET['codigo_procedimento'],$_POST['save']) && !empty($_GET['codigo_procedimento'])){
            

            $classProcedimento->setCod($_GET['codigo_procedimento']);
            $classProcedimento->setNome($_POST['nomeProcedimento']);
            $classProcedimento->setDate($_POST['dataCadastroProcedimento']);
            $classProcedimento->setValor($_POST['valorProcedimento']);
            $classProcedimento->setGenero($_POST['generoProcedimento']);
            $classProcedimento->setExcessao($_POST['exececaoProcedimentos']);
            $crudProcedimento->alterar($classProcedimento);

            if (headers_sent()) {
                die("O redirecionamento falhou. Por favor, clique neste link: <a href=index.php>aqui</a>");
            }
            else{
                exit(header("Location: /user.php"));
            }
            
        }   
       
    ?>
         
        
        
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $(function(){
        $(".button-collapse").sideNav();
        });
    </script>
</body>
</html>