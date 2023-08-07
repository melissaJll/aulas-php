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

    <h3>extract()</h3>
    <!-- funcão que extrai chaves associativas para variáveis  -->
<?php
$aluno = [
    "id" => 1,
    "nome" => "charlie",
    "idade" => 25
];

extract($aluno); //transforma a chave em variavel na array associativa aluno["id"]
?>  
    <ul>
        <li>ID: <?=$id?></li>
        <li>Nome: <?=$nome?></li>
        <li>Idade: <?=$idade?></li>
    </ul>

    <h3>array_sum()</h3>
<?php
$total = array_sum($valores);
?>
    <p>Soma dos valores: <?=$total?></p>

    <h3>array_unique()</h3>
    <!-- Retorna um novo array com dados únicos -->

<?php
    $produtos = [
        "notebook", "tv", "notebook", "fone", "tv", "mouse"
    ];
    $produtosUnicos = array_unique($produtos)
?>
    <pre><?=var_dump($produtos)?></pre>
    <pre><?=var_dump($produtosUnicos)?></pre>



    <hr>
    <h2>Filtros</h2>
    <p>Recursos(Constantes) de análise e limpeza de dados aplicados através das funções <code>filter_var()</code> e <code>filter_input()</code></p>
    
    <h3>Validação</h3>
<?php
$email = "tiago.com.br" //"tiago@email.com.br"
?>
    <pre>
        <?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL))?> 
        <!-- filter car é generica o que especifica é (email, AQUI é uma constante) -->
    </pre>
    <h3>Sanitização</h3> 
<?php
$ataque = "<script>document.body.innerHTML = '<h1> Ataque </h1>'</script>";
$ataqueSanitizado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);
//execução com sanitização (script é anulado) vira um texto normal
echo $ataqueSanitizado;

//execução sem sanitização
// echo $ataque;
?>


    <hr>
    <h2>Segurança</h2>
</body>
</html>