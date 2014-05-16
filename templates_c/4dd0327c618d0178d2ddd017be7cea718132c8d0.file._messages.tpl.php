<?php /* Smarty version Smarty-3.1.18, created on 2014-05-15 20:22:49
         compiled from "./templates/_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203687074653754fce976224-60769379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd0327c618d0178d2ddd017be7cea718132c8d0' => 
    array (
      0 => './templates/_messages.tpl',
      1 => 1400195857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203687074653754fce976224-60769379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53754fce994ba6_86660776',
  'variables' => 
  array (
    '_errors' => 0,
    '_e' => 0,
    '_success' => 0,
    '_s' => 0,
    '_info' => 0,
    '_i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53754fce994ba6_86660776')) {function content_53754fce994ba6_86660776($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['_e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_e']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_e']->iteration=0;
 $_smarty_tpl->tpl_vars['_e']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_e']->key => $_smarty_tpl->tpl_vars['_e']->value) {
$_smarty_tpl->tpl_vars['_e']->_loop = true;
 $_smarty_tpl->tpl_vars['_e']->iteration++;
 $_smarty_tpl->tpl_vars['_e']->index++;
 $_smarty_tpl->tpl_vars['_e']->first = $_smarty_tpl->tpl_vars['_e']->index === 0;
 $_smarty_tpl->tpl_vars['_e']->last = $_smarty_tpl->tpl_vars['_e']->iteration === $_smarty_tpl->tpl_vars['_e']->total;
?>
  <?php if ($_smarty_tpl->tpl_vars['_e']->first) {?>
    <div class="row">
      <div class="col-md-12">  
        <div class="alert alert-danger alert-dismissable">
          <h4>Looks like there was a problem...</h4>
  <?php }?>
            <p><?php echo $_smarty_tpl->tpl_vars['_e']->value;?>
</p>
  <?php if ($_smarty_tpl->tpl_vars['_e']->last) {?>
        </div>
      </div>
    </div>
  <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['_s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_success']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_s']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_s']->iteration=0;
 $_smarty_tpl->tpl_vars['_s']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_s']->key => $_smarty_tpl->tpl_vars['_s']->value) {
$_smarty_tpl->tpl_vars['_s']->_loop = true;
 $_smarty_tpl->tpl_vars['_s']->iteration++;
 $_smarty_tpl->tpl_vars['_s']->index++;
 $_smarty_tpl->tpl_vars['_s']->first = $_smarty_tpl->tpl_vars['_s']->index === 0;
 $_smarty_tpl->tpl_vars['_s']->last = $_smarty_tpl->tpl_vars['_s']->iteration === $_smarty_tpl->tpl_vars['_s']->total;
?>
  <?php if ($_smarty_tpl->tpl_vars['_s']->first) {?>
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success alert-dismissable">
  <?php }?>
          <p><?php echo $_smarty_tpl->tpl_vars['_s']->value;?>
</p>
  <?php if ($_smarty_tpl->tpl_vars['_s']->last) {?>
        </div>
      </div>
    </div>
  <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['_i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_i']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_i']->iteration=0;
 $_smarty_tpl->tpl_vars['_i']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_i']->key => $_smarty_tpl->tpl_vars['_i']->value) {
$_smarty_tpl->tpl_vars['_i']->_loop = true;
 $_smarty_tpl->tpl_vars['_i']->iteration++;
 $_smarty_tpl->tpl_vars['_i']->index++;
 $_smarty_tpl->tpl_vars['_i']->first = $_smarty_tpl->tpl_vars['_i']->index === 0;
 $_smarty_tpl->tpl_vars['_i']->last = $_smarty_tpl->tpl_vars['_i']->iteration === $_smarty_tpl->tpl_vars['_i']->total;
?>
  <?php if ($_smarty_tpl->tpl_vars['_i']->first) {?>
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-info alert-dismissable">
  <?php }?>
        <p><?php echo $_smarty_tpl->tpl_vars['_i']->value;?>
</p>
  <?php if ($_smarty_tpl->tpl_vars['_i']->last) {?>
      </div>
    </div>
  </div>
  <?php }?>
<?php } ?><?php }} ?>
