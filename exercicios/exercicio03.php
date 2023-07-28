<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <style>
        @keyframes anima{
            0%{opacity: 0;}
            50%{opacity: 0.5;}
            100%{opacity: 1;}
        }
        .pisca{
            
            background-color: pink;
            display: inline-block;
            animation:  anima 1s infinite;

        }
    </style>
</head>
<body>

<?php
$salario = 1000;

if ($salario < 1500) {
    $novoSalario = $salario*1.15;
}elseif( $salario <= 3000){
    $novoSalario = $salario*1.10;
}else{
    $novoSalario = $salario*1.05;
}
?>
<P class="pisca">Salario antes do reajuste: R$ <?=number_format($salario,2,",",".")?></P>
<p>O novo salário: R$ <?=number_format($novoSalario,2,",",".")?></p>
    
</body>
</html>