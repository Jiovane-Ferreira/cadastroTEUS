<?php

//verifica se os dados foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //recupera os dados do formulário
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $aniversario = $_POST["aniversario"];
    $sacerdocio = $_POST['sacerdocio'];
    $quimbanda = $_POST['quimbanda'];
    $caboclo = $_POST["caboclo"];


}