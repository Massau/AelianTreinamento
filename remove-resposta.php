<?php 
    include("cabecalho.php"); 
    require_once("conecta.php");
    require_once("banco-respostas.php"); 

    $id = $_GET['id'];
    removeResposta($conexao, $id);
    ?>

    <div class="container mt-1">
    <p class="text-success text-center envolve_conteudo">Resposta removida com sucesso</p>
    </div>