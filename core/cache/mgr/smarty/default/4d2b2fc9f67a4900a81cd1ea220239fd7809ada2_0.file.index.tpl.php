<?php /* Smarty version 3.1.27, created on 2016-11-10 01:56:50
         compiled from "/home/d/dzenkiedo/modx_3/public_html/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13868051125823a9b2cdc8a2_00157955%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d2b2fc9f67a4900a81cd1ea220239fd7809ada2' => 
    array (
      0 => '/home/d/dzenkiedo/modx_3/public_html/manager/templates/default/workspaces/index.tpl',
      1 => 1478717635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13868051125823a9b2cdc8a2_00157955',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5823a9b2ce1169_46757016',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5823a9b2ce1169_46757016')) {
function content_5823a9b2ce1169_46757016 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13868051125823a9b2cdc8a2_00157955';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>