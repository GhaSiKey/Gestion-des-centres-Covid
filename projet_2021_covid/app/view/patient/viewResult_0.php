
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    printf ("<h3>You have choosed the center : %s</h3>",$results[0]);
    printf ("<h3>The vaccin you will inject is : %s</h3>",$results[1]);
    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    