<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-05-30 13:16:36
$dictionary["Bonos_Bonos"]["fields"]["accounts_bonos_bonos_1"] = array (
  'name' => 'accounts_bonos_bonos_1',
  'type' => 'link',
  'relationship' => 'accounts_bonos_bonos_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_BONOS_BONOS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bonos_bonos_1accounts_ida',
);
$dictionary["Bonos_Bonos"]["fields"]["accounts_bonos_bonos_1_name"] = array (
  'name' => 'accounts_bonos_bonos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BONOS_BONOS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bonos_bonos_1accounts_ida',
  'link' => 'accounts_bonos_bonos_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bonos_Bonos"]["fields"]["accounts_bonos_bonos_1accounts_ida"] = array (
  'name' => 'accounts_bonos_bonos_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_bonos_bonos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BONOS_BONOS_1_FROM_BONOS_BONOS_TITLE',
);


 // created: 2017-05-30 11:57:02
$dictionary['Bonos_Bonos']['fields']['numerobono']['required']=false;

 
?>