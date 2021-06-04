
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
    printf ("<h3>There is no vaccin left, please come back ater.</h3>");
    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    