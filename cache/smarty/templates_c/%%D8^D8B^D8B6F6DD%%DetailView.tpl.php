<?php /* Smarty version 2.6.11, created on 2017-05-30 13:18:04
         compiled from cache/modules/Accounts/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Accounts/DetailView.tpl', 33, false),array('function', 'counter', 'cache/modules/Accounts/DetailView.tpl', 38, false),array('function', 'sugar_getimagepath', 'cache/modules/Accounts/DetailView.tpl', 41, false),array('function', 'sugar_translate', 'cache/modules/Accounts/DetailView.tpl', 44, false),array('function', 'sugar_phone', 'cache/modules/Accounts/DetailView.tpl', 86, false),array('function', 'sugar_number_format', 'cache/modules/Accounts/DetailView.tpl', 502, false),array('modifier', 'strip_semicolon', 'cache/modules/Accounts/DetailView.tpl', 58, false),array('modifier', 'substr', 'cache/modules/Accounts/DetailView.tpl', 112, false),array('modifier', 'to_url', 'cache/modules/Accounts/DetailView.tpl', 114, false),array('modifier', 'escape', 'cache/modules/Accounts/DetailView.tpl', 163, false),array('modifier', 'url2html', 'cache/modules/Accounts/DetailView.tpl', 163, false),array('modifier', 'nl2br', 'cache/modules/Accounts/DetailView.tpl', 163, false),array('modifier', 'strip_tags', 'cache/modules/Accounts/DetailView.tpl', 169, false),)), $this); ?>


<script language="javascript">
<?php echo '
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
'; ?>

</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" ><?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> <ul id class="subnav" ><li><?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> </li><li><?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" id="delete_button"><?php endif; ?> </li><li><?php if ($this->_tpl_vars['bean']->aclAccess('edit') && $this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" id="merge_duplicate_button"><?php endif; ?> </li><li><?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Accounts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?></li></ul></li></ul>
</div>
</td>
<td align="right" width="20%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="Accounts_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_INFORMATION','module' => 'Accounts'), $this);?>

<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table id='LBL_ACCOUNT_INFORMATION' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_office']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_OFFICE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_office']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_office']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_office']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['website']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_WEBSITE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['website']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php ob_start();  echo $this->_tpl_vars['fields']['website']['value'];  $this->_smarty_vars['capture']['getLink'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['link'] )):  ob_start();  echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7));  $this->_smarty_vars['capture']['getStart'] = ob_get_contents();  $this->assign('linkStart', ob_get_contents());ob_end_clean(); ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
">
<a href='<?php echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('to_url', true, $_tmp) : smarty_modifier_to_url($_tmp)); ?>
' target='_blank' ><?php echo $this->_tpl_vars['link']; ?>
</a>
</span>
<?php endif;  endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['account_type']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['account_type']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['account_type']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['account_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['account_type']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['account_type']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['account_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['account_type']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['account_type']['options'][$this->_tpl_vars['fields']['account_type']['value']]; ?>

<?php endif;  endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['billing_address_street']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['billing_address_street']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%' >
<input type="hidden" class="sugar_field" id="billing_address_street" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_city" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_state" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_state']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_country" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_postalcode" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_state']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</td>
<td class='dataField' width='1%'>
<?php echo $this->_tpl_vars['custom_code_billing']; ?>

</td>
</tr>
</table>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['shipping_address_street']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['shipping_address_street']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%' >
<input type="hidden" class="sugar_field" id="shipping_address_street" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_city" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_state" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_state']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_country" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_postalcode" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_state']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</td>
<td class='dataField' width='1%'>
<?php echo $this->_tpl_vars['custom_code_shipping']; ?>

</td>
</tr>
</table>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['cif_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CIF','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['cif_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['cif_c']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['cif_c']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['cif_c']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['cif_c']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['cif_c']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['email1']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['email1']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='email1_span'>
<?php echo $this->_tpl_vars['fields']['email1']['value']; ?>

</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['curso_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CURSO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['curso_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['curso_c']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['curso_c']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['curso_c']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['curso_c']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['curso_c']['value']; ?>
</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['colegio_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_COLEGIO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['colegio_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['colegio_c']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['colegio_c']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['colegio_c']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['colegio_c']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['colegio_c']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['asignaturas_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASIGNATURAS','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['asignaturas_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['asignaturas_c']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['asignaturas_c']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['alumno_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALUMNO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['alumno_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['alumno_c']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['alumno_c']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['alumno_c']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['alumno_c']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['alumno_c']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['grupo_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_GRUPO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['grupo_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['grupo_c']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['grupo_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['grupo_c']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['grupo_c']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['grupo_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['grupo_c']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['grupo_c']['options'][$this->_tpl_vars['fields']['grupo_c']['value']]; ?>

<?php endif;  endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['accounts_accounts_1_name']['hidden']): ?>
&nbsp;
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['accounts_accounts_1_name']['hidden']):  endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['created_by_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['created_by_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="created_by" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['created_by']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['created_by_name']['value']; ?>
</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_ACCOUNT_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_2' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL1','module' => 'Accounts'), $this);?>

<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['recibosino_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RECIBOSINO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['recibosino_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['recibosino_c']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['recibosino_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['recibosino_c']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['recibosino_c']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['recibosino_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['recibosino_c']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['recibosino_c']['options'][$this->_tpl_vars['fields']['recibosino_c']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['descripcion_recibo_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPCION_RECIBO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['descripcion_recibo_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['descripcion_recibo_c']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['descripcion_recibo_c']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['cantidad_recibo_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CANTIDAD_RECIBO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['cantidad_recibo_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['cantidad_recibo_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['cantidad_recibo_c']['value']), $this);?>

</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_3' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(3);">
<img border="0" id="detailpanel_3_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(3);">
<img border="0" id="detailpanel_3_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL2','module' => 'Accounts'), $this);?>

<script>
document.getElementById('detailpanel_3').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL2' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['ncp_entregado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NCP_ENTREGADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['ncp_entregado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['ncp_entregado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['ncp_entregado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['ncp_entregado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['ncp_entregado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['ncp_entregado_c']['name']; ?>
" value="$fields.ncp_entregado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['ncp_escaneado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NCP_ESCANEADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['ncp_escaneado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['ncp_escaneado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['ncp_escaneado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['ncp_escaneado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['ncp_escaneado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['ncp_escaneado_c']['name']; ?>
" value="$fields.ncp_escaneado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['ncp_firmado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NCP_FIRMADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['ncp_firmado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['ncp_firmado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['ncp_firmado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['ncp_firmado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['ncp_firmado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['ncp_firmado_c']['name']; ?>
" value="$fields.ncp_firmado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(3, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL2").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_4' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(4);">
<img border="0" id="detailpanel_4_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(4);">
<img border="0" id="detailpanel_4_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL3','module' => 'Accounts'), $this);?>

<script>
document.getElementById('detailpanel_4').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL3' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['nca_entregado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NCA_ENTREGADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['nca_entregado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['nca_entregado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['nca_entregado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['nca_entregado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['nca_entregado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['nca_entregado_c']['name']; ?>
" value="$fields.nca_entregado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['nca_escaneado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NCA_ESCANEADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['nca_escaneado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['nca_escaneado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['nca_escaneado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['nca_escaneado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['nca_escaneado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['nca_escaneado_c']['name']; ?>
" value="$fields.nca_escaneado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['nca_firmado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NCA_FIRMADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['nca_firmado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['nca_firmado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['nca_firmado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['nca_firmado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['nca_firmado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['nca_firmado_c']['name']; ?>
" value="$fields.nca_firmado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(4, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL3").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_5' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(5);">
<img border="0" id="detailpanel_5_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(5);">
<img border="0" id="detailpanel_5_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL4','module' => 'Accounts'), $this);?>

<script>
document.getElementById('detailpanel_5').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL4' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['nuc_entregado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NUC_ENTREGADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['nuc_entregado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['nuc_entregado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['nuc_entregado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['nuc_entregado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['nuc_entregado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['nuc_entregado_c']['name']; ?>
" value="$fields.nuc_entregado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['nuc_escaneado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NUC_ESCANEADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['nuc_escaneado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['nuc_escaneado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['nuc_escaneado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['nuc_escaneado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['nuc_escaneado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['nuc_escaneado_c']['name']; ?>
" value="$fields.nuc_escaneado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['nuc_firmado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NUC_FIRMADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['nuc_firmado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['nuc_firmado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['nuc_firmado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['nuc_firmado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['nuc_firmado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['nuc_firmado_c']['name']; ?>
" value="$fields.nuc_firmado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(5, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL4").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_6' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(6);">
<img border="0" id="detailpanel_6_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(6);">
<img border="0" id="detailpanel_6_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL5','module' => 'Accounts'), $this);?>

<script>
document.getElementById('detailpanel_6').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL5' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['blog_entregado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BLOG_ENTREGADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['blog_entregado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['blog_entregado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['blog_entregado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['blog_entregado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['blog_entregado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['blog_entregado_c']['name']; ?>
" value="$fields.blog_entregado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['blog_escaneado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BLOG_ESCANEADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['blog_escaneado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['blog_escaneado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['blog_escaneado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['blog_escaneado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['blog_escaneado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['blog_escaneado_c']['name']; ?>
" value="$fields.blog_escaneado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['blog_firmado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BLOG_FIRMADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['blog_firmado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['blog_firmado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['blog_firmado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['blog_firmado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['blog_firmado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['blog_firmado_c']['name']; ?>
" value="$fields.blog_firmado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(6, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL5").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_7' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(7);">
<img border="0" id="detailpanel_7_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(7);">
<img border="0" id="detailpanel_7_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL6','module' => 'Accounts'), $this);?>

<script>
document.getElementById('detailpanel_7').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL6' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['prev_entregado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PREV_ENTREGADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['prev_entregado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['prev_entregado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['prev_entregado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['prev_entregado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['prev_entregado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['prev_entregado_c']['name']; ?>
" value="$fields.prev_entregado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['prev_escaneado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PREV_ESCANEADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['prev_escaneado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['prev_escaneado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['prev_escaneado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['prev_escaneado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['prev_escaneado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['prev_escaneado_c']['name']; ?>
" value="$fields.prev_escaneado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['prev_firmado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PREV_FIRMADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['prev_firmado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['prev_firmado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['prev_firmado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['prev_firmado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['prev_firmado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['prev_firmado_c']['name']; ?>
" value="$fields.prev_firmado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(7, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL6").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_8' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(8);">
<img border="0" id="detailpanel_8_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(8);">
<img border="0" id="detailpanel_8_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL7','module' => 'Accounts'), $this);?>

<script>
document.getElementById('detailpanel_8').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL7' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['pen_entregado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PEN_ENTREGADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['pen_entregado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['pen_entregado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['pen_entregado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['pen_entregado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['pen_entregado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['pen_entregado_c']['name']; ?>
" value="$fields.pen_entregado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['pen_escaneado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PEN_ESCANEADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['pen_escaneado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['pen_escaneado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['pen_escaneado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['pen_escaneado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['pen_escaneado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['pen_escaneado_c']['name']; ?>
" value="$fields.pen_escaneado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['pen_firmado_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PEN_FIRMADO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['pen_firmado_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['pen_firmado_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['pen_firmado_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['pen_firmado_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['pen_firmado_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['pen_firmado_c']['name']; ?>
" value="$fields.pen_firmado_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(8, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL7").style.display='none';</script>
<?php endif; ?>
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){SUGAR.util.buildAccessKeyLabels();});
</script>