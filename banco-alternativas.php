<?php
function listaAlternativas($conexao) {
    $alternativas = array();
    $query = "select * from alternativa";
    $resultado = mysqli_query($conexao, $query);
    while($alternativa = mysqli_fetch_assoc($resultado)) {
        array_push($alternativas, $alternativa);
    }
    return $alternativas;
}