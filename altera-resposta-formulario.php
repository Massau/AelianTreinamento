<?php include("cabecalho.php");
      include("conecta.php");
      /*include("banco-categoria.php");*/
      include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);

$categorias = listaCategorias($conexao);

$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h1>Alterando produto</h1>
<form action="altera-resposta.php" method="post">
    <input type="hidden" name="id" value="<?=$resposta['id']?>" />
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$resposta['nome']?>" /></td>
        </tr>
        <tr>
            <td>Idade</td>
            <td><input class="form-control" type="number" name="idade" value="<?=$resposta['preco']?>" /></td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select class="form-control" name="categoria_id">
                    <?php foreach($categorias as $categoria) :
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>>
                            <?=$categoria['nome']?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
