<?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 16:46:02
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/blog/widgets/comments/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:116089703156cc629a6077f7-81141837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '959a8e359ca9f918ba6fc54656d452f79af3c621' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/blog/widgets/comments/templates/Default.html',
      1 => 1443175585,
      2 => 'file',
    ),
    '3cdd2166c2f624c38ed99a77dce9480bc570da54' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/blog/widgets/comments/css/comments.css',
      1 => 1443175585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116089703156cc629a6077f7-81141837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'comment' => 0,
    '_author_uri' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56cc629a9ba458_82582059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc629a9ba458_82582059')) {function content_56cc629a9ba458_82582059($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/Users/sebar/Documents/sites/doctorchat/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><style>
    <?php /*  Call merged included template "../css/comments.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../css/comments.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '116089703156cc629a6077f7-81141837');
content_56cc629a696500_29939094($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../css/comments.css" */?>
</style>

<div class="block b-comments-widget">

    <?php if (!count($_smarty_tpl->tpl_vars['comments']->value)){?>

        <h5 class="align-center hint b-no-comments">Комментарии в блоге еще не публиковались.</h5>

    <?php }else{ ?>

        <h6 class="heading">Последние комментарии</h6>

        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
            <div class="b-comment <?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==blogCommentModel::STATUS_DELETED){?>b-deleted<?php }?>" data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
">

                <header class="b-header b-comment-auth-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['comment']->value['auth_provider'])===null||$tmp==='' ? blogCommentModel::AUTH_USER : $tmp);?>
">
                    <?php $_smarty_tpl->tpl_vars['_author_uri'] = new Smarty_variable("javascript:void(0);", null, 0);?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['site'])){?>
                        <?php $_smarty_tpl->tpl_vars['_author_uri'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['site'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
                    <?php }?>

                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['user']['photo_url_50'])){?>
                        <div class="left-column">
                            <a class="b-author-image" href="<?php echo $_smarty_tpl->tpl_vars['_author_uri']->value;?>
"><img class="userpic" src="<?php echo $_smarty_tpl->tpl_vars['comment']->value['user']['photo_url_50'];?>
" alt=""></a>
                        </div>
                    <?php }?>

                    <div class="main-column">
                        
                        <span class="b-author-name bold">
                            <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['user']['name'])){?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_author_uri']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['user']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <?php }else{ ?>
                                <?php if (empty($_smarty_tpl->tpl_vars['comment']->value['contact_id'])&&!empty($_smarty_tpl->tpl_vars['comment']->value['email'])){?>
                                    <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php }?>
                            <?php }?>
                        </span>

                        
                        <span class="b-comment-date hint"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['comment']->value['datetime'],"humandatetime");?>
, <?php echo $_smarty_tpl->tpl_vars['comment']->value['ip'];?>
</span>
                    </div>
                </header>

                <?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==blogCommentModel::STATUS_DELETED){?>
                    <p class="b-comment-text">Комментарий удален</p>

                <?php }elseif(isset($_smarty_tpl->tpl_vars['comment']->value['post'])&&(!$_smarty_tpl->tpl_vars['comment']->value['post']||$_smarty_tpl->tpl_vars['comment']->value['post']['status']!=blogPostModel::STATUS_PUBLISHED)){?>
                    <p class="b-comment-text hint italic">Комментарий к записи, снятой с публикации (не показывается)</p>

                <?php }else{ ?>
                    
                    <p class="b-comment-text">
                        <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['text'], ENT_QUOTES, 'UTF-8', true));?>

                    </p>

                    
                    <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['post'])&&$_smarty_tpl->tpl_vars['comment']->value['post']){?>
                        <p class="b-comment-subtext hint">
                            к
                            <?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['blog_status']==blogBlogModel::STATUS_PRIVATE){?>
                                <i class="icon10 lock-bw no-overhanging"></i>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['status']==blogPostModel::STATUS_PUBLISHED){?>
                                <a href="<?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['status']==blogPostModel::STATUS_PUBLISHED&&$_smarty_tpl->tpl_vars['comment']->value['post']['blog_status']==blogBlogModel::STATUS_PUBLIC&&$_smarty_tpl->tpl_vars['comment']->value['post']['link']){?><?php echo $_smarty_tpl->tpl_vars['comment']->value['post']['link'][0];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
blog/?module=post&amp;id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['post_id'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['status']==blogPostModel::STATUS_PUBLISHED){?>#comments<?php }else{ ?>&amp;action=edit<?php }?>">
                                    <span<?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['color']&&$_smarty_tpl->tpl_vars['comment']->value['post']['color']!='b-white'){?> class="b-<?php echo substr($_smarty_tpl->tpl_vars['comment']->value['post']['color'],2);?>
"<?php }?>>
                                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['post']['title'], ENT_QUOTES, 'UTF-8', true);?>

                                    </span>
                                </a>
                            <?php }else{ ?>
                                запись снята с публикации
                            <?php }?>
                        </p>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['parent']&&isset($_smarty_tpl->tpl_vars['comment']->value['parent_text'])){?>
                        <p class="b-comment-subtext hint">ответ на
                            <strong>
                                <?php if ($_smarty_tpl->tpl_vars['comment']->value['parent_status']==blogCommentModel::STATUS_DELETED){?>
                                    <strike>Комментарий удален</strike>
                                <?php }else{ ?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['parent_text'], ENT_QUOTES, 'UTF-8', true);?>

                                <?php }?>
                            </strong
                        </p>
                    <?php }?>
                <?php }?>
            </div>
        <?php } ?>

        <div class="b-link-to-all-posts">
            <div class="block">
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
blog/?module=comments">Все комментарии</a>
            </div>
        </div>

    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 16:46:02
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/blog/widgets/comments/css/comments.css" */ ?>
<?php if ($_valid && !is_callable('content_56cc629a696500_29939094')) {function content_56cc629a696500_29939094($_smarty_tpl) {?>.b-comments-widget {
  font-size: 14px;
}
.b-comments-widget:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  border: 10px solid #eda300;
  border-left-color: transparent;
  border-bottom-color: transparent;
}
.b-comments-widget:hover .b-link-to-all-posts {
  opacity: 1;
}
.b-comments-widget .b-comment {
  margin: 1.5em 0 0;
}
.b-comments-widget .b-comment:first-of-type {
  margin-top: 0.5em;
}
.b-comments-widget .b-comment .b-header {
  display: table;
  width: 100%;
  table-layout: fixed;
}
.b-comments-widget .b-comment .b-header .left-column,
.b-comments-widget .b-comment .b-header .main-column {
  display: table-cell;
  vertical-align: middle;
}
.b-comments-widget .b-comment .b-header .left-column {
  width: 2.285714285714286em;
  padding: 0 0.75em 0 0;
}
.b-comments-widget .b-comment .b-header .main-column {
  padding: 0 0 0.1em;
}
.b-comments-widget .b-comment .b-header .b-author-image {
  display: block;
  width: 2.285714285714286em;
  height: 2.285714285714286em;
}
.b-comments-widget .b-comment .b-header .b-author-image img {
  width: 100%;
  max-height: 100%;
}
.b-comments-widget .b-comment .b-header .b-author-name,
.b-comments-widget .b-comment .b-header .b-comment-date {
  display: block;
  max-width: 100%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.b-comments-widget .b-comment .b-header .b-author-name {
  padding: 0.2em 0 0;
}
.b-comments-widget .b-comment .b-header .b-comment-date {
  margin: 0.25em 0 0;
}
.b-comments-widget .b-comment .b-comment-text {
  margin: 0.3em 0 0;
}
.b-comments-widget .b-comment .b-comment-subtext {
  margin: 0.2em 0 0;
}
.b-comments-widget .b-no-comments {
  margin: 35px 20px;
  font-weight: normal;
}
.b-comments-widget .b-link-to-all-posts {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  opacity: 0;
  padding: 18px 0 0;
  background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 50%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255,255,255,0)), color-stop(50%, #fff));
  background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 50%);
  background: -o-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 50%);
  background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 50%);
  background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, #fff 50%);
  transition: opacity 0.5s;
}
.widget-2x1 .b-comments-widget .b-no-comments {
  margin: 45px 55px;
}
.widget-2x2 .b-comments-widget .b-no-comments {
  margin: 105px 35px;
}
.tv .b-comments-widget {
  font-size: 1rem;
}
.tv .b-comments-widget .hint a {
  color: #e2e25b;
}
.tv .b-comments-widget .b-comment .b-header .b-comment-date {
  color: #aaa;
  font-size: 0.9em;
}
.tv .b-comments-widget .b-comment .b-header .b-author-name a {
  color: #eee;
}
.tv .b-comments-widget .b-comment .b-comment-text {
  font-size: 1.1em;
}
.tv .b-comments-widget .b-comment .b-comment-subtext {
  font-size: 0.9em;
}
.tv .b-comments-widget .b-link-to-all-posts {
  background: -moz-linear-gradient(top, rgba(51,51,51,0) 0%, #333 50%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(51,51,51,0)), color-stop(50%, #333));
  background: -webkit-linear-gradient(top, rgba(51,51,51,0) 0%, #333 50%);
  background: -o-linear-gradient(top, rgba(51,51,51,0) 0%, #333 50%);
  background: -ms-linear-gradient(top, rgba(51,51,51,0) 0%, #333 50%);
  background: linear-gradient(to bottom, rgba(51,51,51,0) 0%, #333 50%);
}
.mobile .b-comments-widget {
  font-size: 1rem;
}
<?php }} ?>