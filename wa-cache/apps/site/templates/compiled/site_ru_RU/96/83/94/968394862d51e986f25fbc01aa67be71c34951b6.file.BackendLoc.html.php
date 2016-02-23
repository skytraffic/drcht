<?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 16:46:28
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/site/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:67113331156cc62b4673128-57649066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968394862d51e986f25fbc01aa67be71c34951b6' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/site/templates/actions/backend/BackendLoc.html',
      1 => 1336140648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67113331156cc62b4673128-57649066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56cc62b4702675_74969566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc62b4702675_74969566')) {function content_56cc62b4702675_74969566($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>