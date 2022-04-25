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
                    <li><a class="dropdown-item" href="{$conf->action_url}logout">Logout</a></li>
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
                        <div class="small">Zalogowany jako: {$user->login}</div>
                        <div class="small">Rola: {$user->role}</div>
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
                            <form method="POST" action="{$conf->action_root}KredytCompute">
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
							
							{* wyświeltenie listy błędów, jeśli istnieją *}
						{if $msgs->isError()}
						<div class="col-xl-3 col-md-6"><div class="card bg-danger text-white text-center"> <div class="card-body">
						<ol class="err">
							{foreach $msgs->getErrors() as $err}
							{strip}
							<li>{$err}</li>
							{/strip}
							{/foreach}
						</ol>
						</div></div></div>
						{/if}

						{* wyświeltenie listy informacji, jeśli istnieją *}
						{if $msgs->isInfo()}
						<div class="col-xl-3 col-md-6"><div class="card bg-warning text-white text-center"> <div class="card-body">
							{foreach $msgs->getInfos() as $inf}
							{strip}
							<li>{$inf}</li>
							{/strip}
							{/foreach}
						</ol>
						</div></div></div>
						{/if}

						{if isset($res->result)}
						<div class="col-xl-3 col-md-8"><div class="card bg-success text-white text-center"> <div class="card-body">
							{round($res->result,2)} zł
						</div></div></div>
						{/if}
                    </div>
				</div>
				</main>
			{/block}