<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kalkulator kredytu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<!--
<body>


    <fieldset>
        <a href="<?php // print(_APP_ROOT); ?>/app/security/logout.php" class="button small" >Wyloguj</a>
        <form class="pure-form pure-form-stacked" method="POST" action="<?php // print(_APP_ROOT); ?>/app/kredyt.php">
            <legend>Kalkulator kredytu</br>Zalogowano jako: <?php // echo $_SESSION['role']  ?></legend>
            
            <fieldset>
                
                <label for="id_kwota">Kwota kredytu:</label>
                <input id="id_kwota" type="text" name="kw" />
                <label for="id_lat">Ilosc lat:</label>
                <input id="id_lat" type="text" name="lat" />
                <label for="id_procent">Oprocentowanie:</label>
                <input id="id_procent" type="text" name="procent" />
                <fieldset>
                    <input type="submit" class="tertiary" value="rata" />
        </form>
    </fieldset>

    <?php /*if (isset($result)) { ?>
        <div style=" padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #308732; width:200px; color:white;">
            <?php echo 'Rata kredytu wynosi: ' . strval($result); ?>
        </div>
    <?php } */?>

    <?php
    /*

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
*/?>
</body>
-->

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Kalkulator kredytowy</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                   
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
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
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kalkulator
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            
                            </div>
                            <div class="sb-sidenav-menu-heading"></div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['role']?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        formularz kredytowy
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" id="id_kwota" name="kw" placeholder="Kwota" />
                                                <label for="id_login" >kwota</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" id="id_lat" name="lat" placeholder="ilosc lat" />
                                                <label for="id_login" >ilosc lat</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" id="id_kwota" name="procent" placeholder="procent" />
                                                <label for="id_login" >procent</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
												<input class="btn btn-success" type="submit" value="rata"/>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        <div> 
                        <?php if (isset($result)) { ?>
        <div style=" padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #308732; width:200px; color:white;">
            <?php echo 'Rata kredytu wynosi: ' . strval($result); ?>
        </div>
    <?php } ?>

    <?php
    

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}?> 
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

</body>
</html>