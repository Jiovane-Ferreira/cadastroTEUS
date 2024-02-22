<?php

//recupera os dados do formulário
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$aniversario = $_POST["aniversario"];
$sacerdocio = $_POST["sacerdocio"];
$quimbanda = $_POST["quimbanda"];
$caboclo = $_POST["caboclo"];



//conecta ao banco de dados
$db_name = 'templo_de_nana';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'admin123';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);




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
*/