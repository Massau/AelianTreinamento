<?php 
    include("cabecalho.php"); 
    require_once("conecta.php");
    require_once("banco-respostas.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(insereResposta($conexao, $nome, $idade)){ ?>
    <p class="text-success text-center envolve_conteudo">Questionário respondido com sucesso, <?= $nome?>, de <?= $idade ?> anos</p>
<?php } else { 
    $msgErro = mysqli_error($conexao);
?>
    <p class="text-danger text-center envolve_conteudo">Erro no envio das respostas: <?= $msgErro ?></p>
<?php
}

mysqli_close($conexao);
?>

<?php include("rodape.php"); ?>