<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 06</title>
    <style>
        body {background: rgb(176,232,114);
        background: linear-gradient(304deg, rgba(176,232,114,1) 0%, rgba(114,209,232,1) 50%); height: 99vh}
        form{
        margin: 20px auto 0 auto;
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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

<!-- <form>
  <div class="mb-3">
    <label for="exampleInputNome" class="form-label">Nome do produto</label>
    <input type="text" class="form-control" id="exampleInputNome" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
   </div>

   <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
    </div>


   <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1"> 1</label>
   </div>
   <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2"> 2</label>
  </div> <br> <br>


   <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form> -->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
