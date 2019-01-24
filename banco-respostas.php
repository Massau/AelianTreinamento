<?php

function listaRespostas($conexao) {
    $respostas = array();
    $resultado = mysqli_query($conexao, "select * from quiz");
    while($quiz = mysqli_fetch_assoc($resultado)){
        array_push($respostas, $resposta);
    }
    return $respostas;
}

function insereResposta($conexao, $nome, $idade){
    $query = "insert into quiz (nome, idade) values ('{$nome}', {$idade})";
    return mysqli_query($conexao, $query);
}
?>