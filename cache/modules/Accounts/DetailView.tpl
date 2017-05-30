

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
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Accounts_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_ACCOUNT_INFORMATION' module='Accounts'}
<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table id='LBL_ACCOUNT_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_office.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHONE_OFFICE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.phone_office.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_office.value)}
{assign var="phone_value" value=$fields.phone_office.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
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
{if !$fields.website.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_WEBSITE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.website.hidden}
{counter name="panelFieldCount"}

{capture name=getLink assign=link}{$fields.website.value}{/capture}
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="{$fields.website.name}">
<a href='{$link|to_url}' target='_blank' >{$link}</a>
</span>
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.account_type.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.account_type.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.account_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.account_type.name}" value="{ $fields.account_type.options }">
{ $fields.account_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.account_type.name}" value="{ $fields.account_type.value }">
{ $fields.account_type.options[$fields.account_type.value]}
{/if}
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
{if !$fields.billing_address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ADDRESS' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.billing_address_street.hidden}
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%' >
<input type="hidden" class="sugar_field" id="billing_address_street" value="{$fields.billing_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_city" value="{$fields.billing_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_state" value="{$fields.billing_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_country" value="{$fields.billing_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_postalcode" value="{$fields.billing_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.billing_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.billing_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.billing_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.billing_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.billing_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_billing}
</td>
</tr>
</table>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.shipping_address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_ADDRESS' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.shipping_address_street.hidden}
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%' >
<input type="hidden" class="sugar_field" id="shipping_address_street" value="{$fields.shipping_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_city" value="{$fields.shipping_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_state" value="{$fields.shipping_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_country" value="{$fields.shipping_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_postalcode" value="{$fields.shipping_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.shipping_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.shipping_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.shipping_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.shipping_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.shipping_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_shipping}
</td>
</tr>
</table>
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
{if !$fields.cif_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CIF' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cif_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cif_c.value) <= 0}
{assign var="value" value=$fields.cif_c.default_value }
{else}
{assign var="value" value=$fields.cif_c.value }
{/if} 
<span class="sugar_field" id="{$fields.cif_c.name}">{$fields.cif_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.email1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.email1.hidden}
{counter name="panelFieldCount"}
<span id='email1_span'>
{$fields.email1.value}
</span>
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
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.curso_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CURSO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.curso_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.curso_c.value) <= 0}
{assign var="value" value=$fields.curso_c.default_value }
{else}
{assign var="value" value=$fields.curso_c.value }
{/if} 
<span class="sugar_field" id="{$fields.curso_c.name}">{$fields.curso_c.value}</span>
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
{if !$fields.colegio_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COLEGIO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.colegio_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.colegio_c.value) <= 0}
{assign var="value" value=$fields.colegio_c.default_value }
{else}
{assign var="value" value=$fields.colegio_c.value }
{/if} 
<span class="sugar_field" id="{$fields.colegio_c.name}">{$fields.colegio_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.asignaturas_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASIGNATURAS' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.asignaturas_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.asignaturas_c.name|escape:'html'|url2html|nl2br}">{$fields.asignaturas_c.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
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
{if !$fields.alumno_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ALUMNO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.alumno_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.alumno_c.value) <= 0}
{assign var="value" value=$fields.alumno_c.default_value }
{else}
{assign var="value" value=$fields.alumno_c.value }
{/if} 
<span class="sugar_field" id="{$fields.alumno_c.name}">{$fields.alumno_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.grupo_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GRUPO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.grupo_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.grupo_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.grupo_c.name}" value="{ $fields.grupo_c.options }">
{ $fields.grupo_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.grupo_c.name}" value="{ $fields.grupo_c.value }">
{ $fields.grupo_c.options[$fields.grupo_c.value]}
{/if}
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
{if !$fields.accounts_accounts_1_name.hidden}
&nbsp;
{/if}
</td>
<td width='37.5%'  >
{if !$fields.accounts_accounts_1_name.hidden}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.created_by_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATED' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.created_by_name.hidden}
{counter name="panelFieldCount"}

<span id="created_by" class="sugar_field" data-id-value="{$fields.created_by.value}">{$fields.created_by_name.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_ACCOUNT_INFORMATION").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='Accounts'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.recibosino_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RECIBOSINO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.recibosino_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.recibosino_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.recibosino_c.name}" value="{ $fields.recibosino_c.options }">
{ $fields.recibosino_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.recibosino_c.name}" value="{ $fields.recibosino_c.value }">
{ $fields.recibosino_c.options[$fields.recibosino_c.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.descripcion_recibo_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPCION_RECIBO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.descripcion_recibo_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.descripcion_recibo_c.name|escape:'html'|url2html|nl2br}">{$fields.descripcion_recibo_c.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
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
{if !$fields.cantidad_recibo_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CANTIDAD_RECIBO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cantidad_recibo_c.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.cantidad_recibo_c.name}'>
{sugar_number_format var=$fields.cantidad_recibo_c.value }
</span>
{/if}
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
<div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(3);">
<img border="0" id="detailpanel_3_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(3);">
<img border="0" id="detailpanel_3_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL2' module='Accounts'}
<script>
document.getElementById('detailpanel_3').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL2' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ncp_entregado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NCP_ENTREGADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ncp_entregado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.ncp_entregado_c.value) == "1" || strval($fields.ncp_entregado_c.value) == "yes" || strval($fields.ncp_entregado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.ncp_entregado_c.name}" id="{$fields.ncp_entregado_c.name}" value="$fields.ncp_entregado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ncp_escaneado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NCP_ESCANEADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ncp_escaneado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.ncp_escaneado_c.value) == "1" || strval($fields.ncp_escaneado_c.value) == "yes" || strval($fields.ncp_escaneado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.ncp_escaneado_c.name}" id="{$fields.ncp_escaneado_c.name}" value="$fields.ncp_escaneado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ncp_firmado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NCP_FIRMADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ncp_firmado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.ncp_firmado_c.value) == "1" || strval($fields.ncp_firmado_c.value) == "yes" || strval($fields.ncp_firmado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.ncp_firmado_c.name}" id="{$fields.ncp_firmado_c.name}" value="$fields.ncp_firmado_c.value" disabled="true" {$checked}>
{/if}
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(3, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL2").style.display='none';</script>
{/if}
<div id='detailpanel_4' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(4);">
<img border="0" id="detailpanel_4_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(4);">
<img border="0" id="detailpanel_4_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL3' module='Accounts'}
<script>
document.getElementById('detailpanel_4').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL3' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nca_entregado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NCA_ENTREGADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nca_entregado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.nca_entregado_c.value) == "1" || strval($fields.nca_entregado_c.value) == "yes" || strval($fields.nca_entregado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.nca_entregado_c.name}" id="{$fields.nca_entregado_c.name}" value="$fields.nca_entregado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nca_escaneado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NCA_ESCANEADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nca_escaneado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.nca_escaneado_c.value) == "1" || strval($fields.nca_escaneado_c.value) == "yes" || strval($fields.nca_escaneado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.nca_escaneado_c.name}" id="{$fields.nca_escaneado_c.name}" value="$fields.nca_escaneado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nca_firmado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NCA_FIRMADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nca_firmado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.nca_firmado_c.value) == "1" || strval($fields.nca_firmado_c.value) == "yes" || strval($fields.nca_firmado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.nca_firmado_c.name}" id="{$fields.nca_firmado_c.name}" value="$fields.nca_firmado_c.value" disabled="true" {$checked}>
{/if}
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(4, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL3").style.display='none';</script>
{/if}
<div id='detailpanel_5' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(5);">
<img border="0" id="detailpanel_5_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(5);">
<img border="0" id="detailpanel_5_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL4' module='Accounts'}
<script>
document.getElementById('detailpanel_5').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL4' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nuc_entregado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NUC_ENTREGADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nuc_entregado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.nuc_entregado_c.value) == "1" || strval($fields.nuc_entregado_c.value) == "yes" || strval($fields.nuc_entregado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.nuc_entregado_c.name}" id="{$fields.nuc_entregado_c.name}" value="$fields.nuc_entregado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nuc_escaneado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NUC_ESCANEADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nuc_escaneado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.nuc_escaneado_c.value) == "1" || strval($fields.nuc_escaneado_c.value) == "yes" || strval($fields.nuc_escaneado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.nuc_escaneado_c.name}" id="{$fields.nuc_escaneado_c.name}" value="$fields.nuc_escaneado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nuc_firmado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NUC_FIRMADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nuc_firmado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.nuc_firmado_c.value) == "1" || strval($fields.nuc_firmado_c.value) == "yes" || strval($fields.nuc_firmado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.nuc_firmado_c.name}" id="{$fields.nuc_firmado_c.name}" value="$fields.nuc_firmado_c.value" disabled="true" {$checked}>
{/if}
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(5, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL4").style.display='none';</script>
{/if}
<div id='detailpanel_6' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(6);">
<img border="0" id="detailpanel_6_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(6);">
<img border="0" id="detailpanel_6_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL5' module='Accounts'}
<script>
document.getElementById('detailpanel_6').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL5' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.blog_entregado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BLOG_ENTREGADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.blog_entregado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.blog_entregado_c.value) == "1" || strval($fields.blog_entregado_c.value) == "yes" || strval($fields.blog_entregado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.blog_entregado_c.name}" id="{$fields.blog_entregado_c.name}" value="$fields.blog_entregado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.blog_escaneado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BLOG_ESCANEADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.blog_escaneado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.blog_escaneado_c.value) == "1" || strval($fields.blog_escaneado_c.value) == "yes" || strval($fields.blog_escaneado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.blog_escaneado_c.name}" id="{$fields.blog_escaneado_c.name}" value="$fields.blog_escaneado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.blog_firmado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BLOG_FIRMADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.blog_firmado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.blog_firmado_c.value) == "1" || strval($fields.blog_firmado_c.value) == "yes" || strval($fields.blog_firmado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.blog_firmado_c.name}" id="{$fields.blog_firmado_c.name}" value="$fields.blog_firmado_c.value" disabled="true" {$checked}>
{/if}
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(6, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL5").style.display='none';</script>
{/if}
<div id='detailpanel_7' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(7);">
<img border="0" id="detailpanel_7_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(7);">
<img border="0" id="detailpanel_7_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL6' module='Accounts'}
<script>
document.getElementById('detailpanel_7').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL6' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.prev_entregado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PREV_ENTREGADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prev_entregado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.prev_entregado_c.value) == "1" || strval($fields.prev_entregado_c.value) == "yes" || strval($fields.prev_entregado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.prev_entregado_c.name}" id="{$fields.prev_entregado_c.name}" value="$fields.prev_entregado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.prev_escaneado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PREV_ESCANEADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prev_escaneado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.prev_escaneado_c.value) == "1" || strval($fields.prev_escaneado_c.value) == "yes" || strval($fields.prev_escaneado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.prev_escaneado_c.name}" id="{$fields.prev_escaneado_c.name}" value="$fields.prev_escaneado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.prev_firmado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PREV_FIRMADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prev_firmado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.prev_firmado_c.value) == "1" || strval($fields.prev_firmado_c.value) == "yes" || strval($fields.prev_firmado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.prev_firmado_c.name}" id="{$fields.prev_firmado_c.name}" value="$fields.prev_firmado_c.value" disabled="true" {$checked}>
{/if}
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(7, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL6").style.display='none';</script>
{/if}
<div id='detailpanel_8' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(8);">
<img border="0" id="detailpanel_8_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(8);">
<img border="0" id="detailpanel_8_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL7' module='Accounts'}
<script>
document.getElementById('detailpanel_8').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL7' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.pen_entregado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PEN_ENTREGADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.pen_entregado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.pen_entregado_c.value) == "1" || strval($fields.pen_entregado_c.value) == "yes" || strval($fields.pen_entregado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.pen_entregado_c.name}" id="{$fields.pen_entregado_c.name}" value="$fields.pen_entregado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.pen_escaneado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PEN_ESCANEADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.pen_escaneado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.pen_escaneado_c.value) == "1" || strval($fields.pen_escaneado_c.value) == "yes" || strval($fields.pen_escaneado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.pen_escaneado_c.name}" id="{$fields.pen_escaneado_c.name}" value="$fields.pen_escaneado_c.value" disabled="true" {$checked}>
{/if}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.pen_firmado_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PEN_FIRMADO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.pen_firmado_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.pen_firmado_c.value) == "1" || strval($fields.pen_firmado_c.value) == "yes" || strval($fields.pen_firmado_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.pen_firmado_c.name}" id="{$fields.pen_firmado_c.name}" value="$fields.pen_firmado_c.value" disabled="true" {$checked}>
{/if}
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(8, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL7").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>