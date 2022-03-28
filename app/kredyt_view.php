<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kalkulator kredytu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php print(_APP_ROOT); ?> /css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3">Kalkulator kredytowy</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Okno główne</div>
                            <a class="nav-link">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kalkulator
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <div class="sb-sidenav-menu-heading"></div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['role'] ?>
                    </div>
                </nav>
            </div>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Kalulator kredytowy</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Główne okno panelu</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-6">
                            <form method="POST" action="{$conf->app_url}/app/kredyt.php">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="id_kwota" name="kw" placeholder="Kwota" value="{$form->kw}"/>
                                    <label for="id_login">kwota</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="id_lat" name="lat" placeholder="ilosc lat" value="{$form->procent}" />
                                    <label for="id_login">ilosc lat</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="id_kwota" name="procent" placeholder="procent" value="{$form->lat}" />
                                    <label for="id_login">procent</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
                                    <input class="btn btn-success" type="submit" value="Oblicz rate" />
                                </div>
                            </form>
                        </div>

                        <?php
                        if (isset($messages)) {
                            if (count($messages) > 0) {
                                echo '<div class="col-xl-3 col-md-6"><div class="card bg-danger text-white text-center"> <div class="card-body">';
                                        foreach ($messages as $key => $msg) {
                                            echo $msg;
                                        }
                                        echo '</div></div></div>';
                            }elseif(isset($result))
                            {
                                echo '<div class="col-xl-3 col-md-8"><div class="card bg-success text-white text-center"> <div class="card-body">';
                                echo 'Rata wynosi '.strval($result).'zł';
                                echo '</div></div></div>';
                            }
                        }
                        ?>

                    </div>
                    <div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Startboostrap</div>
                        <div>

                            <a href="https://startbootstrap.com/template/sb-admin">Na licencji MIT</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php print(_APP_ROOT); ?>/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

<?php
if (isset($messages)) {
    if (count($messages) > 0) {
        echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
        foreach ($messages as $key => $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ol>';
    }
} ?>

</html>