<?php

//inclui a conexão com o banco de dados
require_once "config.php";

//recupera os dados do formulário
$nome = filter_input(INPUT_POST, "nome");
$sobrenome = filter_input(INPUT_POST, "sobrenome");
$aniversario = filter_input(INPUT_POST, "aniversario");
$sacerdocio = filter_input(INPUT_POST, "sacerdocio");
$quimbanda = filter_input(INPUT_POST, "quimbanda");
$caboclo = filter_input(INPUT_POST, "caboclo");

if ($nome && $sobrenome) {
    
    $sql = $pdo->prepare("INSERT INTO mediuns (
        nome, 
        sobrenome, 
        aniversario, 
        sacerdocio, 
        quimbanda, 
        caboclo)
        
        VALUES(
        :nome,
        :sobrenome,
        :aniversario,
        :sacerdocio,
        :quimbanda,
        :caboclo
        )");

    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":sobrenome", $sobrenome);
    $sql->bindValue(":aniversario", $aniversario);
    $sql->bindValue(":sacerdocio", $sacerdocio);
    $sql->bindValue(":quimbanda", $quimbanda);
    $sql->bindValue(":caboclo", $caboclo);

    $sql->execute();

    header("Location: ../index.html");
    exit;

} else {
    header("Location: ../index.html");
    exit;
}