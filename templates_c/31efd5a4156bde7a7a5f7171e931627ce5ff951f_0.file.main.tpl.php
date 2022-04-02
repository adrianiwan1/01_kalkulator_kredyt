<?php
/* Smarty version 3.1.30, created on 2022-04-02 15:22:39
  from "C:\xampp\htdocs\01_kalkulator_kredyt\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62484e1fdcf774_61348598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31efd5a4156bde7a7a5f7171e931627ce5ff951f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\01_kalkulator_kredyt\\app\\views\\templates\\main.tpl',
      1 => 1648900517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62484e1fdcf774_61348598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
	

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styles.css">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styles.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
</head>
<body class="sb-nav-fixed">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38387782262484e1fdc6579_74584546', 'content');
?>

   
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46906277462484e1fdca9c2_03377844', 'footer');
?>


<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/scripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/demo/chart-area-demo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/demo/chart-bar-demo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/datatables-simple-demo.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'content'} */
class Block_38387782262484e1fdc6579_74584546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_46906277462484e1fdca9c2_03377844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
