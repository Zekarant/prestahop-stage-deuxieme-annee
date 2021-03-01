<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-19 15:58:33
  from 'D:\wamp64\www\stage2021\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6006f399e49713_73617242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2559a7fabb4511e3a4d19bae57677647ce4d54a7' => 
    array (
      0 => 'D:\\wamp64\\www\\stage2021\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1610363806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6006f399e49713_73617242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '15111450026006f399e2f111_76804779';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6738238926006f399e40e44_73141709', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_6738238926006f399e40e44_73141709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_6738238926006f399e40e44_73141709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
