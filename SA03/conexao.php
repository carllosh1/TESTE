<?php
    try {
        $con= new PDO("mysql:host=localhost;dbname=db_sa02_dsw","root","");   
    } catch (PDOException $e) {
        echo "Erro no banco: " . $e->getMessage();
    }
?>