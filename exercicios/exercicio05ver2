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
        $alunos = [
            ["nome" => "Eliel",
            "nota1" => 7,
            "nota2" => 5],
            [
            "nome" => "Eliel",
            "nota1" => 7,
            "nota2" => 5
            ],
            [
            "nome" => "Eliel",
            "nota1" => 7,
            "nota2" => 5
            ]

            ];

     $resultado = media($nota1,$nota2);

     function verificador($resultado){
        if ($resultado > 6){
            return "<span class='blue'>Aprovado</span>";
        ?>
        <?php } 
        return "<span class='red'>Reprovado</span>";
        }
        foreach( $alunos as $aluno ){
            $nome = $aluno['nome'];
            $resultado = media($nota1['nota1'],$nota2['nota2']);
            $situacao = verificador($resultado);
        }
        
        ?>
        <p><?= verificador($resultado)?></p>
    
</body>
</html>