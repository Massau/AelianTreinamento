<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-respostas.php");

$id = $_GET['id'];
$resposta = buscaResposta($conexao, $id);
?>

<div class="container pt-5 mt-5">
    <h1>Alterando produto</h1>
        <form action="altera-resposta.php" method="post">
            <input type="hidden" name="id" value="<?=$resposta['id']?>" />
            <table class="table pt-3 mt-3">
                <tr>
                    <td>Nome</td>
                    <td><input class="form-control" type="text" name="nome" value="<?=$resposta['nome']?>" /></td>
                </tr>
                <tr>
                    <td>Idade</td>
                    <td><input class="form-control" type="number" name="idade" value="<?=$resposta['idade']?>" /></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">Alterar</button></td>
                </tr>
            </table>
        </form>
</div>

<?php include("rodape.php"); ?>
