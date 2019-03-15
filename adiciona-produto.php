<?php 
    include("cabecalho.php"); 
    require_once("conecta.php");
    require_once("banco-respostas.php");
    require_once("class/resposta.php");

    $resposta = new Resposta();

    $resposta->nome = $_POST['nome'];
    $resposta->idade = $_POST['idade'];
    ?>

<div class="container pt-5 mt-5">
    <?php
    if(insereResposta($conexao, $resposta)){ ?>
        <p class="text-success text-center">QuestionĂ¡rio respondido com sucesso por <?=$resposta->nome?> de <?=$resposta->idade?> anos</p>
    <?php } else { 
        $msgErro = mysqli_error($conexao);
    ?>
        <p class="text-danger text-center">Erro no envio das respostas: <?= $msgErro ?></p>
    <?php
    }
    ?>
</div>

<?php include("rodape.php"); ?>