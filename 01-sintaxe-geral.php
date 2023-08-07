<?php
include "recursos.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe geral - <?=ESCOLA?></title>
    <style>
        p{ font-family: "Verdana";}
        .destaque {text-transform: uppercase;}
    </style>
</head>
<body>
    <h1 class="destaque"> Trabalhando com PHP</h1>
    <hr>

    <?php
        //Gerando texto estruturado (string)
        echo "Text estruturado - String";

        //Classes CSS
        echo "<p class='destaque'>Text estruturado - String</p>";

        //Gerando texto estruturado (com tag, atributos)
        echo "<h1>Texto com tags e atributos</h1>";

        //CSS Inline - "" do atributo
        echo "<p style=\"color: red\" > Css Inline</p>";
        echo "<p style='color: green' > Css Inline</p>";
        echo '<p style=" color: pink" > Css Inline</p>';

    ?>

<script>
    //QuerySelector - primeiro
    // All - todos os .destaque
let destaque = document.querySelector("destaque");
console.log(destaque)

</script>

</body>
</html>