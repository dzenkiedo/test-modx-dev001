<?php /* Smarty version 3.1.27, created on 2016-11-10 01:55:33
         compiled from "/home/d/dzenkiedo/modx_3/public_html/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14217218905823a96595d163_87582304%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308e88102c0c7f36c160bb9719bf166d5ed11adb' => 
    array (
      0 => '/home/d/dzenkiedo/modx_3/public_html/manager/templates/default/welcome.tpl',
      1 => 1478717635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14217218905823a96595d163_87582304',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5823a96595f8b6_80680388',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5823a96595f8b6_80680388')) {
function content_5823a96595f8b6_80680388 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14217218905823a96595d163_87582304';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>