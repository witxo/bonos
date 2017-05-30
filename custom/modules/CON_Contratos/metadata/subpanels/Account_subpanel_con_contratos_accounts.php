<?php
// created: 2016-10-07 08:39:44
$subpanel_layout['list_fields'] = array (
  'fecha_inicio' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHA_INICIO',
    'width' => '10%',
    'default' => true,
  ),
  'tipo' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TIPO',
    'width' => '10%',
  ),
  'horas' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_HORAS',
    'width' => '10%',
    'default' => true,
  ),
  'categoria' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CATEGORIA',
    'width' => '10%',
  ),
  'escaneado' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_ESCANEADO',
    'width' => '10%',
  ),
  'enviado' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_ENVIADO',
    'width' => '10%',
  ),
  'firmado' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_FIRMADO',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'CON_Contratos',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'CON_Contratos',
    'width' => '5%',
    'default' => true,
  ),
);