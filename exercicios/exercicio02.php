<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style>
        ul>li{list-style-type: none;}
        article{display: flex;justify-content:space-evenly;}
        section{background-color: pink; padding: 30px; border-radius: 8px; border-color: aliceblue; box-shadow: whitesmoke 8px 3px 6px; position: relative;}
        li{margin-left: -20px;}
        html{background-color: #a8e4ff;}

        h2:after{content: ' '; display: block; height: 3px; background-color: palevioletred;margin-bottom: 17px; }
        h1{color: palevioletred;}
    </style>
</head>
<body>

<h1>Teste</h1>
<?php
$primeiro = ["Ana Julia", "AJ_20", "anaJ@email.com","112344",23,"F","São Paulo" ]; 
$segundo = ["Marcus Vinicius", "Mv_2002", "marcusV@email.com","2334@",22,"M", "Rio de Janeiro" ]; 
?>
<article>
    <section>
        <h2><?=$primeiro[0]?></h2>
        <ul>
            <li>Email: <?=$primeiro[2]?></li>
            <li>Idade: <?=$primeiro[4]?></li>
            <li>sexo: <?=$primeiro[5]?></li>
            <li>Cidade: <?=$primeiro[6]?></li>
        </ul>
    </section>
    <section >
        <h2><?=$segundo[0]?></h2>
        <ul>
            <li>Email: <?=$segundo[2]?></li>
            <li>Idade: <?=$segundo[4]?></li>
            <li>sexo: <?=$segundo[5]?></li>
            <li>Cidade: <?=$segundo[6]?></li>
        </ul>
    </section>
</article>
    
</body>
</html>