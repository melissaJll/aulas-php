<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estruturas de controle de Repetição</h1>
    <hr>

    <h2>While</h2>

    <?php
    $i= 1;

    while($i<=5){
    ?>

        <p><?=$i?></p>

    <?php    
        $i++;
    }
    ?>


    <h2>Do/While</h2>
    <!-- acontece pelo menos uma vez antes de verificar a condição -->

    <?php
    $j = 1;
    do{
    ?>
        <div>
            <h3>Titulo <?=$j?></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ducimus eligendi distinctio id obcaecati quasi molestiae.</p>
        </div>

    <?php
    $j++;
    }while($j <= 5);
    ?>

    <h2>For</h2>

    <?php
    for($i=1; $i <= 3; $i++){
    ?>
        <p><code>i</code> vale: <b><?=$i?></b></p>
    
    <?php    
    }
    ?>

<!-- 
    Mini exercicio 25/07/2023
Leitura de Array usando um dos Loops usado em aula
Exibição em Lista Ordenada
Array Lenght
-->


<?php
$meses = ["Janeiro","Fevereiro","Março","Abril","Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>

<ol>
<?php

$qtdAlunos = count($meses);
for ($i=0; $i < $qtdAlunos; $i++) { 
?>
    <li><?=$meses[$i]?></li>

<?php
}
?>
</ol>


<hr>
<h2>For each</h2>
<!-- Mais fácil para lidar com arrays -->
<!-- Para cada mês contidos nos meses -->

<ol>
    <?php foreach ($meses as $mes){ ?>
        <li> <?=$mes?></li>
    <?php } ?>
</ol>




<h3> Msnipulando arrays Associativas</h3>
<?php
$clubes = [
    "Corinthians" => "Timão",
    "Palmeiras" => "Porco",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe"
];

foreach ($clubes as $clube => $apelido) {
?>
    <p>O <?=$clube?> é conhecido como <?=$apelido?>.</p>
<?php
}
?>




<h2>Loop com Matriz</h2>
<?php
$planoDeEstudos = [
    ["HTML", "CSS", "JS"],
    ["React","React Native"]
];
// Usando for aninhado
for($linha = 0; $linha< count($planoDeEstudos); $linha++){
    for($coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++){
?>

    <p><b><?=$planoDeEstudos[$linha][$coluna]?></b></p>

<?php
    }
}
?>

<hr>



<?php
//usando foreach aninhado
//Para cada linha do Plano dos estudos, olhe cada coluna da linha
foreach ($planoDeEstudos as $linha) {
    foreach( $linha as $coluna){
?>
    <p><i><?=$coluna?></i></p>

<?php
    }
}
?>

<h3>Matriz Associativa</h3>
<?php
$clientes = [
    // 0
    [
        "nome" => "Chaves",
        "idade" => 8
    ],
    // 1
    [
        "nome" => "Chapolin",
        "idade" => 25
    ],
    // 2
    [
        "nome" => "Chiquinha",
        "idade" => 10
    ]
];



foreach ($clientes as $cliente) { 
?>
    <p>Nome: <?=$cliente["nome"]?></p>
    <p>Idade: <?=$cliente["idade"]?></p>
<?php
}
?>

<!-- Sintaxe de estruturas de controle condicionais e loops 

if (cond) {
} else {
}
    OU
if (cond):
else :
endif; endfor
-->

</body>
</html>