
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
    <h3>Consommation totale de vaccins dans les centres</h3>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">centre id</th>
          <th scope = "col">centre</th>
          <th scope = "col">adresse</th>
          <th scope = "col">total injection</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
          foreach ($results_1 as $element) {
           printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%d</td></tr>",
                   $element['id'],$element['centre'],$element['adresse'],$element['injection']);
          }
          ?>
      </tbody>
    </table>
    <?php
    
    echo ("<form role='form' method='get' action='router2.php'><input type='hidden' name='action' value='centreAttribution'> "
            . "<button class='btn btn-primary' type='submit'>Accès à la supplémentation vaccinale</button></form>");
    
    ?>
    
    <h3>Vaccin pour lequel le nombre d'injections est le plus élevé</h3>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">centre</th>
          <th scope = "col">vaccin</th>
          <th scope = "col">vaccin number</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
          foreach ($results_2 as $element) {
           printf("<tr><td>%s</td><td>%s</td><td>%d</td></tr>",
                   $element['centre'],$element['vaccin'],$element['vaccin_number']);
          }
          ?>
      </tbody>
    </table>
    <?php
    
    echo ("<form role='form' method='get' action='router2.php'><input type='hidden' name='action' value='innovation_2'> "
            . "<button class='btn btn-primary' type='submit'>Accès à la distribution rapide de vaccins</button></form>");
    
    ?>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  