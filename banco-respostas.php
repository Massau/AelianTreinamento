<?php
require_once("conecta.php");
require_once("class/resposta.php");

function listaRespostas($conexao) {

    $respostas = array();
    $resultado = mysqli_query($conexao, "select * from quiz");
    
    while($resposta_array = mysqli_fetch_assoc($resultado)) {

        $resposta = new Resposta();

        $resposta->id = $resposta_array['id'];
        $resposta->nome = $resposta_array['nome'];
        $resposta->idade = $resposta_array['idade'];

        array_push($respostas, $resposta);
    }
    return $respostas;
}

function insereResposta($conexao, Resposta $resposta) {
    $query = "insert into quiz (nome, idade) values ('{$resposta->nome}', {$resposta->idade})";
    return mysqli_query($conexao, $query);
}

function alteraResposta($conexao, Resposta $resposta) {
    $query = "update quiz set nome = '{$resposta->$nome}', idade = {$resposta->$idade} where id = '{$resposta->$id}'";
    return mysqli_query($conexao, $query);
}

function buscaResposta($conexao, $id) {
    $query = "select * from quiz where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);

    $resposta = new Resposta();
    $resposta->id = $resposta_buscada['id'];
    $resposta->nome = $resposta_buscada['nome'];
    $resposta->idade = $resposta_buscada['idade'];

    return $resposta;
}

function removeResposta($conexao, $id) {
    $query = "delete from quiz where id = {$id}";
    return mysqli_query($conexao, $query);
}
?>