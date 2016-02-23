<?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 16:46:02
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/blog/widgets/posts/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:198324907656cc629a2795c0-89145086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36829392d5c858bcd4e402da0f61d930eec8e42a' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/blog/widgets/posts/templates/Default.html',
      1 => 1443175586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198324907656cc629a2795c0-89145086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56cc629a3bbf64_35301029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc629a3bbf64_35301029')) {function content_56cc629a3bbf64_35301029($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/Users/sebar/Documents/sites/doctorchat/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/sebar/Documents/sites/doctorchat/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><style>

    .b-post-title { margin-top: 5px; line-height: 1em; }
    .b-post-preview { text-overflow: ellipsis; }
    .b-empty-stream { margin: 35px 20px; font-weight: normal; }

    .b-post-background { position: absolute; width: 100%; height: 100%; }
    .b-white { background: #fff; }
    .b-gray { background: #f7f7f7; }
    .b-green { background: #f3ffe3; }
    .b-blue { background: #eeffff; }
    .b-purple { background: #fcf3ff; }
    .b-red { background: #fff1f1; }
    .b-yellow { background: #ffffe3; }
    .b-yellow .highlighted { background: #ff9; }

    .widget-2x1 .b-empty-stream { margin: 45px 55px; }
    .widget-2x2 .b-empty-stream { margin: 105px 35px; }

    /* TV */
    .tv .b-post-background { background: transparent; }
</style>

<?php if (!empty($_smarty_tpl->tpl_vars['post']->value)){?>
    <div class="b-post-background <?php echo $_smarty_tpl->tpl_vars['post']->value['color'];?>
">
        <div class="block">

            <h6 class="heading small">
                <?php if (strtotime($_smarty_tpl->tpl_vars['post']->value['datetime'])<time()-86400*2){?>
                    <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>

                <?php }else{ ?>
                    <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandatetime");?>

                <?php }?>
            </h6>
            <h3 class="b-post-title"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
blog/?module=post&id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="bold"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true),36);?>
</a></h3>
            <p class="small b-post-preview">
                <!-- <b><?php echo $_smarty_tpl->tpl_vars['post']->value['color'];?>
</b> -->
                <?php echo strip_tags($_smarty_tpl->tpl_vars['post']->value['text']);?>

            </p>

        </div>
    </div>
<?php }else{ ?>
    <div class="block">
        <h5 class="align-center hint b-empty-stream">В вашем блоге еще нет записей.</h5>
    </div>
<?php }?><?php }} ?>