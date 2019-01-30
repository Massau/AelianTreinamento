<?php 
    include("cabecalho.php"); 
    require_once("conecta.php");
    require_once("banco-respostas.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
?>

<div class="container pt-5 mt-5">
    <?php
    if(insereResposta($conexao, $nome, $idade)){ ?>
        <p class="text-success text-center">Questionário respondido com sucesso, <?= $nome?>, de <?= $idade ?> anos</p>
    <?php } else { 
        $msgErro = mysqli_error($conexao);
    ?>
        <p class="text-danger text-center">Erro no envio das respostas: <?= $msgErro ?></p>
    <?php
    }
    ?>
</div>

<?php include("rodape.php"); ?>