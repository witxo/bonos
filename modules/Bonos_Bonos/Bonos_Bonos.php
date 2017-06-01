<?PHP
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/Bonos_Bonos/Bonos_Bonos_sugar.php');
class Bonos_Bonos extends Bonos_Bonos_sugar {
	
	function Bonos_Bonos(){	
		parent::Bonos_Bonos_sugar();
	}
	
  
  function create_new_bono($numbono, $precio, $cuenta)
  {
    // create a new Call object (represents a record)
$bono = new Bonos_Bonos();

    $rel_name = 'bonos_bonos_accounts';
    $bono->numerobono = $numbono;
    $bono->precio = $precio;
    $bono->account_id_c = $cuenta;
    $bono->load_relationship($rel_name);
    $bono->$rel_name->add($cuenta);  
    $bono->bonos_bonos_accountsaccounts_ida = $cuenta;
     $GLOBALS['log']->fatal($cuenta);
// this is called in the end to save entry, and your new record in Calls will be created with data above
$bono->save();
  }
  
      function save($check_notify = FALSE) {
    
  		$newnumber=2017000000;
		$db = $GLOBALS['db'];
 
    $id =  $this->bean->id;
 
    $query = "SELECT MAX(numerobono) AS total FROM bonos_bonos where deleted = 0";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    
     $newnumber = $row['total'];
if ($this->numerobono == '')
{
	$this->numerobono = $newnumber + 1; // is this correct if i want the custom_id_c to increment?    
}
        $rel_name = 'bonos_bonos_accounts';
        $this->load_relationship($rel_name);
        
       
       
        $accounts = $this->$rel_name->getBeans();

        foreach($accounts as $account){
    		$accountid = $account->bonos_bonos_accountsaccounts_ida;
        }
        

        
       
        if ($this->repeticiones > 0)
        {
          for ($i=1;$i<$this->repeticiones;$i++)
          {
 
            $this->create_new_bono ($this->numerobono+$i, $this->precio,$this->bonos_bonos_accountsaccounts_ida);
          }
          
        }
    parent::save($check_notify);
  }
}
?>