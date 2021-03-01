<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-19 16:04:09
  from 'D:\wamp64\www\stage2021\themes\javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6006f4e9f0b9a6_04236074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd418eb8df630035c310efb04a7ad2435214771a8' => 
    array (
      0 => 'D:\\wamp64\\www\\stage2021\\themes\\javascript.tpl',
      1 => 1610363806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6006f4e9f0b9a6_04236074 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['js_def']->value) && is_array($_smarty_tpl->tpl_vars['js_def']->value) && count($_smarty_tpl->tpl_vars['js_def']->value)) {
echo '<script'; ?>
 type="text/javascript">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_def']->value, 'def', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['def']->value) {
?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['def']->value ));?>
;
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
if (isset($_smarty_tpl->tpl_vars['js_files']->value) && count($_smarty_tpl->tpl_vars['js_files']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_files']->value, 'js_uri', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['js_uri']->value) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"><?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (isset($_smarty_tpl->tpl_vars['js_inline']->value) && count($_smarty_tpl->tpl_vars['js_inline']->value)) {
echo '<script'; ?>
 type="text/javascript">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_inline']->value, 'inline', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['inline']->value) {
echo $_smarty_tpl->tpl_vars['inline']->value;?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
}
