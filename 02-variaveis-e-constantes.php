<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando dados na memória</title>
</head>
<body>
<h1>Manipulando dados na memória</h1>

<?php
//Variaveis

//String
$curso = "Técnico em informática para Internet";

//Inteiro (integer)
$ano = 2023;

//float(real)
$preco = 2500.25;

echo "<h2> Saída de dados usando echo na sintaxe COMPLETA</h2>";

echo $curso; //sem estrututa/tag
echo "<p>$curso</p>"; //interpolação - somente com ""
echo '<p>$curso</p>'; //Interpretado como texto
echo "<p>".$curso."</p>";//concatenação

echo "<p><b>Ano letivo:</b> $ano</p>";
echo "<p><b>Preço: </b>$preco</p>";

?>
<h2>Saída de dados SIMPLIFICADA</h2>
<p><?php echo $curso?></p>
<p><?= $curso?></p>
<p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?></p>

<?php
    //Constantes

    //1° forma: Usando a função define()
    define("MEU_NOME", "Melissa J.");

    //2° forma: usando a palavra-chave const(letra maiúscula)
    const UNIDADE = "Penha";

    //Saída de dados constantes - Const não interpola
    echo MEU_NOME;
    echo "<p><b>".MEU_NOME."</b></p>";

?>

<!-- Saída Simplificada-->
<p>Me chamo <b><?=MEU_NOME?></b> e estou no senac <?=UNIDADE?></p>

</body>
</html>