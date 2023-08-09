<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 06</title>
</head>
<body>
<?php  $fabricantes = ["Dell","EPCOM","Lenovo","HP"]; ?>

    <form action="../exercicios/processa-06.php" method="post">

        <p>
            <label for="nome">Nome do produto:</label>
            <input type="text" name="nome" id="nome" required>
        </p>

        <label for="fabricantes">Escolha o fabricante: </label>
        <select id="fabricantes" name="fabricantes">
            <?php
            foreach ($fabricantes as $fabricante){ ?>
                <option value=""><?=$fabricante?></option>
            <?php }?>
        </select>

        <p>
            <label for="preco">Preço</label>
            <input type="number" name="preco" step=".01" id="preco" min="100" max="10000" required>
        </p>

        <div>
            <p>Disponibilidade: </p>
            <input type="radio" id="sim" name="disponibilidade" value="sim">
            <label for="sim">Sim</label><br>
            <input type="radio" id="nao" name="disponibilidade" value="nao">
            <label for="nao">Não</label><br>
        </div>
        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="50"  rows="6"></textarea>
        </p>
        <button type="submit" name="enviar" id="enviar"> Enviar </button>
    </form>
    
</body>
</html>