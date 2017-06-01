<?php
$module_name = 'Bonos_Bonos';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'bonos_bonos_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_BONOS_BONOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'BONOS_BONOS_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'bonos_bonos_accounts_name',
      ),
      'fechacaducidad' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHACADUCIDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'fechacaducidad',
      ),
    ),
    'advanced_search' => 
    array (
      'bonos_bonos_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_BONOS_BONOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'BONOS_BONOS_ACCOUNTSACCOUNTS_IDA',
        'name' => 'bonos_bonos_accounts_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
