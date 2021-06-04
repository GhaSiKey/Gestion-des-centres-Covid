
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
    <h2>Consommation de vaccins par centre</h2>
      <ul>
          <li>Cette interface permet au responsable de comprendre rapidement et clairement la situation de l'épidémie dans chaque centre.</li>
          <li>Fonctions principales : Tableau 1 : Obtenez combien d'injections ont été faites au total dans chaque centre. Tableau 2 : Obtenir le plus grand nombre d'injections d'un vaccin par centre</li>
          <li>Sous chaque tableau se trouve un bouton qui permet de passer à la page appropriée pour aider le responsable à modifier rapidement les données.</li>
      </ul>
  </div>
  </div>
     
  
    
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  


