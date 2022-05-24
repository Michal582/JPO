<?php
  include('triggers.php');

?>

<!DOCTYPE html>
<html lang="pl">

  <?php include('head.php'); ?>
  <body>

    <?php include('./view/header-main.php');
          include ('./view/navbar-main.php');
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
      <?php
        include './view/promotion-main.php';
        include './view/search-main.php';
        include './view/aboutus.php';
        include './view/fleet.php';
      ?>
    </main>

    <?php include('./view/footer.php'); ?>


  </body>
</html>


<!-- IMPORTANT:  musi byc script na koncu zeby eventlistener dzialal xd -->
<script src="./script/script.js" charset="utf-8"></script>
