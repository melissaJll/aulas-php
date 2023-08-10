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
       <a href="exercicio06.php">Tentar Novamente →</a>
       <!-- ALTERAR -->
<?php    
    } else{
        // Atribuição à variável de acordo com o name=""
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_INT);
        $fabricante = $_POST["fabricantes"];
        $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
  
?>
        <!-- O que será exibido -->
        <p><b>Nome do Produto:</b> <?=$nome?></p>
        <p><b>Fabricante:</b> <?=$fabricante?></p>
        <p><b>Preço:</b> R$<?=number_format($preco, 2, ",", ".")?></p>
        <p><b>Disponibilidade:</b> <?=$disponibilidade?></p>
        <p><b>Descrição do produto:</b> <?=$descricao?></p>
<?php } ?>
</body>
</html>
