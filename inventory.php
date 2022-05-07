<?php

    class Inventory{
        var $freespace;
        var $armadura;
        var $estus;

        function Guardar(){
            echo '<p id="guarda" style="display:none;">O jogador guardou um item no inventário 🎒</p>';
        }

        function usarItem(){
            echo '<p id="usar" style="display:none;">O jogador usou um item do inventário 🥕</p>';
        }

        function Curar(){
            echo '<p id="cura" style="display:none;">O jogador se curou 🟢</p>';
        }
    }
?>