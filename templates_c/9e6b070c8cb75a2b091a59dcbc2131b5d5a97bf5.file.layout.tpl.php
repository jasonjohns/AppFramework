<?php /* Smarty version Smarty-3.1.18, created on 2014-05-15 20:22:49
         compiled from "./templates/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116654342553754fce8119f3-54714807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400195857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116654342553754fce8119f3-54714807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53754fce91c762_20621224',
  'variables' => 
  array (
    '_app' => 0,
    '_page' => 0,
    '_template' => 0,
    '_needs_pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53754fce91c762_20621224')) {function content_53754fce91c762_20621224($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['_app']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['_app']->value['title_separator'];?>
<?php echo $_smarty_tpl->tpl_vars['_page']->value['title'];?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>
          <?php echo $_smarty_tpl->tpl_vars['_app']->value['title'];?>

          <small><?php echo $_smarty_tpl->tpl_vars['_page']->value['title'];?>
</small>
        </h1>
      </div>
    <?php echo $_smarty_tpl->getSubTemplate ("_crumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("_messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php if ($_smarty_tpl->tpl_vars['_needs_pagination']->value) {?>
      <div class="row">
          <div class="col-md-12">
            <?php echo $_smarty_tpl->getSubTemplate ("_paginate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
        </div>
      <?php }?>
    </div><!-- /.container -->
    <?php echo $_smarty_tpl->getSubTemplate ("_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </body>
</html><?php }} ?>
