<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
        <form action="script.php" method="POST">
            <?php
               $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso']:''; // ? equivale a validacao do if no script e : equivale ao else
               if(!empty($mensagemDeSucesso)) 
               {
                   echo $mensagemDeSucesso;
               }           
              
              
              $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro']:''; // ? equivale a validacao do if no script e : equivale ao else
                if(!empty($mensagemDeErro)) 
                {
                    echo $mensagemDeErro;
                }           
            ?> 
            <p>Seu nome: <input type="text" name="nome" /></p>    
            <p>Sua idade: <input type="text" name="idade" /></p>
            <p><Input type="submit" value="Enviar dados" /></Input></p>    
        </form>

    </body>
</html>
