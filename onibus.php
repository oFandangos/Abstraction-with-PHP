<?php

class Onibus{
    var $modelo;
    var $marca;
    var $tamanho;
    var $ano;

    function Ligar(){
        echo '<p id="ligaro" style="display:none;">O onibus ligou, brumbrumbrum 🚌</p>';
    }

    function Desligar(){
        echo '<p id="desligar" style="display:none;">O onibus desligou</p>';
    }

    function abrirPortas(){
        echo '<p id="abrir" style="display:none;">O onibus abriu as portas</p>';
    }

}

?>