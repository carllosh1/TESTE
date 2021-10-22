<?php

class classProcedimento{

  private $codigoProcedimento;
  private $dataCadastroProcedimento;
  private $nomeProcedimento;
  private $valorProcedimento;
  private $generoProcedimento;
  private $exececaoProcedimento;


  function getCod(){
    return $this->codigoProcedimento;
  }
  function setCod($codigoProcedimento){
    $this->codigoProcedimento = $codigoProcedimento;
  }


  function getDate(){
    return $this->dataCadastroProcedimento;
  }
  function setDate($dataCadastroProcedimento){
    $this->dataCadastroProcedimento = $dataCadastroProcedimento;
  }


  function getNome() {
    return $this->nomeProcedimento;
  }
  function setNome($nomeProcedimento) {
    $this->nomeProcedimento = $nomeProcedimento;
  }


  function getValor() {
    return $this->valorProcedimento;
  }
  function setValor($valorProcedimento) {
    $this->valorProcedimento = $valorProcedimento;
  }


  function getGenero() {
    return $this->generoProcedimento;
  }
  function setGenero($generoProcedimento) {
    $this->generoProcedimento = $generoProcedimento;
  }

  function getExcessao() {
    return $this->exececaoProcedimento;
  }
  function setExcessao($exececaoProcedimento) {
    $this->exececaoProcedimento = $exececaoProcedimento;
  }

}

?>