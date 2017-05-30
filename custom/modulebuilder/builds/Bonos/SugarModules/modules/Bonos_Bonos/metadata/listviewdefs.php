<?php
$module_name = 'Bonos_Bonos';
$listViewDefs [$module_name] = 
array (
  'NUMEROBONO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMEROBONO',
    'width' => '10%',
    'default' => true,
  ),
  'BONOS_BONOS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BONOS_BONOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'BONOS_BONOS_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PRECIO' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRECIO',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'INACTIVO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_INACTIVO',
    'width' => '10%',
  ),
  'FECHACADUCIDAD' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHACADUCIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
?>
