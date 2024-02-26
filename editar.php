<?php 

require_once "database/config.php";

$info = [];
$id = filter_input(INPUT_GET, 'id');

if ($id) {

    $sql = $pdo->prepare("SELECT * FROM mediuns WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0 ) {

        $info = $sql->fetch(PDO::FETCH_ASSOC);


    } else {
        
        header("Location: index.php");
        exit;

    }


} else {
    header("Location: index.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro de Mediuns</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css" media="screen" >
</head>
<body>
    <div class="main-container">
        <div class="header"></div>
        <div class="form-container">
            <div class="form-title"><h1>Editar Cadastro de Médiuns</h1></div>
            <div class="form-box">
                <form method="post" action="database/update.php" id="cadastro">

                    <input type="hidden" id="hidden_id" name="id" value="<?=$info['id']; ?>" />

                    <div class="linha-um" id="linha-um-form">
                        <div class="form-input" id="div-nome">
                            <label for="nome">Nome: </label>
                            <input type="text" id="nome" name="nome" value="<?=$info['nome']; ?>"/>
                        </div>
                    
                        <div class="form-input" id="div-sobrenome">
                            <label for="sobrenome">Sobrenome: </label>
                            <input type="text" id="sobrenome" name="sobrenome" value="<?=$info['sobrenome']; ?>" />
                        </div>
                    </div>

                    <div class="linha-dois" id="linha-dois-form">
                        <div class="form-input" id="div-aniversario">
                            <label for="aniversario">Data de Aniversario: </label>
                            <input type="date" id="aniversario" name="aniversario" value="<?=$info['aniversario']; ?>"/>
                        </div>

                        <div class="form-input" id="div-email">
                            <label for="email">E-mail: </label>
                            <input type="text" id="email" name="email" value="<?=$info['email']; ?>"/>
                        </div>
                    </div>
                    
                    <div class="linha-tres" id="linha-tres-form">
                        <div class="form-input" id="div-sacerdócio">
                            <label form="sacerdocio">Possui Sacerdócio? </label>
                            <input type="radio" id="sacerdocio_sim" name="sacerdocio" value="sim" <?=$info['sacerdocio'] == 'sim' ? 'checked' : ''; ?> /> Sim
                            <input type="radio" id="sacerdocio_não" name="sacerdocio" value="não" <?=$info['sacerdocio'] == 'nao' ? 'checked' : ''; ?> /> Não
                        </div>

                        <div class="form-input" id="div-cabolco">
                            <label for="caboclo">Caboclo-Chefe: </label>
                            <input type="text" id="caboclo" name="caboclo" value="<?=$info['caboclo']; ?>"/>
                        </div>
    
                    </div>

                    <div class="form-input" id="div-quimbanda">
                        <label form="quimbanda">Membro da Quimbanda? </label>
                        <input type="radio" id="quimbanda_sim" name="quimbanda" value="sim" <?=$info['quimbanda'] == 'sim' ? 'checked' : ''; ?> /> Sim
                        <input type="radio" id="quimbanda_nao" name="quimbanda" value="nao" <?=$info['quimbanda'] == 'nao' ? 'checked' : ''; ?> /> Não
                    </div>

                    <div class="form-submit" id="div-submit">
                        <input type="submit" value="Salvar" />  
                    </div>

                </form>
            </div>
        </div>
    </div> 
</body>
</html>