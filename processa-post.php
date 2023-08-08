<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>
    <p>Receber e processar dados via <b>POST</b></p>

    <pre> <?=var_dump($_POST)?></pre>
    <!-- Não aparece na URL -->

<?php
// verificar se os campos nome  eemail estão vazios
//Pegar do array post o "nome" e não a variavel $ que ainda não esxite nesse ponto 
    if (empty($_POST["nome"]) || empty($_POST["email"])) {
?>
        <p>Você deve preecher o nome e e-mail</p>
        <p><a href="10-formulario.html">Voltar</a></p>
<?php
    }else {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
        $interesses =$_POST["interesses"];
        $idade = $_POST["idade"];
?>

    <h2>Dados: </h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?> </li>
        <li>Interesses: <?=implode(", " , $interesses)?> </li><!-- É uma array então não pode ser chamado como uma variavel normal -->
        <li>Idade: <?=$idade?> </li>

        <!-- Não é obrigatório, se a $mensagem não estiver VAZIA mostre li preechido  -->
        <?php if(! empty($mensagem)){ ?>
            <li>Mensagem: <?=$mensagem?></li>
        <?php } ?>
    </ul>

<?php }?>
    
</body>
</html>