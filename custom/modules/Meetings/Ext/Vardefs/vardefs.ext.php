<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-06-02 12:21:00
$dictionary['Meeting']['fields']['bono_c']['labelValue']='Bono';

 

 // created: 2017-06-02 12:21:00

 

// created: 2017-06-02 12:22:48
$dictionary["Meeting"]["fields"]["meetings_bonos_bonos_1"] = array (
  'name' => 'meetings_bonos_bonos_1',
  'type' => 'link',
  'relationship' => 'meetings_bonos_bonos_1',
  'source' => 'non-db',
  'module' => 'Bonos_Bonos',
  'bean_name' => 'Bonos_Bonos',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_BONOS_BONOS_TITLE',
  'id_name' => 'meetings_bonos_bonos_1bonos_bonos_idb',
);
$dictionary["Meeting"]["fields"]["meetings_bonos_bonos_1_name"] = array (
  'name' => 'meetings_bonos_bonos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_BONOS_BONOS_TITLE',
  'save' => true,
  'id_name' => 'meetings_bonos_bonos_1bonos_bonos_idb',
  'link' => 'meetings_bonos_bonos_1',
  'table' => 'bonos_bonos',
  'module' => 'Bonos_Bonos',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["meetings_bonos_bonos_1bonos_bonos_idb"] = array (
  'name' => 'meetings_bonos_bonos_1bonos_bonos_idb',
  'type' => 'link',
  'relationship' => 'meetings_bonos_bonos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_BONOS_BONOS_TITLE',
);


// created: 2017-05-31 17:37:56
$dictionary["Meeting"]["fields"]["meetings_accounts_1"] = array (
  'name' => 'meetings_accounts_1',
  'type' => 'link',
  'relationship' => 'meetings_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_MEETINGS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);

?>