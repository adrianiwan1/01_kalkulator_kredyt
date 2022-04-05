{extends file="main.tpl"}

{block name=footer}
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
    {/block}

{block name=content}
    <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
    <main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Logowanie</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{$conf->action_url}login" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="id_login" name="login" placeholder="loogin" />
                                <label for="id_login">login</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="id_pass" name="pass" type="password" placeholder="Password" />
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
                                <input class="btn btn-primary" type="submit" value="zaloguj" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

{include file='messages.tpl'}
{/block}
