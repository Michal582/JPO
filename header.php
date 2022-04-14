<nav class="navbar navbar-light navbar-expand-md fixed-top">
  <div class="container-fluid row">
    <div class="col">
      <a href="index.php" class="navbar-brand">ZigRent</a>
    </div>
    <div class="col">
      <div class="collapse navbar-collapse justify-content-center" id="navbar">
        <ul class="navbar-nav float-start">
          <li class="nav-item"><a class="nav-link" href="#">Rezerwuj auto</a></li>
          <li class="nav-item"><a class="nav-link" href="#">O nas</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Nasza flota</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontakt</a></li>
        </ul>
      </div>
    </div>
    <div class="col">
      <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button type="button" class="btn btn-danger float-end" name="button" data-bs-toggle="modal" data-bs-target="#loginModal">Zaloguj się</button>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog row d-flex justify-content-center align-items-center h-100">
    <div class="modal-content bg-dark text-white">
      <div class='modal-body mx-3'>
        <div class="mb-md-5 mt-md-4 text-center">
        
          <!-- header -->
          <h2 class="fw-bold mb-2 text-uppercase">uwaga policja</h2><br>
          <p class="text-white-50 mb-5">wyskakuj z pasów frajerze</p>

          <!-- middle -->
          <form action="" method="post">
            <div class="form-outline form-white mb-4">
              <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="numer jenca" />
            </div>
                  
            <div class="form-outline form-white mb-4">
              <input type="password" name="passwd" id="passwd" class="form-control form-control-lg" placeholder="potwierdzenie hasla" />
            </div>
                  
            <!-- footer -->
            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="reg_form.php">skleroza?</a></p>
            <input name='login_sub' class="btn btn-outline-light btn-lg px-5" type="submit" value='wrzuc mnie'>
            <label for="cls-modal">kys me</label><button type="button" id="cls-modal" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>