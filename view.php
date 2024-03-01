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
            
        
            <div class="view-head">
                <div class="th-view" id="div-th-id"><p>ID</p></div>
                <div class="th-view" id="div-th-nome"><p>Nome</p></div>
                <div class="th-view" id="div-th-aniversario"><p>Data de Aniversário</p></div>
                <div class="th-view" id="div-th-email"><p>Email</p></div>
                <div class="th-view" id="div-th-sacerdocio"><p>Sacerdócio</p></div>
                <div class="th-view" id="div-th-caboclo"><p>Caboclo-Chefe</p></div>
                <div class="th-view" id="div-th-quimbanda"><p>Quimbanda</p></div>
                <div class="th-view" id="div-th-exu"><p>Exu/Pombagira Frenteiro</p></div>
            </div>

            <div class="view-body">
                
                <table class="table-medium-view" id="table-medium-view">
                    <tbody>
                        <?php foreach($lista as $medium): ?>

                            <tr>
                                <td><div class="tr-view"><?=$medium['id']; ?></div></td>
                                <td><div class="tr-view"><?=$medium['nome'] ." ". $medium['sobrenome']; ?></div></td>
                                <td><div class="tr-view"><?=$medium['aniversario']; ?></div></td>
                                <td><div class="tr-view"><?=$medium['email']; ?></div></td>
                                <td><div class="tr-view"><?=$medium['sacerdocio']; ?></div></td>
                                <td><div class="tr-view"><?=$medium['caboclo']; ?></div></td>
                                <td><div class="tr-view"><?=$medium['quimbanda']; ?></div></td>
                                <td><div class="tr-view"><?=$medium['exu_frenteiro']; ?></div></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>


        </div>       
    </div> 
</body>
</html>