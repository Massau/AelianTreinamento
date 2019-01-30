<?php

function listaRespostas($conexao) {
    $respostas = array();
    $resultado = mysqli_query($conexao, "select * from quiz");
    while($resposta = mysqli_fetch_assoc($resultado)) {
        array_push($respostas, $resposta);
    }
    return $respostas;
}

function insereResposta($conexao, $nome, $idade, $alternativa_id) {
    $query = "insert into quiz (nome, idade, alternativa_id) values ('{$nome}', {$idade}, {$alternativa_id})";
    return mysqli_query($conexao, $query);
}

function removeResposta($conexao, $id) {
    $query = "delete from quiz where id = {$id}";
    return mysqli_query($conexao, $query);
}
?>