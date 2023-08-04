<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 05</title>
    <style>
        .red{color: red;}
        .blue{color: blue;}
    </style>
</head>
<body>
    <?php
    $nota1 = 9;
    $nota2 = 1;
    function media($valor1, $valor2){
        $media = ($valor1 + $valor2)/2;
        return $media;
    }?>
    <p>A média de <?=$nota1?> e <?=$nota2?> é <?=media($nota1,$nota2)?></p>

    <?php
     $resultado = media($nota1,$nota2);

     function verificador($resultado){
        if ($resultado > 6){
            return "<span class='blue'>Aprovado</span>";
        ?>
        <?php } 
        return "<span class='red'>Reprovado</span>";
        }
        ?>
        <p><?= verificador($resultado)?></p>
    
    
</body>
</html>