<?php

//conecta ao banco de dados
$db_name = 'templo_de_nana';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'admin123';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);