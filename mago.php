    <?php
      class Mago
      {
          var $varinha;
          var $magia;
          var $powerlvl;
      

      function Atacar()
      {
          echo '<p id="ataque" style="display:none;">O mago atacou ⚔</p>';
      }

      function Estudar()  
      {
          echo '<p id="estudo" style="display:none;">O mago estudou o pergaminho 📜</p>';
      }

      function Loot()
      {
          echo '<p id="lotear" style="display:none;">O mago adquiriou uma nova magia ✨</p>';
      }
    }
    ?>