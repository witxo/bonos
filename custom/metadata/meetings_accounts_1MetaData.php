<?php
// created: 2017-05-31 17:37:56
$dictionary["meetings_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'meetings_accounts_1' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'meetings_accounts_1_c',
      'join_key_lhs' => 'meetings_accounts_1meetings_ida',
      'join_key_rhs' => 'meetings_accounts_1accounts_idb',
    ),
  ),
  'table' => 'meetings_accounts_1_c',
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
      'name' => 'meetings_accounts_1meetings_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'meetings_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'meetings_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'meetings_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'meetings_accounts_1meetings_ida',
        1 => 'meetings_accounts_1accounts_idb',
      ),
    ),
  ),
);