<?php /* Smarty version Smarty-3.1.18, created on 2014-05-16 16:36:49
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184282668153754fce9a1ea2-04519241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1400272607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184282668153754fce9a1ea2-04519241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53754fce9a6f11_90447231',
  'variables' => 
  array (
    'genders' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53754fce9a6f11_90447231')) {function content_53754fce9a6f11_90447231($_smarty_tpl) {?><?php if (!is_callable('smarty_function_checkbox_list')) include 'helpers/function.checkbox_list.php';
if (!is_callable('smarty_function_radio_list')) include 'helpers/function.radio_list.php';
if (!is_callable('smarty_function_input_field')) include 'helpers/function.input_field.php';
if (!is_callable('smarty_function_textarea')) include 'helpers/function.textarea.php';
if (!is_callable('smarty_function_select')) include 'helpers/function.select.php';
if (!is_callable('smarty_function_checkbox')) include 'helpers/function.checkbox.php';
if (!is_callable('smarty_function_submit')) include 'helpers/function.submit.php';
?><h2>Your code goes here.</h2>
<form method="post" action="index.php">
        <?php echo smarty_function_checkbox_list(array('options'=>$_smarty_tpl->tpl_vars['genders']->value,'name'=>"gender3",'inline'=>"true"),$_smarty_tpl);?>

        <?php echo smarty_function_radio_list(array('options'=>$_smarty_tpl->tpl_vars['genders']->value,'name'=>"gender4",'inline'=>true),$_smarty_tpl);?>

        <?php echo smarty_function_input_field(array('name'=>"email",'type'=>"email",'help'=>"a valid email address",'required'=>true),$_smarty_tpl);?>

        <?php echo smarty_function_input_field(array('name'=>"first_name",'type'=>"text",'help'=>"your first name"),$_smarty_tpl);?>

        <?php echo smarty_function_input_field(array('name'=>"last_name",'type'=>"text"),$_smarty_tpl);?>

        <?php echo smarty_function_textarea(array('name'=>"description",'help'=>"some help text",'required'=>true),$_smarty_tpl);?>

        <?php echo smarty_function_select(array('name'=>"gender",'options'=>$_smarty_tpl->tpl_vars['genders']->value,'help'=>"Select your gender",'required'=>true),$_smarty_tpl);?>

        <?php echo smarty_function_checkbox(array('name'=>"accept_terms",'help'=>"whatever"),$_smarty_tpl);?>

        <?php echo smarty_function_submit(array('class'=>"primary"),$_smarty_tpl);?>

</form><?php }} ?>
