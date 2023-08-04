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
    
    
    function media(float $valor1, float $valor2):float {
        $media = ($valor1 + $valor2)/2;
        return $media;
    }?>
    <p>A média das notas <?=$nota1?> e <?=$nota2?> é <?=media($nota1,$nota2)?></p>

    <?php
     $resultado = media($nota1,$nota2);

     function verificador(float $resultado ): string{
        if ($resultado > 6){
            return "<span class='blue'>Aprovado</span>";
    
     } 
        return "<span class='red'>Reprovado</span>";
        }

        // return $valorMedia >= 7 ? "aprovado : "Reprovado";
    ?>
        <p><?= verificador($resultado)?></p>
    
    
</body>
</html>