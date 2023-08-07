<?php
// Fazendo a inclusão de um arquivo de recursos
require "recursos.php"; //caminho da pasta ex: ../

/* Diferença entre require ou include: a diferença entre eles é na forma como lidam no caso de acontecer algum erro na inclusão

Erros de carregamento com include, são alertas (warnings)
mas NÃO param completamente a aplicação.

Erros de carregamento com require, são erro fatal (fatal error), e param completamente a aplicação*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularização e Inclusão de Recursos</title>
</head>
<body>
    <h1>Modularização e Inclusão de Recursos</h1>
    <hr>

    <h2><?=ESCOLA?></h2>

    <p>Estamos fazendo o curso de <?=$curso?></p>


    <ul>
<?php foreach ($tecnologias as $tecnologia) { ?>
        <li><?=$tecnologia?></li>  
<?php } ?>    
    </ul>

    <p> O aluno Y  tem 20 anos logo é <?=verificaIdade(20)?> de idade</p>

    <hr>

    <article>
        <h2>Título qualquer</h2>
        <?php include "textos.php" ?>
    </article>


</body>
</html>