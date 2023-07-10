<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Edytuj profil</h5>
      <div class="card">
        <div class="card-body">

          <form name="edit_account" action="../lib/edit_account.php" method="POST">
            <div class="mb-3">
              <label class="form-label" for="name">Podaj imię</label><br>
              <input class="form-control" type="text" name="name" placeholder="Imię" required value=<?php session_start();
              echo $_SESSION['Name']; ?>>
            </div>
            <div class="mb-3">
              <label class="form-label" for="name">Podaj nazwisko</label><br>
              <input class="form-control" type="text" name="lastname" placeholder="Nazwisko" required value=<?php session_start();
              echo $_SESSION['Last_name']; ?>>
            </div>
            <div class="mb-3">
              <label class="form-label" for="name">Podaj email</label><br>
              <input class="form-control" type="email" name="email" placeholder="Email" required value=<?php session_start();
              echo $_SESSION['Email']; ?>>
            </div>
            <input class="btn btn-primary m-1" type="submit" name="submit" value="Edytuj dane" style="width:99.2%;">
            <p></p>
            <h5 class="error">
              <?php
              session_start();
              echo $_SESSION['error'];
              unset($_SESSION['error']);
              ?>
            </h5>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>