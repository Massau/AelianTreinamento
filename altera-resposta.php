<?php 
    include("cabecalho.php"); 
    require_once("conecta.php");
    require_once("banco-respostas.php"); 

$id = $_POST["id"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];
?>

<div class="container pt-5 mt-5">
    <?php if(alteraResposta($conexao, $id, $nome, $idade)) { ?>
        <p class="text-success text-center">A resposta de <?= $nome; ?> de <?= $idade; ?> anos foi alterada com sucesso!</p>
    <?php } else {
        $msgErro = mysqli_error($conexao);
    ?>
        <p class="text-danger text-center">Erro no envio das respostas: <?= $msgErro ?></p>
    <?php
    }
    ?>
</div>

<?php include("rodape.php"); ?>