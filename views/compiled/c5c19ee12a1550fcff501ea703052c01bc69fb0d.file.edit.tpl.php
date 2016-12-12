<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 13:09:52
         compiled from "views/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7933615685847e55e51ffe3-22046350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5c19ee12a1550fcff501ea703052c01bc69fb0d' => 
    array (
      0 => 'views/edit.tpl',
      1 => 1481284844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7933615685847e55e51ffe3-22046350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5847e55e657fc6_82412517',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847e55e657fc6_82412517')) {function content_5847e55e657fc6_82412517($_smarty_tpl) {?><form method="post">
    
    <input type="text" name="schoolname" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['schoolname'];?>
">
    <input type="text" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['adress'];?>
">
    <input type="submit" name="submit_update">
    
    
</form><?php }} ?>
