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
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        // $nome = filter_var($_POST["nome"], FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
        $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
        // $interesses = $_POST["interesses"] ?? [];
        //Neste caso é um ARRAY
        $interesses = filter_var_array($_POST["interesses"] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);


        //se existe
        /* if (isset($_POST["interesses"])) {
               $interesses =$_POST["interesses"];
           }else{
               $interesses = array(); ou = [];
           }*/

        /* operador de coalescência: ??
         $interesses = $_POST["interesses"] ?? [];*/
?>

    <h2>Dados: </h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?> </li>
        <li>Idade: <?=$idade?> </li>

        <!-- apenas para que o espaço não fique vazio, esse código nem mostra "Interesses:     "-->
        <?php if(!empty($interesses)){ ?>
            <!-- Exibição Normal -->
            <!-- É uma array então não pode ser chamado como uma variavel normal por isso implode()-->
            <li>Interesses: <?=implode(", " , $interesses)?> </li>

            <!-- Exibição formato de Lista -->
            <li>Interesses: 
                <ul>
                    <?php foreach($interesses as $interesse){?>
                        <li><?=$interesse?></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>

        <!-- Não é obrigatório, se a $mensagem não estiver VAZIA mostre li preechido  -->
        <?php if(!empty($mensagem)){ ?>
            <li>Mensagem: <?=$mensagem?></li>
        <?php } ?>
    </ul>

<?php }?>
    
</body>
</html>