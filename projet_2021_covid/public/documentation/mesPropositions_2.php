
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
      
      <div>
    <h2>Distribution rapide de vaccins</h2>
      <ul>
          <li>L'interface d'affectation traditionnelle rend le fonctionnement trop lent.</li>
          <li>Dans cette interface, vous pouvez suivre toutes les informations sur le centre et les vaccins en même temps. Il vous permet également de distribuer rapidement les vaccins à chaque centre.</li>
          <li>Principales caractéristiques : 1. obtention d'un tableau d'informations sur les centres et les vaccins. 2. possibilité d'ajouter le type de vaccin approprié directement au centre sélectionné en cliquant sur un bouton.</li>
          <li>Pour : la possibilité de distribuer rapidement les vaccins, ainsi que la possibilité de voir exactement combien de vaccins sont disponibles.</li>
      </ul>
  </div>
  </div>
     
  
    
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  


