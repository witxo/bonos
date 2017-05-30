<?php
// created: 2017-05-26 13:45:07
$dictionary["cla_clases_activities_calls"] = array (
  'relationships' => 
  array (
    'cla_clases_activities_calls' => 
    array (
      'lhs_module' => 'Cla_Clases',
      'lhs_table' => 'cla_clases',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Cla_Clases',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);