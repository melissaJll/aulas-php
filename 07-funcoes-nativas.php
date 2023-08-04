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

    
    <h2>Numéricas</h2>

    <h2>Arrays</h2>

    <h2>Filtros</h2>

    <h2>Segurança</h2>
</body>
</html>