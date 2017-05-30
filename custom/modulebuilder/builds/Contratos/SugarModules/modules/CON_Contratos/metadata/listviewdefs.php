<?php
$module_name = 'CON_Contratos';
$OBJECT_NAME = 'CON_CONTRATOS';
$listViewDefs [$module_name] = 
array (
  'ACCION' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCION',
    'width' => '10%',
  ),
  'TIPO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
  ),
  'CATEGORIA' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORIA',
    'width' => '10%',
  ),
  'FECHA_INICIO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_INICIO',
    'width' => '10%',
    'default' => true,
  ),
  'HORAS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_HORAS',
    'width' => '10%',
    'default' => true,
  ),
  'ENVIADO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ENVIADO',
    'width' => '10%',
  ),
  'ESCANEADO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ESCANEADO',
    'width' => '10%',
  ),
  'FIRMADO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_FIRMADO',
    'width' => '10%',
  ),
  'PROFESOR' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROFESOR',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'CON_CONTRATOS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CON_CONTRATOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'CON_CONTRATOS_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'OBSERVACIONES' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_OBSERVACIONES',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'RESOLUTION' => 
  array (
    'width' => '10%',
    'label' => 'LBL_RESOLUTION',
    'default' => false,
  ),
  'PRIORITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIORITY',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_SUBJECT',
    'default' => false,
    'link' => true,
  ),
  'CON_CONTRATOS_NUMBER' => 
  array (
    'width' => '5%',
    'label' => 'LBL_NUMBER',
    'link' => true,
    'default' => false,
  ),
);
?>
