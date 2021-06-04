
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
    <h2>mes points de vue sur mon projet</h2>
      <ul>
          <li>Tout d'abord, je suis heureux d'avoir pu suivre ce cours LO07, j'ai vraiment apprécié le front-end et le back-end et ce cours m'a exposé à beaucoup de contenu sur le développement du front-end, ce qui l'a rendu doublement enrichissant.</li>
          <li>Le contenu de ce projet est très bon et le contrôle des vaccins est très important en ce moment. C'est très bien que nous utilisions le MVC pour réaliser ce site.j'ai pu le faire très rapidement lors de la création, en modifiant les choses rapidement, et les dossiers étaient très standardisés et parfaits pour que plusieurs personnes puissent travailler ensemble.</li>
          <li>Mais MVC a aussi quelques inconvénients, le couplage entre les fichiers est très élevé, lorsque vous modifiez un fichier, vous devez souvent modifier de nombreux autres fichiers, lorsqu'il y a des erreurs, le processus de recherche des bugs est long.</li>
          <li>Améliorations web : avec un peu de chance, bootstrap 5.0 sera appliqué à l'avenir pour améliorer l'interface utilisateur; ajouter des fonctions de visualisation pour rendre l'analyse des données plus intuitive.</li>
          <li>l'evolution du site：J'ajouterai de nouvelles fonctionnalités et une nouvelle interface plus tard, lorsque j'aurai plus de données. Je téléchargerai également mon site sur Github par la suite, ce qui permettra à davantage de personnes d'itérer sur mon code et de mettre à jour mon site.</li>
      </ul>
  </div>
  </div>
     
  
    
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  


