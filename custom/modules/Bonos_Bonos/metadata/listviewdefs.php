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
  'ALUMNO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ALUMNO',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
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
