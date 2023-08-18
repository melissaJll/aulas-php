<!DOCTYPE html>
<html id="processo" lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <style>
        html .processo{background-color: #e3f8ff;}
        .padding20{ padding: 20px;}
        .mrg-top18{margin: 8px;}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if( empty($_POST["nome"]) || empty($_POST["preco"])){
?>
        <div class="alert alert-info" role="alert">
           <p>Você deve preencher <b>Nome</b> e <b>Preço</b>!</p>
           <a class="btn btn-light" href="exercicio06.php"> Tentar Novamente →</a>
        </div>

<?php    
    } else{
        // Atribuição à variável de acordo com o name=""
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        // $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_INT);
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT);
        $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
        $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
  
?>
        <!-- O que será exibido -->
        <div class="card text-bg-light mb-3 padding20 .mrg-top18" style="max-width: 19rem;">
            <p><b>Nome do Produto:</b> <?=$nome?></p>
            <p><b>Fabricante:</b> <?=$fabricante?></p>
            <p><b>Preço:</b> R$<?=number_format($preco, 2, ',', ' ')?></p>
            <p><b>Disponibilidade:</b> <?=$disponibilidade?></p>
            <p><b>Descrição do produto:</b> <?=$descricao?></p>
        </div>
<?php } 
    } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
