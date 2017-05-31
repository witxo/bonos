<?php
// created: 2017-05-30 13:36:03
$subpanel_layout['list_fields'] = array (
  'numerobono' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_NUMEROBONO',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'precio' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_PRECIO',
    'width' => '10%',
    'default' => true,
  ),
  'fechacaducidad' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHACADUCIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'inactivo' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_INACTIVO',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Bonos_Bonos',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Bonos_Bonos',
    'width' => '5%',
    'default' => true,
  ),
);