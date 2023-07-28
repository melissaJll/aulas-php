<!-- ## Exercício 01
Criar **variáveis** e/ou **constantes** para:

- Data de hoje
- Nome de uma pessoa
- Nome de um curso que esta pessoa faz
- Carga horária deste curso
- Limite de faltas

Coloque dados nestas variáveis e faça com que o script mostre no HTML uma mensagem apresentando o nome da pessoa, o nome do curso, a carga horária do curso e o limite de faltas.

Destaque alguns destes dados usando CSS (com classes ou inline). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        p:hover{background-color: #0cc47e; display: inline-block; padding: 5px;margin:0;}
        .destaque{color: #ce15d1; text-transform: uppercase;}
    </style>
</head>
<body>

<?php
//Definindo Fuso Horário
date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/y");
//$data = "18/07/23";
//const DATA = define();
$hora = date("H:i");
$nome = "Melissa";

$curso = "Téc. Multimídia";

$cargaHoraria = 200;

$limite = $cargaHoraria*0.75;

?>
<p><b>Data de Inicio:</b> <span class="destaque"><?= $data?></span></p>
<p><b>Hórario:</b> <span class="destaque"><?= $hora?></span></p>
<p><b>Nome: </b><span class="destaque"><?= $nome?></span></p>
<p><b>Curso: </b><span class="destaque"><?=$curso?></span></p>
<p><b>Carga horária: </b><span class="destaque"><?=$cargaHoraria?></span></p>
<p><b>Limite de faltas: </b><span class="destaque"><?=$limite?></span></p>
    
</body>



</html>