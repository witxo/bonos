<?php
$dashletData['Bonos_BonosDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Ivan Martin',
  ),
);
$dashletData['Bonos_BonosDashlet']['columns'] = array (
  'numerobono' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMEROBONO',
    'width' => '10%',
    'default' => true,
  ),
  'bonos_bonos_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BONOS_BONOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'BONOS_BONOS_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'precio' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRECIO',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'fechacaducidad' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHACADUCIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'inactivo' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_INACTIVO',
    'width' => '10%',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
