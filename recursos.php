<?php
define("ESCOLA", "Senac"); // constante
$curso = "Técnico em informatica para internet"; //variavel
$tecnologias = ["HTML", "CSS","JS"]; //array

function verificaIdade(int $idade):string{
    return $idade >= 18 ? "maior" : "menor";
}
?>