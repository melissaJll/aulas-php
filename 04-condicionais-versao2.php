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


<h1>Estruturas condicionais (VERSÃO 2)</h1>
<hr>

    <h2>Simples</h2>

<?php
//mudança php
$numero = 5;
if($numero > 1){
?>

    <!-- html -->
    <p><?=$numero?> é maior que 1</p>


<?php
}
//sintaxe sem chaves - fechamento pelo ';'
if($numero > 1) echo "<p> $numero é maior que 2</p>";
?>

    <h2>Composta</h2>

<?php
$produto = "Ultrabook asus";
$qtdEmEstoque = 00; //O que temos atualmente
$qtdCritica = 15; // Mínimo necessário
?>

    <h3><?=$produto?></h3>
    <h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>

<?php
if($qtdEmEstoque < $qtdCritica){
?>
    <!-- html -->
    <p class = "comprar">É necessário comprar!</p>

<?php
    if ($qtdEmEstoque == 0) {
?>

    <!-- html -->
    <p class = "urgencia" >URGENTE!</p>

<?php
    }
}else{
?>
    <!-- html -->
    <p class = "normal">Estoque normal</p>


<?php
}
?>

    <h2>Encadeada</h2>

<?php
/*Opções de exemplo:
1- lanche,
2- pizza
3- paçoca*/
$opcaoEscolhida = 1; //definimo so valor que seria dado pelo usuario
?>


    <h3> Pedido: opção <?=$opcaoEscolhida?> º</h3>
<?php
if ($opcaoEscolhida == 1) {
    $mensagem = "Ok! vamos fazer o lanche";

}elseif ($opcaoEscolhida == 2) {
    $mensagem = "Pizza no forno!";

}
elseif ($opcaoEscolhida == 3) {
    $mensagem = "Paçoca pronta";

}
else{
    $mensagem = "Opção inválida!";
}
?>

<p><?=$mensagem?></p>

<?php
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