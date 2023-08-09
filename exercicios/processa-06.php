<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
<?php
$fabricantes = ["Dell","EPCOM","Lenovo","HP"];
?>

<?php
    if( empty($_POST["nome"]) || empty($_POST["preco"])){
?>
       <p>Você deve preencher <b>Nome</b> e <b>Preço!</b></p>
<?php    
    } else{
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
    }  
?>
    
</body>
</html>