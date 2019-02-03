<?php

function listaRespostas($conexao) {
    $respostas = array();
    $resultado = mysqli_query($conexao, "select * from quiz");
    while($resposta = mysqli_fetch_assoc($resultado)) {
        array_push($respostas, $resposta);
    }
    return $respostas;
}

function insereResposta($conexao, $nome, $idade){
    $query = "insert into quiz (nome, idade) values ('{$nome}', {$idade})";
    return mysqli_query($conexao, $query);
}

function alteraResposta($conexao, $id, $nome, $idade) {
    $query = "update quiz set nome = '{$nome}', idade = {$idade} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function buscaResposta($conexao, $id) {
    $query = "select * from quiz where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeResposta($conexao, $id) {
    $query = "delete from quiz where id = {$id}";
    return mysqli_query($conexao, $query);
}
?>