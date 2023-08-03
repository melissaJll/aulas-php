<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>
    
    <h2>Funções como procedimentos ou sub-rotinas</h2>

    <?php
    function dadosAutor(){
        echo "<div></div>";
        echo "<div>Melissa Julia L. L.</div>";
        echo "<div><p><a href=''>m@email.com</a></p></div>"; 
        echo "<div></div>";
    }
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>
        <?=dadosAutor()?> 
        <!-- dadosAutor seria constante -->
    </section>

</body>
</html>