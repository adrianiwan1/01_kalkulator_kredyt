<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Logowanie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php print(_APP_ROOT);?> css/styles.css" rel="stylesheet" />
</head>
<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Logowanie</h3></div>
                                    <div class="card-body">
                                        <form action="<?php print(_APP_ROOT);?>/app/security/login.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" id="id_login" name="login" placeholder="loogin" />
                                                <label for="id_login" >login</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="id_pass"name="passwd" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
												<input class="btn btn-primary" type="submit" value="zaloguj"/>
                                                <?php
                                                    if (isset($messages)) {
                                                        if (count ( $messages ) > 0) {
                                                            echo '<div>';
                                                            foreach ( $messages as $key => $msg ) {
                                                                echo $msg;
                                                            }
                                                            
                                                        }
                                                    }
                                                    ?>  
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>