<?php
// created: 2016-09-21 22:40:41
$dictionary["con_contratos_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'con_contratos_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'CON_Contratos',
      'rhs_table' => 'con_contratos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'con_contratos_accounts_c',
      'join_key_lhs' => 'con_contratos_accountsaccounts_ida',
      'join_key_rhs' => 'con_contratos_accountscon_contratos_idb',
    ),
  ),
  'table' => 'con_contratos_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'con_contratos_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'con_contratos_accountscon_contratos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'con_contratos_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'con_contratos_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'con_contratos_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'con_contratos_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'con_contratos_accountscon_contratos_idb',
      ),
    ),
  ),
);