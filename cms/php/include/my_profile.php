<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Mój profil</h5>
      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label" for="name">Imię</label><br>
            <input class="form-control" type="text" name="name" placeholder="Imię" required value="<?php session_start();
            echo $_SESSION['Name']; ?>" disabled>
          </div>
          <div class="mb-3">
            <label class="form-label" for="name">Nazwisko</label><br>
            <input class="form-control" type="text" name="lastname" placeholder="Nazwisko" required value="<?php session_start();
            echo $_SESSION['Last_name']; ?>" disabled>
          </div>
          <div class="mb-3">
            <label class="form-label" for="name">Email</label><br>
            <input class="form-control" type="email" name="email" placeholder="Email" required value="<?php session_start();
            echo $_SESSION['Email']; ?>" disabled>
          </div>
          <div class="mb-3">
            <label class="form-label" for="name">Login</label>
            <input class="form-control" type="text" name="login" placeholder="Login" required value="<?php session_start();
            echo $_SESSION['login']; ?>" disabled>
          </div>
          <button class="btn btn-primary m-1" type="submit" name="submit" style="width:99.2%;" onclick="window.location.href ='edit_profile.php'">
          Edytuj profil
          </button>
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