<?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 16:46:29
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/site/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:120918773056cc62b51ae368-77842148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf3a15a7b512c31eeabc92900535fd7bebe1da5' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/site/themes/default/my.nav.html',
      1 => 1409652561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120918773056cc62b51ae368-77842148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56cc62b51eb9d1_84914560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc62b51eb9d1_84914560')) {function content_56cc62b51eb9d1_84914560($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>