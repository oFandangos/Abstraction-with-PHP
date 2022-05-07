<?php

    class Moto{
        var $marca;
        var $motor;
        var $cor;
        var $ano;
        
        function Ligar(){
            echo '<p id="ligar" style="display:none;">A moto ligou 🛵</p>';
        }

        function Acelerar(){
            echo '<p id="acelerar" style="display:none;">A moto acelerou, Randandandandan! 🛵💨</p>';
        }

        function corteDeGiro(){
            echo '<p id="cortar" style="display:none;">A moto cortou giro 🛵</p>';
        }
    }
?>