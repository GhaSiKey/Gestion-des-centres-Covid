
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
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">centre id</th>
          <th scope = "col">centre</th>
          <th scope = "col">vaccin id</th>
          <th scope = "col">vaccin</th>
          <th scope = "col">quantite</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
          foreach ($results as $element) {
           printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%s</td><td>%d</td></tr>",
                   $element['centre_id'],$element['centre_label'],$element['vaccin_id'],$element['vaccin_label'],$element['quantite']);
          }
          ?>
      </tbody>
    </table>

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='attibutVaccin'>
        <label>Centre : </label> <select class="form-control" id='centre_id' name='centre_id' style="width: 300px">
            <?php
            foreach ($results_centre as $element) {
                $text = sprintf("%d : %s", $element->getId(), $element->getLabel());
                printf("<option value='%d'>%s</option>",$element->getId(),$text);
            }
            ?>
        </select>
            <?php
            foreach ($results_vaccin as $element) {
                printf("<label>%s :</label><p><button class='btn btn-primary' name='vaccin_id' value='%d' type='submit'>Add 10</button></p>",$element->getLabel(),$element->getId());
            }
            ?>
      </div>
      <p/>
    </form>
    <p/>
    
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  