<header class="header-main-page">
  <section class="header-main-page-top">
    <div class="container">
      <div class="row">
        <div class="col">
          <p><a href="tel:+48123456789" class="text-white text-decoration-none"><i class="fa-solid fa-phone"></i> Infolinia: +48123456789</a></p>
        </div>
        <div class="col" style="text-align: right;">
          <a href="#" class="text-decoration-none text-white" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa-solid fa-user"></i> Zaloguj się</a>
        </div>
      </div>
    </div>
  </section>
</header>

<!-- <div class="modal fade" id="loginModal" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog row d-flex justify-content-center align-items-center h-100">
    <div class="modal-content bg-dark text-white">
      <div class='modal-body mx-3'>
        <div class="mb-md-5 mt-md-4 text-center">

           header
          <h2 class="fw-bold mb-2 text-uppercase">uwaga policja</h2><br>
          <p class="text-white-50 mb-5">wyskakuj z pasów frajerze</p>

           middle
          <form action="" method="post">
            <div class="form-outline form-white mb-4">
              <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="numer jenca" />
            </div>

            <div class="form-outline form-white mb-4">
              <input type="password" name="passwd" id="passwd" class="form-control form-control-lg" placeholder="potwierdzenie hasla" />
            </div>

             footer
            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="reg_form.php">skleroza?</a></p>
            <input name='login_sub' class="btn btn-outline-light btn-lg px-5" type="submit" value='wrzuc mnie'>
            <label for="cls-modal">kys me</label><button type="button" id="cls-modal" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- o ile nie jestes zalogowany -->
        <h5 class="modal-title">Zaloguj się</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <label class="form-label">Wprowadź login</label>
            <input type="text" name="username" id="username" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Wprowadź hasło</label>
            <input type="password" name="passwd" id="passwd" class="form-control">
          </div>
          <p class="small mb-3 text-center"><a class="text-black" href="reg_form.php">Przypomnij hasło</a></p>
          <p class="mb-3 text-center"><a class="text-black" href="reg_form.php" >Nie masz konta? Zarejestruj się</a></p>
          <div class="modal-footer">
            <input name='login_sub' class="btn btn-danger" type="submit" value="Zaloguj się">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
