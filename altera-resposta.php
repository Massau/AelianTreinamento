<?php 
include("cabecalho.php"); 
require_once("conecta.php");
require_once("banco-respostas.php");
require_once("class/resposta.php");

$resposta = new Resposta();
$resposta->id = (int)$_POST["id"];
$resposta->nome = $_POST["nome"];
$resposta->idade = $_POST["idade"];

?>


<div class="container pt-5 mt-5">
    <?php if(alteraResposta($conexao, $resposta)) { ?>
        <p class="text-success text-center">A resposta de <?=$resposta->nome?> de <?=$resposta->idade?> anos foi alterada com sucesso!</p>
    <?php } else {
        $msgErro = mysqli_error($conexao);
    ?>
        <p class="text-danger text-center">Erro no envio das respostas: <?= $msgErro ?></p>
    <?php
    }
    ?>
</div>

<?php include("rodape.php"); ?>