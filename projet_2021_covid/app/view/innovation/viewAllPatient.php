
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
      <h3>Détails de l'injection du patient</h3>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">nom</th>
          <th scope = "col">prenom</th>
          <th scope = "col">nième injection</th>
          <th scope = "col">label de vaccin</th>
          <th scope = "col">centre</th>
          <th scope = "col">adress</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%s</td><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                   $element['nom'],$element['prenom'],$element['injection'],$element['vaccin'],$element['centre'],$element['adresse']);
          }
          ?>
      </tbody>
    </table>
    <?php
    
    echo ("<form role='form' method='get' action='router2.php'><input type='hidden' name='action' value='patientReadId'> "
            . "<button class='btn btn-primary' type='submit'>Ajouter de nouveaux rendez-vous</button></form>");
    
    ?>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  