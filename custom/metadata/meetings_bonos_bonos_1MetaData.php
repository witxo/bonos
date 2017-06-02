<?php
// created: 2017-06-02 12:22:46
$dictionary["meetings_bonos_bonos_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'meetings_bonos_bonos_1' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Bonos_Bonos',
      'rhs_table' => 'bonos_bonos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'meetings_bonos_bonos_1_c',
      'join_key_lhs' => 'meetings_bonos_bonos_1meetings_ida',
      'join_key_rhs' => 'meetings_bonos_bonos_1bonos_bonos_idb',
    ),
  ),
  'table' => 'meetings_bonos_bonos_1_c',
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
      'name' => 'meetings_bonos_bonos_1meetings_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'meetings_bonos_bonos_1bonos_bonos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'meetings_bonos_bonos_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'meetings_bonos_bonos_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'meetings_bonos_bonos_1meetings_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'meetings_bonos_bonos_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'meetings_bonos_bonos_1bonos_bonos_idb',
      ),
    ),
  ),
);