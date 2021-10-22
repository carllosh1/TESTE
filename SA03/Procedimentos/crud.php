<?php
class crudProcedimento extends Conexao{

  private $con;
  public function __construct() {
    $this->con = new Conexao();
  }



  public function cadastrar($classProcedimento){
    $sql=  $this->con->getCon()->prepare("INSERT INTO tbl_procedimento VALUES (?,?,?,?,?,?)");
    $sql->bindValue(1, $classProcedimento->getCod());
    $sql->bindValue(2, $classProcedimento->getDate());
    $sql->bindValue(3, $classProcedimento->getNome());
    $sql->bindValue(4, $classProcedimento->getValor());
    $sql->bindValue(5, $classProcedimento->getGenero());
    $sql->bindValue(6, $classProcedimento->getExcessao());
    return $sql->execute();
  }



  public function alterar($classProcedimento){
    $sql = $this->con->getCon()->prepare("UPDATE tbl_procedimento SET dataCadastro_procedimento = :dat, nome_procedimento = :nome, valor_procedimento = :valor, genero_procedimento = :genero, exececao_procedimento = :excessao WHERE codigo_procedimento = :id");
    $sql->bindValue(":id", $classProcedimento->getCod());
    $sql->bindValue(":dat", $classProcedimento->getDate());
    $sql->bindValue(":nome", $classProcedimento->getNome());
    $sql->bindValue(":valor", $classProcedimento->getValor());
    $sql->bindValue(":genero", $classProcedimento->getGenero());
    $sql->bindValue(":excessao", $classProcedimento->getExcessao());
    return $sql->execute();
  }
  
  public function excluir($classProcedimento){
    $sql = $this->con->getCon()->prepare("DELETE FROM tbl_procedimento WHERE codigo_procedimento = :id");
    $sql->bindValue(":id", $classProcedimento->getCod());
    return $sql->execute();
   
  
  }
}

?>
