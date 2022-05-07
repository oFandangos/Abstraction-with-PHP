<!doctype html>
<html lang="en">
  <head>
    <title>Página inicial</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="script.js"></script>
  </head>
  <body>
    <div class="conteiner">
      <div class="linha">
      <h1>Aula abstração</h1>
    <br>
      <?php
      //Mago
        echo '<h4>Mago</h4>';
        require 'mago.php';

        $patolino = new Mago;
        
        $patolino->varinha = "Varinha zika";
        $patolino->magia = "Fogo";
        $patolino->powerlvl = 8000;

        $patolino->Atacar();
        $patolino->Estudar();
        $patolino->Loot();
        ?>

        <button onclick="Mudarestado('ataque')">Atacar</button>
        <button onclick="Mudarestado('estudo')">Estudar</button>
        <button onclick="Mudarestado('lotear')">Lotear</button>

        <?php
        //Moto
        echo '<h4>Moto</h4>';
        require 'moto.php';

        $honda = new Moto;

        $honda->marca = "Honda";
        $honda->motor = "V8";
        $honda->cor = "Branco escuro";
        $honda->ano = 2023;

        $honda->Ligar();
        $honda->Acelerar();
        $honda->corteDeGiro();
?>

        <button onclick="Mudarestado('ligar')">Ligar Moto</button>
        <button onclick="Mudarestado('acelerar')">Acelerar</button>
        <button onclick="Mudarestado('cortar')">Cortar Giro</button>

<?php

        //Inventário de jogo
        echo '<h4>Inventário de jogo</h4>';
        require 'inventory.php';

        $invent = new Inventory;
        //mostra se tem espaço livre ou está com todos os espaços ocupados
        $invent->freespace = true;
        $invent->armadura = "Armadura de Havel";
        $invent->estus = "Vida, Mana";

        $invent->Guardar();
        $invent->usarItem();
        $invent->Curar();
?>
        <button onclick="Mudarestado('guarda')">Guardar Item</button>
        <button onclick="Mudarestado('usar')">Usar Item</button>
        <button onclick="Mudarestado('cura')">Usar item de cura</button>

<?php

        //Onibus
        echo '<h4>Onibus</h4>';

        require 'onibus.php';

        $bus = new Onibus;

        $bus->modelo = '278JZ';
        $bus->marca = 'Mercedez';
        $bus->tamanho = '4,25M';
        $bus->ano = 2011;

        $bus->Ligar();
        $bus->Desligar();
        $bus->abrirPortas();

      ?>
      <button onclick="Mudarestado('ligaro')">Ligar ônibus</button>
      <button onclick="Mudarestado('desligar')">Desligar ônibus</button>
      <button onclick="Mudarestado('abrir')">Abrir/Fechar portas</button>
  </div>
</div>
      <style>
        body{
          background-color:rgb(29,29,29);
        }

        .conteiner{
          min-width:100%;
          display:grid;
          margin: 0 auto;
          justify-items:center;
        }
      
        .linha{
          display:grid;
          min-width:50%;
        }

        h1{
          text-align:center;
          color:white;
        }
        h4{
          text-align:center;
          margin-top:20px;
          color:white;
        }
        button{
          outline:none;
          border:2px solid rgba(0,0,0,0);
          background-color: rgb(90, 20, 120);
          color:white;
          padding:10px;
          margin-bottom:5px;
          border-radius:5px;
          transition: 0.2s ease;
        }
        button:hover{
          outline:none;
          background-color:rgba(0,0,0,0);
          border: 2px solid rgb(90,20,120);
          color: white;
        }

        button:focus{
          outline:none;
        }

        p{
          width:100%;
          text-align:center;
          color:white;
          background-color:rgba(60,60,60,0.5);
          border-radius:5px;
          padding:10px;
        }

      </style>
  </body>
</html>