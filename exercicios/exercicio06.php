<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 06</title>
    <style>
        body {background: rgb(176,232,114);
        background: linear-gradient(304deg, rgba(176,232,114,1) 0%, rgba(114,209,232,1) 50%); height: 98vh}
        form{
        margin: auto;
        border: 1px rgb(155, 155, 155);
        border-radius: 6px;
        width: 35%;
        height: 80%;
        padding: 20px;
        background-color: rgba(253, 253, 253, 0.829);
    }
    form input{
        padding: 12px;
        border-radius: 4px;
        border: solid 1px rgb(139, 139, 139);
    }
    .width-80{width: 75%;}
    html{
    font-family: 'Roboto', sans-serif; font-size: 13px;
}
    </style>
</head>
<body>
<?php  $fabricantes = ["","Dell","EPCOM","Lenovo","HP"]; 
?>

    <div class="container">
        <form action="../exercicio/processa06.php" method="post">
            <!-- ALTERAR -->
            <p>
                <label for="nome">Nome do produto:</label>
                <input class="width-80" type="text" name="nome" id="nome" required>
            </p>
            <label for="fabricantes">Escolha o fabricante: </label>
            <select id="fabricantes" name="fabricantes">
                <?php
                foreach ($fabricantes as $fabricante){ ?>
                    <option value=""><?=$fabricante?></option>
                <?php }?>
            </select>
            <p>
                <label for="preco">Preço</label><br>
                <input type="number" name="preco" step=".01" id="preco" min="100" max="10000" required>
            </p>
            <div>
                <p>Disponibilidade: </p>
                <input type="radio" id="sim" name="disponibilidade" value="Sim">
                <label for="sim">Sim</label>
                <input type="radio" id="nao" name="disponibilidade" value="Nâo">
                <label for="nao">Não</label>
            </div>
            <p>
                <label for="descricao">Descrição:</label><br>
                <textarea name="descricao" id="descricao" cols="50"  rows="6"></textarea>
            </p>
            <button type="submit" name="enviar" id="enviar"> Enviar </button>
        </form>
    </div>
    
</body>
</html>
