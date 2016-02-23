<?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 16:46:11
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/contacts/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:32858917556cc62a37e8a72-98363446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f25a2785509013a4f44adcabe13cbba84ed2ad6c' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/contacts/templates/actions/backend/BackendLoc.html',
      1 => 1409656720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32858917556cc62a37e8a72-98363446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56cc62a3881625_57580195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc62a3881625_57580195')) {function content_56cc62a3881625_57580195($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
);<?php }} ?>