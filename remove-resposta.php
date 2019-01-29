<?php 
    include("cabecalho.php"); 
    require_once("conecta.php");
    require_once("banco-respostas.php"); 

    $id = $_GET['id'];
    removeResposta($conexao, $id);
    ?>
