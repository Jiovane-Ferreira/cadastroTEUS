<?php 

require_once "database/config.php";

$lista =[];
$sql = $pdo->query("SELECT * FROM mediuns");
if($sql->rowCount() > 0 ) {

    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?> 



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Mediuns</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css" media="screen" >
    <link rel="stylesheet" type="text/css" href="assets/mobile.css" media="screen" >
</head>

<body>
    <div class="main-container">   

        <div class="view-container">   
            
            <div class="titulo-view" id="mostrar-medium">
                <h1>Médiuns Cadastrados</h1>
            </div>

            <div class="table-container">
                <div class="table-header">ID</div>
                <div class="table-header">Nome</div>
                <div class="table-header">Aniversário</div>
                <div class="table-header">Email</div>
                <div class="table-header">Sacerdocio</div>
                <div class="table-header">Caboclo</div>
                <div class="table-header">Quimbanda</div>
                <div class="table-header">Exu/Pombagira</div>
                <div class="table-header">Ação</div>

                <?php foreach($lista as $medium): ?>
                    
                    <div class="table-item"><?=$medium['id']; ?></div>
                    <div class="table-item"><?=$medium['nome'] ." ". $medium['sobrenome']; ?></div>
                    <div class="table-item"><?=$medium['aniversario']; ?></div>
                    <div class="table-item"><?=$medium['email']; ?></div>
                    <div class="table-item"><?=$medium['sacerdocio']; ?></div>
                    <div class="table-item"><?=$medium['caboclo']; ?></div>
                    <div class="table-item"><?=$medium['quimbanda']; ?></div>
                    <div class="table-item"><?=$medium['exu_frenteiro']; ?></div>

                    <div class="table-item">
                        <a href="editar.php?id=<?=$medium['id']; ?>"><button class="btn-action">editar</button></a>
                        <a href="../database/excluir.php?id=<?=$medium['id']; ?>"><button class="btn-action">excluir</button></a>
                    </div>
                
            
                <?php endforeach; ?>



            </div>

            <div class="btn-mostrar-view" id="div-view">
                <a href="index.php"><button class="btn-view" type="button">Cadastrar Médiuns</button></a>
            </div>
            
        </div>       
    </div> 
</body>
</html>