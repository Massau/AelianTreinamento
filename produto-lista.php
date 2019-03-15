<?php 
include("cabecalho.php"); 
require_once("conecta.php");
require_once("banco-respostas.php");
require_once("class/resposta.php");
?>

<div class="container pt-5 mt-5">

    <h3>Respondido por:</h3>

    <?php
        if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { 
    ?>
        <p class="alert-success text-center">Resposta apagada com sucesso!</p>
    <?php
        }
    ?>

    <table class="table table-hover table-striped table-condensed tasks-table pt-3 mt-3">
  
        <?php
        $respostas = listaRespostas($conexao);
        foreach ($respostas as $resposta){
        ?>

        <tr class="text-center">
            <td><?= $resposta->nome ?></td>
            <td><?= $resposta->idade ?></td>
            <td><a class="btn btn-primary" href="altera-resposta-formulario.php?id=<?=$resposta->id?>">Alterar</a></td>
            <td>
                <!--<form action="remove-resposta.php?id=$resposta->id" method="post">-->
                    <button class="btn btn-danger btn-remover" id="<?=$resposta->id?>">Remover</button>
                <!--</form>-->
            </td>
        <tr>

        <?php
        }
        ?>

    <table>
</div>

<br>

        
<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10">
            <small>"Nós queremos achar a verdade, onde quer que ela nos leve. Mas, para confrontar a verdade, precisamos tanto de imaginação quanto de ceticismo."
            <br>
                <b>Cosmos, uma Odisséia no Espaço - Carl Sagan, 9 de nov de 1934 - 20 de dez de 1996</b>
            </small>
        </div>             
    </div>
</div>
<br>

<div class="container pt-2">
    <table class="table table-hover table-dark">
        <thead>
            <tr class="text-center">
                <th scope="col">Verdadeiro ou Falso</th>
                <th scope="col">Objeto</th>
                <th scope="col">Definição</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="text-danger">Falso</td>
                <td>Astrologia</td>
                <td>Não há nenhuma evidência científica que relacione a posição dos astros no céu no momento do nascimento de uma pessoa com fatos na Terra que dizem respeito ao dia dela.</td>
            </tr>
            <tr>
                <td class="text-success">Verdadeiro</td>
                <td>Astronomia</td>
                <td>Estudo dos astros que compõe o Cosmos. <a href="https://bit.ly/2zE7OPY">Carl Sagan</a> foi astrônomo e divulgador científico.</td>
            </tr>
            <tr>
                <td class="text-danger">Falso</td>
                <td>Homeopatia</td>
                <td>Se um produto não funciona, não é seguro usá-lo no lugar de um medicamento real. Atraso em obter cuidado efetivo pode resultar em piora de condições que poderiam ser tratadas apropriadamente.
                    <br><b class="text-danger">Polêmica: </b> Ironizando o fato de não haver embasamento científico que comprove a eficácia dessa medicina alternativa, recentemente pessoas se organizaram para um, acredite, <a href="https://bit.ly/2DwmqoC">suicídio coletivo com hiperdosagem de medicamentos homeopáticos.</a> Ninguém morreu.</td>
            </tr>
            <tr>
                <td class="text-success">Verdadeiro</td>
                <td>HTML</td>
                <td>Embora esta Linguagem de Marcação para HiperTextos efetivamente funcione bem para estruturar sites e páginas da Web, pesquisas revelam que <a href="https://bit.ly/2JRg040">boa parte dos americanos acredita que HTML seja uma doença sexualmente transmissível.</a></td>
            </tr>
        </tbody>
    </table>
</div>

<nav class="row">
    <div class="col-md-4 col-lg-4">
        <!-- vazio -->
    </div>

    <div class="col-md-4 col-lg-4">
        <ul class="pagination text-center">
            <li class="page-item">
                <span class="page-link" href="index.html">Anterior</span>
            </li>
            <li class="page-item active">
                <span class="page-link">
                    J
                    <span class="sr-only">(atual)</span>
                </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">o</a></li>               
            <li class="page-item"><a class="page-link" href="#">o</a></li>
            <li class="page-item"><a class="page-link" href="#">o</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">y</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">c</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">e</a></li>

            <li class="page-item">
                <a class="page-link" href="#">Próximo</a>
            </li>
        </ul>
    </div>
    
    <div class="col-md-4 col-lg-4">
        <!-- vazio -->
    </div>
</nav>

<?php include("rodape.php"); ?>