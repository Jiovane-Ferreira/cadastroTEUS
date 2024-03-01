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
        <div class="header"></div>
        <div class="form-container">
            <div class="form-title"><h1>Formulário de Cadastro de Médiuns</h1></div>
            <div class="form-box">
                <form method="post" action="database/adicionar.php" id="cadastro">

                    <div class="div-fieldset" id="fieldset-dados">
                        <fieldset>
                            <legend>Dados Pessoais</legend>
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
                        </fieldset>
                    </div>
                    
                    <div class="div-fieldset" id="fieldset-umbanda">
                        <fieldset>
                            <legend>Umbanda</legend>
                            <div class="linha-tres" id="linha-tres-form">
                                <div class="form-input" id="div-sacerdócio">
                                    <label form="sacerdocio">Possui Sacerdócio? </label>
                                    <input type="radio" id="sacerdocio_sim" name="sacerdocio" value="sim" checked /> Sim
                                    <input type="radio" id="sacerdocio_nao" name="sacerdocio" value="nao" /> Não
                                </div>    
                            </div>
                    

                            <div class="form-input" id="div-cabolco">
                                <label for="caboclo">Caboclo-Chefe: </label>
                                <input type="text" id="caboclo" name="caboclo" />
                            </div>
                        </fieldset>
                    </div>

                    <div class="div-fieldset" id="fieldset-quimbanda">
                        <fieldset>
                            <legend>Quimbanda</legend>
                            <div class="form-input" id="div-quimbanda">
                                <label form="quimbanda">Membro da Quimbanda? </label>
                                <input type="radio" id="quimbanda_sim" name="quimbanda" value="sim" /> Sim
                                <input type="radio" id="quimbanda_nao" name="quimbanda" value="nao" checked/> Não
                            </div>

                            <div class="form-input" id="div-exu-frente">
                                <label for="caboclo">Exu/Pombagira Frenteiro: </label>
                                <input type="text" id="exu" name="exu" />
                            </div>
                        </fieldset>
                    </div>

                    <div class="form-submit" id="div-submit">   
                        <input class="button" type="submit" value="Enviar" />  
                    </div>

                    <div class="btn-mostrar" id="div-mostrar">
                        <a href="view.php"><button class="button" type="button">Mostrar Médiuns</button></a>
                    </div>

                </form>
                
            </div>
        </div>
    </div> 
</body>
</html>