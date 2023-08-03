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

    <hr>


    <h2>Função com retorno de dados</h2>
    <?php
    function dadosCurso(){
        return "<b>Tec para informática</b>";
    }
    ?>
    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ministrado na penha.</p>



    <hr>
    <h2>Função com parametros ou argumentos</h2>

    <?php
    function soma($valor1,$valor2,$valor3){ //são parametros não variaveis ()
        $total = $valor1 + $valor2+ $valor3; //total é uma variavel local por isso usar return
        return $total; //não pode chamar a <?=$total> direto sem o return
    }
    ?>
    <!-- Chamando e exibindo -->
    <p>Resultado 1: <?=soma(10,20,5)?></p>
    <p>Resultado 2: <?=soma(10,90,55)?></p>

    <!-- Chamando e Guardando o retorno -->
    <?php
    $resultado3 = soma(500,34,754);
    ?>
    <p>Resultado 3: <?=$resultado3?></p>
    <?php if($resultado3> 100){ ?>
        <p>Vinicius foi demitido</p>
    <?php } ?>
    
    <!-- Usando função como parte da condição -->
    <?php if(soma(2,3,10) >=10){?>
        <p> Kaue Reprovado</p>
    <?php } ?>

    <?php
    function saudacao($mensagem, $pessoa = "nome"){ //parametro opcional padrão se não tiver o segundo parametro
        return "Olá, $mensagem $pessoa"; 
    }
    ?>
    <p> <?=saudacao("Bom dia", "melissa")?></p>
    <p> <?=saudacao("Bom dia")?></p>


    <hr>

    <h2>Introdução a tipos de dados</h2>
    <!-- indução de tipos deve ser feita nos parâmetors e no retorno da função
    Isso influenciara na entrade e saída correta dos dados manipulados pela função, além de melhorar as mensagens de erros-->
    <?php
    function verififcaNegativo(int $valor):string{
        if($valor< 0){
            return "Negativo";
        } else{
            return "Não é negativo";
        }  
    }
    ?>
    <p> Número 10: <?=verififcaNegativo(10)?></p>
    <p> Número -10: <?=verififcaNegativo(-10)?></p>
</body>
</html>