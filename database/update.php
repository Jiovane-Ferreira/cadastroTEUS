<?php
require_once 'config.php';

//recupera os dados do formulário

$id = filter_input(INPUT_POST, "id");
$nome = filter_input(INPUT_POST, "nome");
$sobrenome = filter_input(INPUT_POST, "sobrenome");
$email = filter_input(INPUT_POST, "email");
$aniversario = filter_input(INPUT_POST, "aniversario");
$sacerdocio = filter_input(INPUT_POST, "sacerdocio");
$quimbanda = filter_input(INPUT_POST, "quimbanda");
$caboclo = filter_input(INPUT_POST, "caboclo");

if ($nome && $sobrenome && $email) {

    $sql = $pdo->prepare("UPDATE mediuns SET 
    nome = :nome,
    sobrenome = :sobrenome,
    email = :email,
    aniversario = :aniversario,
    sacerdocio = :sacerdocio,
    quimbanda = :quimbanda,
    caboclo = :caboclo
    WHERE id = :id");

    $sql->bindValue(":id", $id);
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":sobrenome", $sobrenome);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":aniversario", $aniversario);
    $sql->bindValue(":sacerdocio", $sacerdocio);
    $sql->bindValue(":quimbanda", $quimbanda);
    $sql->bindValue(":caboclo", $caboclo);
    
    $sql->execute();

    header("Location: ../index.php");
    exit;
    

} else {
    header("Location: ../index.php");
    exit;
}