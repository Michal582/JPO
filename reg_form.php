<!DOCTYPE html>
<html lang="pl">
  <?php

  include('triggers.php');
  include('head.php');

  ?>

  <body>

    <?php include('./view/header-main.php'); ?>
    <?php include './view/navbar-main.php' ?>

            <!-- header -->
            <p class="text-white-50 mb-5">rejestruj sie cepie</p>

            <!-- middle -->
          <div class='form-reg'>
            <form action="" method="post">
              <div class="form-outline form-white mb-4 w-25">
                <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="numer jenca" />
                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="email jenca" />
              </div>

              <div class="form-outline form-white mb-4 w-25">
                <input type="text" name="passwd" id="passwd" class="form-control form-control-lg" placeholder="haslo" />
                <input type="text" name="ConfirmPasswd" id="ConfirmPasswd" class="form-control form-control-lg" placeholder="powtorz to" /> <span class='text-danger invisible' id="password-matching">chuja nie pasuje</span>
              </div>

              <!-- footer -->
              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="index.php">skleroza??????</a></p>
              <input name='register_sub' id='register_sub' class="btn btn-outline-dark btn-lg px-5" type="submit" value='wrzuc mnie'>
            </form>
          </div>

    <?php include('./view/footer.php'); ?>
  </body>
</html>

<!-- IMPORTANT:  musi byc script na koncu zeby eventlistener dzialal xd -->
<script src="./script/script.js" charset="utf-8"></script>
