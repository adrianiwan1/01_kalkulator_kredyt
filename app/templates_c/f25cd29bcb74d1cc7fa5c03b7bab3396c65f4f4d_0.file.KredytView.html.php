<?php
/* Smarty version 3.1.30, created on 2022-03-29 00:09:49
  from "C:\xampp\htdocs\01_kalkulator_kredyt\app\KredytView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6242322d8b5b70_23592605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25cd29bcb74d1cc7fa5c03b7bab3396c65f4f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\01_kalkulator_kredyt\\app\\KredytView.html',
      1 => 1648505315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6242322d8b5b70_23592605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19022167486242322d861585_69804349', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14639646336242322d8b3b46_35238748', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_19022167486242322d861585_69804349 extends Smarty_Internal_Block
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
</footer><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_14639646336242322d8b3b46_35238748 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator</h2>

<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Kalulator kredytowy</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Główne okno panelu</li>
			</ol>
			<div class="row">
				<div class="col-xl-6">
					<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/kredyt.php" method="post">


						<div class="form-floating mb-3">
							<input class="form-control" type="text" id="id_kwota" name="kw" placeholder="Kwota"
								value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kw;?>
" />
							<label for="id_login">kwota</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" type="text" id="id_lat" name="lat" placeholder="ilosc lat"
								value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
" />
							<label for="id_login">ilosc lat</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" type="text" id="id_kwota" name="procent" placeholder="procent"
								value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lat;?>
" />
							<label for="id_login">procent</label>
						</div>
						<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
							<!-- <a class="btn btn-primary" href="index.html">Login</a> -->
							<input class="btn btn-success" type="submit" value="Oblicz rate" />
						</div>
				</div>

				<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

					
					<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
					<h4>Wystąpiły błędy: </h4>
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
					<?php }?>

					
					<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
					<h4>Informacje: </h4>
					<ol class="inf">
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
					<?php }?>

					<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
					<h4>Wynik</h4>
					<p class="res">
						<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

					</p>
					<?php }?>

				</div>
			</div>
			

			<?php
}
}
/* {/block 'content'} */
}
