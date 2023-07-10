<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Courses | Education</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo2.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a class="ext-nowrap logo-img" href="dashboard.php">
            <img src="../assets/images/logos/logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Strona główna</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" aria-expanded="false" href="dashboard.php">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Statystyki</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Użytkownicy</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" aria-expanded="false" href="user.php">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Lista użytkowników</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" aria-expanded="false" href="admin.php">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Lista administratorów</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Kursy</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" aria-expanded="false" href="course.php">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Lista kursów</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" aria-expanded="false" href="add_course.php">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Dodaj kurs</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Profil</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" aria-expanded="false" href="profile.php">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Mój profil</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" aria-expanded="false" href="edit_profile.php">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Edytuj profil</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="unlimited-access-title me-3">
              <a href="../../index.php" class="btn btn-primary m-2" style="width: 100%;">Widok użytkownika</a>
              <a href="../../lib/login/logout-bg.php" class="btn btn-primary m-2" style="width: 100%;">Wyloguj</a>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.png" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">Mój profil</p>
                    </a>
                    <a href="../../lib/login/logout-bg.php" class="btn btn-primary m-3" style="width: 85%;">Wyloguj</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->