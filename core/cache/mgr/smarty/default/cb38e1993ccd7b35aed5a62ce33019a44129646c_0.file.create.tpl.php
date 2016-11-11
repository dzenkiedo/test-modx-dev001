<?php /* Smarty version 3.1.27, created on 2016-11-10 02:07:27
         compiled from "/home/d/dzenkiedo/modx_3/public_html/manager/templates/default/element/plugin/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143143935823ac2f694069_64082172%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb38e1993ccd7b35aed5a62ce33019a44129646c' => 
    array (
      0 => '/home/d/dzenkiedo/modx_3/public_html/manager/templates/default/element/plugin/create.tpl',
      1 => 1478717635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143143935823ac2f694069_64082172',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5823ac2f6961d6_21713908',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5823ac2f6961d6_21713908')) {
function content_5823ac2f6961d6_21713908 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143143935823ac2f694069_64082172';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>