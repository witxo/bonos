<?php
// created: 2017-06-01 18:15:18
$dictionary["bonos_bonos_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bonos_bonos_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Bonos_Bonos',
      'rhs_table' => 'bonos_bonos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bonos_bonos_accounts_c',
      'join_key_lhs' => 'bonos_bonos_accountsaccounts_ida',
      'join_key_rhs' => 'bonos_bonos_accountsbonos_bonos_idb',
    ),
  ),
  'table' => 'bonos_bonos_accounts_c',
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
      'name' => 'bonos_bonos_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bonos_bonos_accountsbonos_bonos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bonos_bonos_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bonos_bonos_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bonos_bonos_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bonos_bonos_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bonos_bonos_accountsbonos_bonos_idb',
      ),
    ),
  ),
);