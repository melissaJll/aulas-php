<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <h1>Exemplo usando GET</h1>
    <p>Receber e processar dados via <b>GET</b></p>
<?php
//capturando os dados transmitidos da array associativa chrome
$nome = $_GET["nome"];
$email = $_GET["email"];
$mensagem = $_GET["mensagem"];

// Ou extract(_GET que é um array associativo); função transforma os dados da array associativa para variaveis de mesmo nome
?>

    <h2>Dados: </h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?> </li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>
    
</body>
</html>