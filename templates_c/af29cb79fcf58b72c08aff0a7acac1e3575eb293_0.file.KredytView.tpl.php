<?php
/* Smarty version 3.1.30, created on 2022-04-02 15:25:06
  from "C:\xampp\htdocs\01_kalkulator_kredyt\app\views\KredytView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62484eb249fc18_70395464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af29cb79fcf58b72c08aff0a7acac1e3575eb293' => 
    array (
      0 => 'C:\\xampp\\htdocs\\01_kalkulator_kredyt\\app\\views\\KredytView.tpl',
      1 => 1648905883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62484eb249fc18_70395464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24935444562484eb244a1e3_69675633', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92091072162484eb249dd94_96174404', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_24935444562484eb244a1e3_69675633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_92091072162484eb249dd94_96174404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                    <li><a class="dropdown-item" href="<?php echo '<?php ';?>print(_APP_ROOT); <?php echo '?>';?>/app/security/logout.php">Logout</a></li>
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
                        <?php echo '<?php ';?>echo $_SESSION['role'] <?php echo '?>';?>
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
                            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
KredytCompute">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="id_kwota" name="kw" placeholder="Kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kw;?>
"/>
                                    <label for="id_login">kwota</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="id_lat" name="lat" placeholder="ilosc lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
" />
                                    <label for="id_login">ilosc lat</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="id_kwota" name="procent" placeholder="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lat;?>
" />
                                    <label for="id_login">procent</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
                                    <input class="btn btn-success" type="submit" value="Oblicz rate" />
                                </div>
                            </form>
                        </div>
							
							
						<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
						<div class="col-xl-3 col-md-6"><div class="card bg-danger text-white text-center"> <div class="card-body">
						<ol class="err">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
							<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</ol>
						</div></div></div>
						<?php }?>

						
						<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
						<div class="col-xl-3 col-md-6"><div class="card bg-warning text-white text-center"> <div class="card-body">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
							<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</ol>
						</div></div></div>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
						<div class="col-xl-3 col-md-8"><div class="card bg-success text-white text-center"> <div class="card-body">
							<?php echo round($_smarty_tpl->tpl_vars['res']->value->result,2);?>
 zł
						</div></div></div>
						<?php }?>
                    </div>
				</div>
				</main>
			<?php
}
}
/* {/block 'content'} */
}
