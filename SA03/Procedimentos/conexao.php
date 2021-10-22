<?php

class Conexao {

    private $usuario = "root";
    private $senha = "";
    private $caminho = "127.0.0.1";
    private $banco = "db_sa02_DSW";
    private $con;

    public function __construct() {

		try {
			$this->con = new PDO("mysql:dbname={$this->banco};host={$this->caminho}", "root", "");
		} catch(PDOException $e) {
			echo "FALHA: ".$e->getMessage();
		}

	}

  public function getCon() {
      return $this->con;
  }
}
?>