<!-- Neste caso, não faz muito sentido fazer include do processa-06.php inteiro.
Pelo que entendi, você só fez isso porque queria pegar os dados do array $fabricantes.
Se foi isso, o ideal era criar o array aqui mesmo na página exercicio06.

Ao fazer o include do processa-06, você está incluindo o array e todo o restante da página.
Veja o código-fonte HTML no navegador: vai aparecer uma página dentro da outra, com dois <!DOCTYPE> e tudo mais.
Não gerou problemas no seu exercício, mas numa aplicação real isso com certeza iria gerar muitos bugs. -->
<?php require "processa-06.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 06</title>
    <style>
        /* CSS ficou bem bacana, mas o ideal é que o seu CSS venha DEPOIS do CSS do Bootstrap.
        Desta forma, o seu CSS sempre terá prioridade. */
         body {background: rgb(160,219,236);
        background: linear-gradient(110deg, rgba(160,219,236,1) 30%, rgba(181,238,255,1) 99%); height: 100vh} 
        form{
        margin: 20px auto 0 auto;
        border: 1px rgb(155, 155, 155);
        border-radius: 6px;
        max-width: 38%;
        height: 80%;
        padding: 20px;
        background-color: rgba(253, 253, 253, 0.829);
        }
        .width-80{width: 70%;}
        .mrg-top18{ margin-top: 18px;}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>

    <!-- Podia ter pelo menos um <h1> aqui -->

    <div class="container">
        <!-- O caminho poderia ser apenas "processa-06.php", afinal, os dois arquivos
        estão juntos na mesma pasta (exercicios) -->
        <form action="../exercicios/processa-06.php" method="post">
            <div class="mb-3">
                <!-- Nome Produto -->
                <p>
                    <label label class="form-label" for="nome">Nome do produto:</label>
                    <input class="form-control width-80" type="text" name="nome" id="nome" required>
                </p>
            </div>
            <!-- Select Fabricante -->
            <div class="mb-3">
                <label class="form-label" for="fabricantes">Escolha o fabricante: </label>
                <select class="form-select" id="fabricante" name="fabricante">
                    <!-- PHP está correto, mas antes dele, é bom deixa um
                    <option> vazio (fora do PHP, usando HTML puro mesmo). -->
                    <?php
                    foreach ($fabricantes as $fabricante){ ?>
                        <option value="<?=$fabricante;?>"><?=$fabricante?></option>
                    <?php }?>
                </select>
            </div>
            
            <!-- Preço -->
            <label class="form-label"  for="preco" >Preço</label> 
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                    <input type="number" name="preco" step=".01" id="preco" min="100" max="10000" required>
            </div>
            <!-- Dsiponibilidade -->
            <div >
                <label label class="form-label" for="nome">Disponibilidade: </label><br>
                <input type="radio" id="sim" name="disponibilidade" value="Sim">
                <label for="sim">Sim</label>
                <input type="radio" id="nao" name="disponibilidade" value="Nâo">
                <label for="nao">Não</label>
            </div>

            <!-- text area -->
            <div class="mrg-top18">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição: </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <!--  Botão -->
            <button type="submit" class="btn bg-primary-subtle mrg-top18">Enviar</button>
        </form>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
