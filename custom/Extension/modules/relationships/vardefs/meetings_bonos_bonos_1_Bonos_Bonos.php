<?php
// created: 2017-06-02 12:22:48
$dictionary["Bonos_Bonos"]["fields"]["meetings_bonos_bonos_1"] = array (
  'name' => 'meetings_bonos_bonos_1',
  'type' => 'link',
  'relationship' => 'meetings_bonos_bonos_1',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_MEETINGS_TITLE',
  'id_name' => 'meetings_bonos_bonos_1meetings_ida',
);
$dictionary["Bonos_Bonos"]["fields"]["meetings_bonos_bonos_1_name"] = array (
  'name' => 'meetings_bonos_bonos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_MEETINGS_TITLE',
  'save' => true,
  'id_name' => 'meetings_bonos_bonos_1meetings_ida',
  'link' => 'meetings_bonos_bonos_1',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'name',
);
$dictionary["Bonos_Bonos"]["fields"]["meetings_bonos_bonos_1meetings_ida"] = array (
  'name' => 'meetings_bonos_bonos_1meetings_ida',
  'type' => 'link',
  'relationship' => 'meetings_bonos_bonos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_MEETINGS_TITLE',
);
