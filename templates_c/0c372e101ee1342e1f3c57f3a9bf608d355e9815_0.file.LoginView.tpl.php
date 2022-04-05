<?php
/* Smarty version 3.1.30, created on 2022-04-05 11:23:27
  from "C:\xampp\htdocs\01_kalkulator_kredyt\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_624c0a8fb58434_93761636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c372e101ee1342e1f3c57f3a9bf608d355e9815' => 
    array (
      0 => 'C:\\xampp\\htdocs\\01_kalkulator_kredyt\\app\\views\\LoginView.tpl',
      1 => 1649150599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624c0a8fb58434_93761636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_326643957624c0a8fb34708_95294056', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139161996624c0a8fb54941_80580588', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_326643957624c0a8fb34708_95294056 extends Smarty_Internal_Block
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
class Block_139161996624c0a8fb54941_80580588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="POST">
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

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
