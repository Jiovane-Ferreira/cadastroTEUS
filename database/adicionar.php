<?php

//inclui a conexão com o banco de dados
require_once "config.php";

//recupera os dados do formulário
$nome = filter_input(INPUT_POST, "nome");
$sobrenome = filter_input(INPUT_POST, "sobrenome");
$email = filter_input(INPUT_POST, "email");
$aniversario = filter_input(INPUT_POST, "aniversario");
$sacerdocio = filter_input(INPUT_POST, "sacerdocio");
$quimbanda = filter_input(INPUT_POST, "quimbanda");
$caboclo = filter_input(INPUT_POST, "caboclo");
$exu = filter_input(INPUT_POST, "exu");

if ($nome && $sobrenome && $email) {

    $sql = $pdo->prepare("SELECT * FROM mediuns WHERE email = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {
    
        $sql = $pdo->prepare("INSERT INTO mediuns (
            nome, 
            sobrenome, 
            aniversario, 
            sacerdocio, 
            quimbanda, 
            caboclo,
            email,
            exu_frenteiro)
            
            VALUES(
            :nome,
            :sobrenome,
            :aniversario,
            :sacerdocio,
            :quimbanda,
            :caboclo,
            :email,
            :exu
            )");

        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":sobrenome", $sobrenome);
        $sql->bindValue(":aniversario", $aniversario);
        $sql->bindValue(":sacerdocio", $sacerdocio);
        $sql->bindValue(":quimbanda", $quimbanda);
        $sql->bindValue(":caboclo", $caboclo);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":exu", $exu);

        $sql->execute();

        header("Location: ../index.php");
        exit;
        
    } else { 
        header("Location: ../index.php");
        exit;
    }

} else {
    header("Location: ../index.php");
    exit;
}