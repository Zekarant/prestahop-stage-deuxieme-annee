<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-20 14:50:22
  from 'D:\wamp64\www\stage2021\admin610fajmom\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6008351e327e60_61884334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4147f5f48fa8e97c8df2b2455e4729154fb89ad8' => 
    array (
      0 => 'D:\\wamp64\\www\\stage2021\\admin610fajmom\\themes\\default\\template\\content.tpl',
      1 => 1610363806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008351e327e60_61884334 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
