
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
    <h2>Statut vaccinal du patient</h2>
      <ul>
        <li>Je voulais rechercher des informations spécifiques à un patient, mais je ne les ai pas trouvées, alors j'ai ajouté ce tableau.</li>
        <li>Fonction principale : afficher des informations spécifiques sur la vaccination de chaque patient. Notamment sa nième vaccination, l'étiquette sur laquelle il a reçu le vaccin et les informations sur l'hôpital de vaccination.</li>
        <li>Il existe également un bouton qui vous permet de passer à l'écran d'ajout de nouveaux rendez-vous.</li>
    </ul>
  </div>
  </div>
     
  
    
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  


