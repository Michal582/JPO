<?php
  include('triggers.php');

?>

<!DOCTYPE html>
<html lang="pl">

  <?php include('head.php'); ?>
  <body>

    <?php include('header-main.php');
          include ('navbar-main.php');
          include 'promotion-main.php';
          include 'search-main.php';
    ?>

    <?php
      if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        echo $_SESSION['username'];

        echo "
        <a href='?cmd=logout'>wyjeb</a>
        ";
      }

    ?>

    <main>

    </main>

    <?php include('footer.php'); ?>


  </body>
</html>


<!-- IMPORTANT:  musi byc script na koncu zeby eventlistener dzialal xd -->
<script src="./script/script.js" charset="utf-8"></script>
