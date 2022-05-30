<section id="contact" class="bg-black text-white p-3">
  <div class="row mx-auto" style="width: 60%;">
    <h3 class="mb-5">Skontaktuj się z nami</h3>
    <div class="col-sm">
      <form action="contact.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Imię i nazwisko</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Adres email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Wiadomość</label>
          <textarea name="mess" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
          <input type="checkbox" name="accept_rodo" value=""> Akceptuję <a class="text-white text-decoration-none" href="./terms/privacy.php">politykę prywatności</a> oraz <a class="text-white text-decoration-none" href="./terms/rodo.php">RODO</a>

        </div>
        <input type="submit" name="send_mess" value="Wyślij" class="btn btn-danger">
      </form>
    </div>
    <div class="col-sm text-center">
      <h3 class="mb-3">Dane firmy</h3>
      <div class="mb-3">
        <p>ZigRent</p>
        <p>Wojska Polskiego 1</p>
        <p>60-001 Poznań</p>
        <p>Tel: <a href="tel:123456789" class="text-decoration-none">123 456 789</a></p>
        <p>E-mail: <a href="mailto:bok@zigrent.pl" class="text-decoration-none">bok@zigrent.pl</a></p>
      </div>
      <div class="mx-auto" id="compBranch" style="width: 80%; height: 40%;"></div>
    </div>
  </div>
</section>
