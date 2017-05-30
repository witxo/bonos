<?php
// created: 2016-10-04 10:40:30
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_SALE_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '40%',
    'default' => true,
  ),
  'grupo_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_GRUPO',
    'width' => '10%',
  ),
  'estado' => 
  array (
    'name' => 'estado',
    'vname' => 'LBL_ESTADO',
    'width' => '15%',
    'default' => true,
  ),
  'date_closed' => 
  array (
    'name' => 'fecha_emision',
    'vname' => 'LBL_FECHA_EMISION',
    'width' => '15%',
    'default' => true,
  ),
  'amount' => 
  array (
    'vname' => 'LBL_LIST_AMOUNT',
    'width' => '15%',
    'currency_format' => true,
    'default' => true,
  ),
  'fact_facturas_type' => 
  array (
    'width' => '15%',
    'vname' => 'LBL_TYPE',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'fact_Facturas',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'fact_Facturas',
    'width' => '5%',
    'default' => true,
  ),
  'amount_usdollar' => 
  array (
    'usage' => 'query_only',
  ),
);