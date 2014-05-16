<?php /* Smarty version Smarty-3.1.18, created on 2014-05-15 20:22:49
         compiled from "./templates/_crumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118322475453754fce93a302-56535318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dbf69dd5a207ebc1bc4ff7f264fb290c58f71b3' => 
    array (
      0 => './templates/_crumbs.tpl',
      1 => 1400195857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118322475453754fce93a302-56535318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53754fce96ed66_99423202',
  'variables' => 
  array (
    '_crumbs' => 0,
    '_crumb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53754fce96ed66_99423202')) {function content_53754fce96ed66_99423202($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['_crumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_crumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_crumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_crumb']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_crumb']->iteration=0;
 $_smarty_tpl->tpl_vars['_crumb']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_crumb']->key => $_smarty_tpl->tpl_vars['_crumb']->value) {
$_smarty_tpl->tpl_vars['_crumb']->_loop = true;
 $_smarty_tpl->tpl_vars['_crumb']->iteration++;
 $_smarty_tpl->tpl_vars['_crumb']->index++;
 $_smarty_tpl->tpl_vars['_crumb']->first = $_smarty_tpl->tpl_vars['_crumb']->index === 0;
 $_smarty_tpl->tpl_vars['_crumb']->last = $_smarty_tpl->tpl_vars['_crumb']->iteration === $_smarty_tpl->tpl_vars['_crumb']->total;
?>
	<?php if ($_smarty_tpl->tpl_vars['_crumb']->first) {?>
	  <div class="row">
	    <div class="col-md-12">
	      <ol class="breadcrumb">
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['_crumb']->last) {?>
		<li class="active"><?php echo $_smarty_tpl->tpl_vars['_crumb']->value['title'];?>
</li>
	    </ol>
	  </div>
	</div>
	<?php } else { ?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_crumb']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_crumb']->value['title'];?>
</a></li>
	<?php }?>
<?php } ?><?php }} ?>
