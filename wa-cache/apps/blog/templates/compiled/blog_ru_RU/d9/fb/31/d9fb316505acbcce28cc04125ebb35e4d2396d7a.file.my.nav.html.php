<?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 16:46:29
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/blog/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:130839279456cc62b50c83d2-50229497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9fb316505acbcce28cc04125ebb35e4d2396d7a' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/blog/themes/default/my.nav.html',
      1 => 1409656334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130839279456cc62b50c83d2-50229497',
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
  'unifunc' => 'content_56cc62b5182c07_21152569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc62b5182c07_21152569')) {function content_56cc62b5182c07_21152569($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="blog <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/my');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>