<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar{color: red;}
        .urgencia{background-color: yellow; font-weight: bold; color: brown; display: inline-block;}
        .normal{color: green;}
    </style>
</head>
<body>


<h1>Estruturas condicionais</h1>
<hr>

    <h2>Simples</h2>

<?php

$numero = 5;
if($numero > 1){
    echo "<p>$numero é maior que 1</p>";
}

//sintaxe sem chaves - fechamento pelo ';'
if($numero > 1) echo "<p> $numero é maior que 2</p>";
?>

    <h2>Condicionais</h2>

<?php
$produto = "Ultrabook asus";
$qtdEmEstoque = 00; //O que temos atualmente
$qtdCritica = 15; // Mínimo necessário

echo "<h3>$produto</h3>";
echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

if($qtdEmEstoque < $qtdCritica){
    echo "<p class = 'comprar'>É necessário comprar!</p>";
    if ($qtdEmEstoque == 0) {
        echo "<p class = urgencia >URGENTE!</p>";
    }

}else{
    echo "<p class = 'normal'>Estoque normal</p>";
}
?>

    <h2>Encadeada</h2>

<?php
/*Opções de exemplo:
1- lanche,
2- pizza
3- paçoca*/
$opcaoEscolhida = 4; //definimo so valor que seria dado pelo usuario

echo "<h3> Pedido: opção $opcaoEscolhida º</h3>";
if ($opcaoEscolhida == 1) {
    echo "<p>Ok! vamos fazer o lanche</p>";
}elseif ($opcaoEscolhida == 2) {
    echo "<p>Pizza no forno!</p>";
}
elseif ($opcaoEscolhida == 3) {
    echo "<p> Paçoca pronta </p>";
}
else{
    echo "<p> Opção Inválida!</p>";
}

//Exemplo ===
/*A comparação é feita em relação ao valor e ao tipo de dados. portanto é mais restrito*/

$a = 10;
$b = 10;
$resultado = $b == $a;

var_dump($resultado);
echo " <br>";
var_dump($a);
echo "<br>";
var_dump($b);

?>

</body>
</html>