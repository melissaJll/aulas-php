<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas PHP</title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3>Trim()</h3>
<?php
// Remove espaços antes e depois de strings.
$nome = "         espaço exagerado    ";
$nomeSemEspaco = trim($nome);
?>
    <pre> <?=var_dump($nome)?></pre>
    <pre> <?=var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>
<?php
// função que permite substituição de strings/caracteres

$fraseFeia = "<p>Palavrão</p>";
$fraseCensurada = str_replace(
["Palavrão", "Bobão"], 
"********", 
$fraseFeia
);
?>
    <!-- Exibição -->
    <p><?=$fraseFeia?></p>
    <p><?=$fraseCensurada?></p>

    <h3>explode()</h3
<?php
// string para array
$linguagens = "HTML - CSS - JS";
$arrayLinguagens = explode("-", $linguagens);
?>
    <pre> <?=var_dump($linguagens)?></pre>
    <pre> <?=var_dump($arrayLinguagens)?></pre>


    <hr>
    <h2>Numéricas</h2>
    <h3>min, max, round</h3>
<?php
$valores = [10, 5, 50, 1200, 275];
$valorQualquer = 129.3;
?>

    <p>Maior valor: <?=max($valores)?></p>
    <p>Menor valor: <?=min($valores)?></p>
    <p>Arredondamento: <?=round($valorQualquer)?></p>


    <hr>
    <h2>Arrays</h2>
    <h3>implode()</h3>

<?php
// Função que transforma array em string
$bandas = ["Rush", "Slayer", "Dio"];
$textoBandas = implode( ", ", $bandas);
?>
    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($textoBandas)?></pre>

    <hr>
    <h2>Filtros</h2>


    <hr>
    <h2>Segurança</h2>
</body>
</html>