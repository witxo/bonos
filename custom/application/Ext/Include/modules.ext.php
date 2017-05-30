<?php 
 //WARNING: The contents of this file are auto-generated

 
 //WARNING: The contents of this file are auto-generated
$beanList['preci_Precios'] = 'preci_Precios';
$beanFiles['preci_Precios'] = 'modules/preci_Precios/preci_Precios.php';
$moduleList[] = 'preci_Precios';




/* * *******************************************************************************
 * This file is part of KReporter. KReporter is an enhancement developed
 * by Christian Knoll. All rights are (c) 2014 by Christian Knoll
 *
 * This Version of the KReporter is licensed software and may only be used in
 * alignment with the License Agreement received with this Software.
 * This Software is copyrighted and may not be further distributed without
 * witten consent of Christian Knoll
 *
 * You can contact us at info@kreporter.org
 * ****************************************************************************** */

if (!isset($GLOBALS['sugar_config']['addAjaxBannedModules'])
    || !is_array($GLOBALS['sugar_config']['addAjaxBannedModules'])
) {
    $GLOBALS['sugar_config']['addAjaxBannedModules'] = array();
}


if (!array_search('KReports', $GLOBALS['sugar_config']['addAjaxBannedModules']))
    $GLOBALS['sugar_config']['addAjaxBannedModules'][] = 'KReports';

 
 //WARNING: The contents of this file are auto-generated
$beanList['CON_Contratos'] = 'CON_Contratos';
$beanFiles['CON_Contratos'] = 'modules/CON_Contratos/CON_Contratos.php';
$moduleList[] = 'CON_Contratos';


 
 //WARNING: The contents of this file are auto-generated
$beanList['fact_Facturas'] = 'fact_Facturas';
$beanFiles['fact_Facturas'] = 'modules/fact_Facturas/fact_Facturas.php';
$moduleList[] = 'fact_Facturas';
$beanList['fact_Items'] = 'fact_Items';
$beanFiles['fact_Items'] = 'modules/fact_Items/fact_Items.php';
$modules_exempt_from_availability_check['fact_Items'] = 'fact_Items';
$report_include_modules['fact_Items'] = 'fact_Items';
$modInvisList[] = 'fact_Items';


 
 //WARNING: The contents of this file are auto-generated
$beanList['KReports'] = 'KReport';
$beanFiles['KReport'] = 'modules/KReports/KReport.php';
$moduleList[] = 'KReports';


 
 //WARNING: The contents of this file are auto-generated
$beanList['Bonos_Bonos'] = 'Bonos_Bonos';
$beanFiles['Bonos_Bonos'] = 'modules/Bonos_Bonos/Bonos_Bonos.php';
$moduleList[] = 'Bonos_Bonos';


?>