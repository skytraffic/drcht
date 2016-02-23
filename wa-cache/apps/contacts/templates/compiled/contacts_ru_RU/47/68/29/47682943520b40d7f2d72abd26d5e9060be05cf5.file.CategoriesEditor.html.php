<?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 17:19:12
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/contacts/templates/actions/categories/CategoriesEditor.html" */ ?>
<?php /*%%SmartyHeaderCode:73163464456cc6a60821128-62893757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47682943520b40d7f2d72abd26d5e9060be05cf5' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/contacts/templates/actions/categories/CategoriesEditor.html',
      1 => 1409656720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73163464456cc6a60821128-62893757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56cc6a6092c0b4_91263959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc6a6092c0b4_91263959')) {function content_56cc6a6092c0b4_91263959($_smarty_tpl) {?>
<div class="block" id="c-ce-header">
	<?php if ($_smarty_tpl->tpl_vars['category']->value){?>
		<h1><?php echo sprintf(_w('Edit category &ldquo;%s&rdquo;'),htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name']));?>
</h1>
	<?php }else{ ?>
		<h1>Новая категория</h1>
	<?php }?>
</div>

<div id="tc-ge-members" class="tab-content">
	<div class="block double-padded">
		<form action="?module=categories&action=save" id="category-editor-form">
			<div class="fields" style="width:100%">
				<?php if ($_smarty_tpl->tpl_vars['category']->value){?>
					<input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
				<?php }?>
				<input name="user_operation" type="hidden" value="set">
				<div class="field c-header-edit">
					<div class="name large">Название:</div>
					<div class="value"><span><input name="name" type="text" class="large" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:55%"></span></div>
				</div>
				<div class="field buttons">
					<div class="value submit">
						<em class="validation-notice errormsg"></em>

						<input type="submit" value="Сохранить" class="button green"> или <a href="#" onclick="$.wa.back(); return false;">отменить</a>

						<i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
					</div>
				</div>
			</div>
		</form>
		<div class="clear-left"></div>
	</div>
</div>

<div class="clear-left"></div>

<script type="text/javascript">
(function() {
	var form = $('#category-editor-form');

	// validate on submission and send data via ajax
	form.submit(function() {
		if (!$.trim(form[0].name.value)) {
			form[0].name.value = "<без названия>";
		}

		// ajax request
		form.find('.loading').show();
		$.post(form.attr('action'), form.serialize(), function (response) {
			form.find('.loading').hide();
			if (response.status == 'ok') {
				$.wa.controller.reloadSidebar();
				$.wa.setHash('#/contacts/category/'+response.data.id+'/');

				<?php if (empty($_smarty_tpl->tpl_vars['category']->value)){?>
					$.wa.controller.collapseSidebarSection('#c-sb-categories-header', 'uncollapse');
				<?php }?>
			} else if (response.status == 'fail') {
				form.find('.validation-notice').html(response.errors.join('<br />'));
			}
		}, 'json');
		return false;
	});

	var input = $('#category-editor-form input[name="name"]')[0];
	if (input) {
		// voodoo magic... doesn't work without timeout in some browsers
		setTimeout(function() {
			input.focus();
			input.select();
		}, 1);
	}
	$.wa.controller.setTitle($('#c-ce-header h1').text());
}).call({});
</script><?php }} ?>