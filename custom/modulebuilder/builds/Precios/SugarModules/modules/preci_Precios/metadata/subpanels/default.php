<?php
$module_name='preci_Precios';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'preci_Precios',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'profesor' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PROFESOR',
      'width' => '10%',
      'default' => true,
    ),
    'alumno' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_ALUMNO',
      'width' => '10%',
      'default' => true,
    ),
    'amount' => 
    array (
      'vname' => 'LBL_LIST_AMOUNT',
      'width' => '15%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'preci_Precios',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'preci_Precios',
      'width' => '5%',
      'default' => true,
    ),
    'amount_usdollar' => 
    array (
      'usage' => 'query_only',
    ),
  ),
);