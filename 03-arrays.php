<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Arrays</title>
    <style>
        /*.blue{color:blue;}
        .red{color:red} */
        ul>li:nth-child(even){color: red}
        ul>li:nth-child(odd){color: blue}
    </style>
</head>
<body>
    <h1>Trabalhando com Arrays (vetores e matrizes)</h1>
    <hr>

    <h2>Array com índice numérico</h2>
<?php

//Sintaxe com colchetes
$bandas = ["Savatage", "Dio", "Rush"];

//Sintaxe com função array()
$curso = array("HTML", "Node","PHP");

//Sintaxe de atribuição
$buteco[0] = "Bolinho de bacalhau";
$buteco[1] = "Pastel";
$buteco[2] = "Esfiha";



// Constantes de Array no PHP 7+
define("UNIDADES", ["Penha", "Tatuapé"]);

const FRUTAS = ["Morango", "Abacaxi","Limão"] ;
?>


<h3>Acessando os dados</h3>
<ol>
    <li>Banda que mais gosto: <?=$bandas[2]?></li>
    <li>Curso básico de: <?=$curso[0]?></li>
    <li>Quero comer <?=$buteco[1]?></li>

    <!-- Saída de constantes -->
    <li>Estamos no senac<?=UNIDADES[0]?></li> 
    <li>Fruta boa para caipirinha: <?=FRUTAS[2]?></li>
</ol>
<hr>



<h2>Array Associativa</h2>
<?php

$curso = [
    //Chave associativa
    //             vale     
    //Identificador => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 150,
    "descritivo" => "Aprenda a ferver água"
];
?>

<h3>Acessando dados</h3>
<p>Nome do curso: <?=$curso["titulo"]?></p>
<p>Carga Horária: <?=$curso["carga_horaria"]?>h</p>
<p>Descritivo: <?=$curso["descritivo"]?></p>
<hr>

<h2>Matriz (array dentro de array)</h2>

<?php
$planoDeEstudos = [
    ["Js Avançado", "Node.js", "React"],
    ["PHP","POO","MySQL","Python"],
    ["Teoria das Cores","Photoshop", "UX/UI"]
];
?>

<ul>
    <li><?=$planoDeEstudos[0][2]?></li>
    <li><?=$planoDeEstudos[1][2]?></li>
    <li><?=$planoDeEstudos[2][1]?></li>
    <li><?=$planoDeEstudos[2][0]?></li>
</ul>


<hr>
<h2>Funções de análise de estruturas de dados (debug)</h2>

<h3>print_r( )</h3>

<pre>
    <?=print_r($bandas)?>   
</pre>

<h3>var_dump()</h3> 
<!-- pre: faz a pré formatação e deixa os dados da string mais legivéis -->
<pre>
    <?=var_dump($bandas)?>
</pre>

<pre>
    <?=var_dump($planoDeEstudos)?>
</pre>



</body>
</html>