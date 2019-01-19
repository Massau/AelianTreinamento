<?php include("header.php");

$nome = $_GET['nome'];
$idade = $_GET['idade'];
$conexao = mysqli_connect('localhost', 'root', '', 'crud');

$query = "insert into quiz (nome, idade) values ('{$nome}', {$idade})";
if(mysqli_query($conexao, $query)){ ?>
    <p class="alert-success text-center">Questionário respondido com sucesso, <?= $nome?>, de <?= $idade ?> anos</p>
<?php } else { ?>
    <p class="alert-danger text-center">Erro no envio das respostas <br> Verifique se todos os campos foram preenchidos corretamente</p>
<?php
}

mysqli_close($conexao);
?>

<?php include("footer.php"); ?>