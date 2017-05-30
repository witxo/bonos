

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Bonos_Bonos'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Bonos_Bonos'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Bonos_Bonos'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Bonos_Bonos'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Bonos_Bonos", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Bonos_Bonos_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.numerobono.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NUMEROBONO' module='Bonos_Bonos'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.numerobono.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.numerobono.value) <= 0}
{assign var="value" value=$fields.numerobono.default_value }
{else}
{assign var="value" value=$fields.numerobono.value }
{/if} 
<span class="sugar_field" id="{$fields.numerobono.name}">{$fields.numerobono.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.accounts_bonos_bonos_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNTS_BONOS_BONOS_1_FROM_ACCOUNTS_TITLE' module='Bonos_Bonos'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.accounts_bonos_bonos_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.accounts_bonos_bonos_1accounts_ida.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.accounts_bonos_bonos_1accounts_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="accounts_bonos_bonos_1accounts_ida" class="sugar_field" data-id-value="{$fields.accounts_bonos_bonos_1accounts_ida.value}">{$fields.accounts_bonos_bonos_1_name.value}</span>
{if !empty($fields.accounts_bonos_bonos_1accounts_ida.value)}</a>{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.precio.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRECIO' module='Bonos_Bonos'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.precio.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.precio.name}">
{sugar_number_format var=$fields.precio.value precision=2 }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Bonos_Bonos'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.date_entered.value) <= 0}
{assign var="value" value=$fields.date_entered.default_value }
{else}
{assign var="value" value=$fields.date_entered.value }
{/if}
<span class="sugar_field" id="{$fields.date_entered.name}">{$value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fechacaducidad.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FECHACADUCIDAD' module='Bonos_Bonos'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fechacaducidad.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.fechacaducidad.value) <= 0}
{assign var="value" value=$fields.fechacaducidad.default_value }
{else}
{assign var="value" value=$fields.fechacaducidad.value }
{/if}
<span class="sugar_field" id="{$fields.fechacaducidad.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.inactivo.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_INACTIVO' module='Bonos_Bonos'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.inactivo.hidden}
{counter name="panelFieldCount"}

{if strval($fields.inactivo.value) == "1" || strval($fields.inactivo.value) == "yes" || strval($fields.inactivo.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.inactivo.name}" id="{$fields.inactivo.name}" value="$fields.inactivo.value" disabled="true" {$checked}>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>