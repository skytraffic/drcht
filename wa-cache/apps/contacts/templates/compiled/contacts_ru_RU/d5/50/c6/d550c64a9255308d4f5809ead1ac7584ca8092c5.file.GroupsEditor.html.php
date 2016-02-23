<?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 17:19:37
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/contacts/templates/actions/groups/GroupsEditor.html" */ ?>
<?php /*%%SmartyHeaderCode:43763837756cc6a79d573d5-04469165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd550c64a9255308d4f5809ead1ac7584ca8092c5' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/contacts/templates/actions/groups/GroupsEditor.html',
      1 => 1409656720,
      2 => 'file',
    ),
    'd2a9906f5e9120bb0f6f4a6e35eeeb9e16970ae8' => 
    array (
      0 => '/Users/sebar/Documents/sites/doctorchat/wa-apps/contacts/templates/actions/groups/includeGroupsRights.html',
      1 => 1409656720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43763837756cc6a79d573d5-04469165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'icons' => 0,
    'i' => 0,
    'is_global_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56cc6a7a0ab831_24056992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc6a7a0ab831_24056992')) {function content_56cc6a7a0ab831_24056992($_smarty_tpl) {?><div class="block" style="padding: 16px 20px;">

    <form action="?module=groups&action=save" id="group-editor-form">

        <div id="c-group-edit-name-block">
            <span>
                <input name="name" type="text" class="large" id="c-group-edit-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:55%; font-weight: bold; font-size: 1.8em;">
                <i class="icon16 loading" style="display:none;"></i>
            </span>
            <div class="c-actions-wrapper float-right" style="margin: 2px -2px 2px 0;"><a href="#/groups/edit/100/"><i class="icon16 settings"></i></a></div>
        </div>

        <div class="fields c-group-settings" style="width:100%">
            <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
                <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
">
            <?php }?>

            <div class="field" style="margin-top: 10px;">
                <div class="name">Значок</div>
                <div class="value">
                    <ul class="menu-h icons" style="width: 75%; float: left;" id="c-group-edit-icon">
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['i']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->index++;
 $_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->index === 0;
?>
                            <li <?php if ((!$_smarty_tpl->tpl_vars['group']->value&&$_smarty_tpl->tpl_vars['i']->first)||($_smarty_tpl->tpl_vars['group']->value&&$_smarty_tpl->tpl_vars['group']->value['icon']==$_smarty_tpl->tpl_vars['i']->value)){?>class="selected"<?php }?> data-icon="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><a href="javascript:void(0);"><img src="../../wa-content/img/users/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png"></a></li>
                        <?php } ?>
                    </ul>
                    <i class="icon16 loading" style="display:none;"></i>
                </div>
            </div>

            <div class="field buttons">
                <em class="validation-notice errormsg"></em>
                <input type="submit" value="Сохранить" class="button green"> 
                <i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
                
                <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
                    или
                    <a href="javascript:void(0);" class="cancel" id="c-edit-group-cancel">отменить</a>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
                    <a href="javascript:void(0);" id="c-delete-group" class="no-underline delete float-right small" style="margin-top: 14px;">Удалить группу</a>
                <?php }?>

            </div>

        </div>
    </form>
                
    <div class="block not-padded" style="background: white; margin: 0 -20px;">
        <?php if ($_smarty_tpl->tpl_vars['group']->value&&$_smarty_tpl->tpl_vars['is_global_admin']->value){?>
            <form>
                <?php /*  Call merged included template "./includeGroupsRights.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./includeGroupsRights.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '43763837756cc6a79d573d5-04469165');
content_56cc6a79e9e249_91721825($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./includeGroupsRights.html" */?>            
            </form>
        <?php }?>
        <div class="clear"></div>
    </div>
                
</div>

<script type="text/javascript">
(function() {
    
    <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
        $('#c-delete-group').click(function() {
            return $.wa.controller.groupsDeleteAction();
        });
    <?php }?>

    var form = $('#group-editor-form');
    
    
    <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
        $("#c-edit-group-cancel").click(function() {
            $.wa.setHash('/contacts/group/<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
/');
            return false;
        });
    <?php }?>
    
    // validate on submission and send data via ajax
    form.submit(function() {
        if (!form[0].name.value.trim()) {
            form[0].name.value = "<без названия>";
        }
        // ajax request
        form.find('.buttons .loading').show();
        form.find('#group-members option').attr('selected', true);
        var serializeData = form.serializeArray();
        var icon = $('#c-group-edit-icon li.selected');
        serializeData.push({
            name: 'icon',
            value: icon.data('icon')
        });
        $.post(form.attr('action'), serializeData, function (response) {
            form.find('.buttons .loading').hide();
            if (response.status == 'ok') {
                //$.wa.controller.reloadSidebar();
                <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
                    // Go to group list
                    $('#list-group li[rel="group' + response.data.id + '"] .name').html(response.data.group.name);
                    $.wa.controller.updateGroup('<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
', response.data.group);
                    $.wa.controller.setTitle(response.data.group.name);
                    $.wa.setHash('#/contacts/group/'+response.data.id+'/');
                <?php }else{ ?>
                    if (!$.isEmptyObject($.wa.controller.last_selected)) {
                        $.post('?module=groups&action=contactSave', {
                            'id[]': $.wa.controller.last_selected,
                            'groups[]': response.data.id
                        }, function (r) {
                            $.wa.controller.addGroup(response.data.group);
                            $.wa.controller.setTitle(response.data.group.name);
                            $.wa.controller.last_selected = [];
                            $.wa.controller.updateGroupCounters(r.data.counters || { });
                            $.wa.controller.afterInitHTML = function () {
                                $.wa.controller.showMessage(r.data.message, true, 'float-left max-width');
                            };
                            $.wa.setHash('#/groups/edit/'+response.data.id+'/');
                        }, 'json');
                    } else {
                        // Go to access control
                        $.wa.controller.addGroup(response.data.group);
                        $.wa.setHash('#/groups/edit/'+response.data.id+'/');
                    }
                <?php }?>
            } else if (response.status == 'fail') {
                form.find('.validation-notice').html(response.errors.join('<br />'));
            }
        }, 'json');
        return false;
    });

    $('#c-group-edit-icon a').click(function() {
        var item = $(this);
        item.closest('.icons').find('li.selected').removeClass('selected');
        item.closest('li').addClass('selected').data('icon');
        return false;
    });
}).call({});
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-02-23 17:19:37
         compiled from "/Users/sebar/Documents/sites/doctorchat/wa-apps/contacts/templates/actions/groups/includeGroupsRights.html" */ ?>
<?php if ($_valid && !is_callable('content_56cc6a79e9e249_91721825')) {function content_56cc6a79e9e249_91721825($_smarty_tpl) {?><div class="fields" style="min-width: 600px; margin-top: 50px; margin-left: 25px; width: 100%;">
    <div class="field-group">
        <div class="field">
            <div class="name">
                Уровень доступа
            </div>
            <div class="value c-access-rights" id="c-access-rights-wrapper">
                <select id="c-access-rights-toggle" style="display:block;">
                    <option value="remove"<?php if (!$_smarty_tpl->tpl_vars['fullAccess']->value&&$_smarty_tpl->tpl_vars['noAccess']->value){?> selected="selected"<?php }?>>Нет доступа</option>
                    <option value="0"<?php if (!$_smarty_tpl->tpl_vars['fullAccess']->value&&!$_smarty_tpl->tpl_vars['noAccess']->value){?> selected="selected"<?php }?>>Ограниченный доступ</option>
                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['fullAccess']->value){?> selected="selected"<?php }?>>Администратор</option>
                </select>

                <span id="c-access-rights-hint-full" class="c-access-rights-hint" style="display:none">Полный доступ ко всем приложениям и управлению пользователями.</span>
                <span id="c-access-rights-hint-limited" class="c-access-rights-hint" style="display:none">Настройте права доступа для каждого приложения</span>
                <i class="icon16 loading" style="margin-left:16px;display:none;"></i>
                <span class="c-access-rights-hint c-access-saved-hint" style="display:none"><i class="icon10 yes"></i> Сохранено</span>

                <table id="c-access-rights-by-app" style="display: none; "><tbody>
                    <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                        <tr id="c-ar-tr-<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" class="c-ar-app-row">
                            <td class="c-app-icon">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['img'];?>
">
                            </td>
                            <td class="c-app-name">
                                <span class="c-access-color-noaccess"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </td>
                            <td class="c-app-access" style="min-width: 400px;">
                                <select name="<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
">
                                    <option value="0" selected="selected">Нет доступа</option>
                                    <?php if ($_smarty_tpl->tpl_vars['app']->value['customizable']){?>
                                        <option value="1">Ограниченный доступ</option>
                                    <?php }?>
                                    <option value="2">Полный доступ</option>
                                </select>
                                
                                <?php if ($_smarty_tpl->tpl_vars['app']->value['customizable']){?>
                                    <a href="javascript:void(0)" class="small customize-link" style="display: none">Настроить</a>
                                <?php }?>

                                
                                <?php if ($_smarty_tpl->tpl_vars['app_id']->value=='contacts'){?>
                                    <i class="icon16 info c-ar-tooltip"></i>
                                    <div style="display:none" class="c-ar-tooltip-html"><i></i>
                                        <strong>Внимание:</strong> Уровни доступа &laquo;Ограниченный&raquo; и &laquo;Полный&raquo; в приложении &laquo;Контакты&raquo; НЕ дают прав управления аккаунтами пользователей и категориями. Такие права имеет только Администратор.
                                    </div>
                                <?php }?>

                                
                                <i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
                                <span class="c-access-saved-hint" style="display: none"><i class="icon10 yes"></i> Сохранено</span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody></table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tooltip/jquery.tooltip.patched.min.js"></script>
<script type="text/javascript">
$(function() {
    // highlight group link in sidebar
    $('#wa-app .sidebar .selected').removeClass('selected');
    $('#wa-app .sidebar li[rel=group<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
]').addClass('selected');

    var apps = <?php echo json_encode($_smarty_tpl->tpl_vars['apps']->value);?>
;
    var group = <?php echo json_encode($_smarty_tpl->tpl_vars['group']->value);?>
;

    // Dialog to customize app access
    var openCustomizeDialog = function(cancelCallback) {
        if (typeof cancelCallback !== 'function') {
            cancelCallback = null;
        }

        var tr = $(this).parents('.c-ar-app-row');
        var app = apps[tr.find('select').attr('name')];

        $.wa.dialogCreate('c-ar-dialog', {
            url: '?module=rights&app='+app.id+'&id=-'+group.id,
            small: false,
            onload: function() {
                var dialog = $(this);
                dialog.find('.dialog-buttons-gradient').empty()
                    .append(
                        $('<input type="submit" class="button green" value="Сохранить">').click(function() {
                            $(this).attr('disabled', true);
                            dialog.find('.loading').show();
                            var form = dialog.find('form');
                            $.post(form.attr('action'), form.serialize(), $.wa.dialogHide, 'json');
                        })
                    )
                    .append(' '+$_('or')+' ')
                    .append(
                        $('<a href="javascript:void(0)" class="inline-link"><b><i>отменить</i></b></a>').click(function() {
                            $.wa.dialogHide();
                            if (cancelCallback) {
                                cancelCallback();
                            }
                        })
                    )
                    .append('<i class="icon16 loading" style="margin-left: 16px; display: none;"></i>');
            },
            oncancel: cancelCallback
        });
        return false;
    }
    $('#c-access-rights-wrapper .customize-link').click(openCustomizeDialog);

    // Helper to setup UI colors and everything for one app and save it via AJAX
    var updateApp = function(app, nosave) {
        if(!app) {
            return;
        }
        var tr = $('#c-ar-tr-'+app.id);

        if (!app.access) {
            // no access
            tr.find('.c-app-name span').attr('class', 'c-access-color-noaccess');
            tr.find('select').val(0);
            tr.find('.customize-link').hide();
            tr.find('.c-ar-tooltip').hide();
        } else if(app.access == 1) {
            // limited access
            tr.find('.c-app-name span').attr('class', 'c-access-color-limited');
            tr.find('select').val(1);
            // when saving, they're shown later, when customize dialog is open
            if (nosave) {
                tr.find('.customize-link').show();
                tr.find('.c-ar-tooltip').show();
            }
        } else { // app.access > 1
            // Full access
            tr.find('.c-app-name span').attr('class', 'c-access-color-full');
            tr.find('select').val(2);
            tr.find('.customize-link').hide();
            tr.find('.c-ar-tooltip').show();
        }

        if (!nosave) {
            tr.find('.loading').show();
            $('#c-access-rights-wrapper select').attr('disabled', true);

            $.post('?module=rights&action=save&id=-'+group.id, {
                app_id: app.id,
                name: 'backend',
                value: app.access
            }, function() {
                $('#c-access-rights-wrapper select').attr('disabled', false);
                tr.find('.loading').hide();
                if (nosave !== 'sneaky') {
                    tr.find('.c-access-saved-hint').stop().css('opacity', 1).show().animate({
                        opacity: 0
                    }, 2000, function() {
                        $(this).hide();
                    });
                }

                // if access rights are set to 'limited', open a customize dialog
                if(app.access == 1) {
                    openCustomizeDialog.call(tr.find('.customize-link'), function() {
                        app.access = app.oldAccess;
                        updateApp(app, 'sneaky');
                    });
                    tr.find('.customize-link').show();
                    tr.find('.c-ar-tooltip').show();
                }
            }, 'json');
        }
    };

    // Admin status control
    var arToggle = $('#c-access-rights-toggle');
    var lastToggleValue = arToggle.val();
    var arToggleOnchange = function(nosave){
        var fullAccess;
        var newToggleValue = arToggle.val();
        switch(newToggleValue) {
            case 'remove':
                fullAccess = 0;
                $('#c-access-rights-hint-limited').hide();
                $('#c-access-rights-hint-full').hide();
                $('#c-access-rights-by-app').hide();
                break;
            case '0':
                fullAccess = 0;
                $('#c-access-rights-hint-limited').show();
                $('#c-access-rights-hint-full').hide();
                $('#c-access-rights-by-app').show();
                break;
            case '1':
                fullAccess = 1;
                $('#c-access-rights-hint-limited').hide();
                $('#c-access-rights-hint-full').show();
                $('#c-access-rights-by-app').hide();
                break;
        }

        // Reset application rights
        for(var id in apps) {
            if (newToggleValue != lastToggleValue) {
                apps[id].access = 0;
            }
            updateApp(apps[id], true);
        }
        lastToggleValue = newToggleValue;

        if (!nosave) {
            var wr = $('#c-access-rights-wrapper');
            wr.children('.loading').show();
            $('#c-access-rights-wrapper select').attr('disabled', true);

            $.post('?module=rights&action=save&id=-'+group.id, {
                app_id: 'webasyst',
                name: 'backend',
                value: fullAccess ? 1 : 0
            }, function() {
                $('#c-access-rights-wrapper select').attr('disabled', false);
                wr.children('.loading').hide();
                wr.children('.c-access-saved-hint').stop().css('opacity', 1).show().animate({
                    opacity: 0
                }, 2000, function() {
                    $(this).hide();
                });
            }, 'json');
        }
    };
    arToggleOnchange(true);
    arToggle.change(function() {
        arToggleOnchange();
    });

    // On select change update app access
    $('#c-access-rights-wrapper tr select').change(function() {
        var self = $(this);
        var app = apps[self.attr('name')];
        app.oldAccess = app.access;
        app.access = parseInt(self.val());
        updateApp(app);
    });

    // Tooltips on info icons
    $('#c-access-rights-wrapper .c-ar-tooltip').tooltip({
        bodyHandler: function() {
            return $(this).parent().find('.c-ar-tooltip-html').html();
        },
        extraClass: "tooltip",
        noHideOnClick: true,
        showURL: false
    });

    $.wa.controller.setTitle($('#c-ga-header h1').text());
});
</script>

<?php }} ?>