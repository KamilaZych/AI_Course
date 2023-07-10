<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Installer</title>
  <link rel="shortcut icon" type="image/png" href="../../cms/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <div class="brand-logo d-flex align-items-center justify-content-between">
              <a class="ext-nowrap logo-img" href="dashboard.php">
                <img src="../../cms/assets/images/logos/logo.png" width="180" alt="" />
              </a>
              <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
              </div>
            </div>
          </ul>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Dodawanie administratora</h5>
            <div class="card">
              <div class="card-body">
                <form name="_3variable" action="../steps/_6admin.php" method="POST">
                  <div class="mb-3">
                    <label class="form-label" for="name">Imię</label><br>
                    <input class="form-control" type="text" name="name" placeholder="Podaj Imie"
                      required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="lastname">Nazwisko</label><br>
                    <input class="form-control" type="text" name="lastname" placeholder="Podaj Nazwisko" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="login">Nazwa użytkownika</label><br>
                    <input class="form-control" type="text" name="login" placeholder="Nazwa użytkownika" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="email">Email</label><br>
                    <input class="form-control" type="email" name="email" placeholder="email" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="pass">Hasło</label><br>
                    <input class="form-control" type="password" name="pass" placeholder="Hasło" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="passwordConfirm">Powtórz Hasło</label><br>
                    <input class="form-control" type="password" name="passwordConfirm" placeholder="Powtórz Hasło" required>
                  </div>
                  <input class="btn btn-primary m-1" type="submit" name="submit" value="Krok 3" style="width:99.2%;">
                  <div id="emailHelp" class="form-text" style="margin-left: 15px;"><?php
                    session_start();
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?></div>
                  <p></p>
                  <h5 class="error">
                    
                  </h5>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>