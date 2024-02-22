<?php

//verifica se os dados foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //recupera os dados do formulário
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $aniversario = $_POST["aniversario"];
    $sacerdocio = $_POST["sacerdocio"];
    $quimbanda = $_POST["quimbanda"];
    $caboclo = $_POST["caboclo"];

    //conecta ao banco de dados
    $server = 'localhost';
    $user = 'root';
    $password = 'admin123';
    $dbname = 'templo_de_nana';

    $conexao = new mysqli($server, $user, $password, $dbname);

    //verifica se há erro na conexão
    if ($conexao->connect_error) {
        die("Conexão Falhou" .$conexao->connect_error);
    }

    //prepara e executa a consulta SQL para inserir os dados
    $sql = "INSERT INTO mediuns (
        nome, 
        sobrenome,
        aniversario, 
        sacerdocio,
        quimbanda,
        caboclo) 
        
        VALUES (
        '$nome',
        '$sobrenome',
        '$aniversario',
        '$sacerdocio',
        '$quimbanda',
        '$caboclo')";

    if ($conexao->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso";

    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
    }

    $conexao->close();

}