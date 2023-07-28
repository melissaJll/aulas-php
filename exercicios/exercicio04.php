<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
        tr:nth-child(even){
            background-color: aquamarine;
        }
        th{background-color: #fa8c64;}
        tr:hover{
            background-color: #dedede;
        }
        table, td, th{
            border:1px solid #210f00; 
            border-collapse: collapse;
            text-align: center;
        }
        .pink{background-color: pink;}
        .dark-pink{background-color: #db4fb4;}
        th, td{ padding: 6px 10px; color: #292928; }
    </style>
</head>
<body>

<?php
$id = 0;
$linguagens = [
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
];
?>

<table>
    <tr>
        <th class="dark-pink">Id</th>
        <th>Linguagem</th>
        <th>Descrição</th>
    </tr>


<?php
foreach ($linguagens as $linguagem => $descricao) {
    $id++;
?>

    <tr>
        <td class="pink"><?=$id?></td>
        <td><?=$linguagem?></td>
        <td><?=$descricao?></td>
    </tr>

<?php
}
?>
</table>
    
</body>
</html>