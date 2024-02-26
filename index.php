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
</head>
<body>
    <div class="main-container">
        <div class="header"></div>
        <div class="form-container">
            <div class="form-title"><h1>Formulário de Cadastro de Médiuns</h1></div>
            <div class="form-box">
                <form method="post" action="database/adicionar.php" id="cadastro">

                    <div class="linha-um" id="linha-um-form">
                        <div class="form-input" id="div-nome">
                            <label for="nome">Nome: </label>
                            <input type="text" id="nome" name="nome"/>
                        </div>
                    
                        <div class="form-input" id="div-sobrenome">
                            <label for="sobrenome">Sobrenome: </label>
                            <input type="text" id="sobrenome" name="sobrenome" />
                        </div>
                    </div>

                    <div class="linha-dois" id="linha-dois-form">
                        <div class="form-input" id="div-aniversario">
                            <label for="aniversario">Data de Aniversario: </label>
                            <input type="date" id="aniversario" name="aniversario" />
                        </div>

                        <div class="form-input" id="div-email">
                            <label for="email">E-mail: </label>
                            <input type="text" id="email" name="email" />
                        </div>
                    </div>
                    
                    <div class="linha-tres" id="linha-tres-form">
                        <div class="form-input" id="div-sacerdócio">
                            <label form="sacerdocio">Possui Sacerdócio? </label>
                            <input type="radio" id="sacerdocio_sim" name="sacerdocio" value="sim" checked /> Sim
                            <input type="radio" id="sacerdocio_nao" name="sacerdocio" value="nao" /> Não
                        </div>

                        <div class="form-input" id="div-cabolco">
                            <label for="caboclo">Caboclo-Chefe: </label>
                            <input type="text" id="caboclo" name="caboclo" />
                        </div>
    
                    </div>

                    <div class="form-input" id="div-quimbanda">
                        <label form="quimbanda">Membro da Quimbanda? </label>
                        <input type="radio" id="quimbanda_sim" name="quimbanda" value="sim" /> Sim
                        <input type="radio" id="quimbanda_nao" name="quimbanda" value="nao" checked/> Não
                    </div>

                    <div class="form-submit" id="div-submit">
                        <input type="submit" value="Enviar" />  
                    </div>

                </form>
            </div>

            <div class="container-table">
                <table class="table-medium" id="table-medium">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                            <th>Aniversario</th>
                            <th>Sacerdocio</th>
                            <th>Quimbanda</th>
                            <th>Caboclo Chefe</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($lista as $medium): ?>

                        <tr>
                            <td><?php echo $medium['id']; ?></td>
                            <td><?=$medium['nome']; ?></td>
                            <td><?=$medium['sobrenome']; ?></td>
                            <td><?=$medium['email']; ?></td>
                            <td><?=$medium['aniversario']; ?></td>
                            <td><?=$medium['sacerdocio']; ?></td>
                            <td><?=$medium['quimbanda']; ?></td>
                            <td><?=$medium['caboclo']; ?></td>
                            <td><a href="editar.php?id=<?=$medium['id']; ?>">[ Editar ]</a></td>
                            <td><a href="../database/excluir.php?id=<?=$medium['id']; ?>" onclick="return confirm('Deseja mesmo excluir essa pessoa?')">[ Excluir ]</a></td>
                        </tr>    
                        
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</body>
</html>