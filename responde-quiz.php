<?php include("header.php");
function insereResposta($conexao, $nome, $idade){
    $query = "insert into quiz (nome, idade) values ('{$nome}', {$idade})";
    return mysqli_query($conexao, $query);
}

$nome = $_GET['nome'];
$idade = $_GET['idade'];
$conexao = mysqli_connect('localhost', 'root', '', 'crud');

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

<?php include("footer.php"); ?>