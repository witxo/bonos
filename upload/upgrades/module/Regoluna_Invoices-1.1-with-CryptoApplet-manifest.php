﻿<?php

$manifest = array (
  'acceptable_sugar_versions' => array ( 'regex_matches' => array ( "6.0\.*" , "6.5\.*") ),
  'acceptable_sugar_flavors' => array( 'CE', 'PRO','ENT' ),
  'readme'=>'',
  'key'=>'fact',
  'author' => 'Rodrigo Saiz Camarero',
  'description' => 'Proporciona soporte básico para generar facturas sencillas. Orientado a pequeñas empresas y autónomos que facturan servicios.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Regoluna Invoices',
  'published_date' => '2010-12-28',
  'type' => 'module',
  'version' => '1.1',
);
		  
$installdefs = array (
  'id' => 'Regoluna_Facturas',
  
  'layoutdefs' => array (
    // Panel de Facturas en Cuentas.
    array( 'from'=> '<basepath>/subpanels/accounts_subpanels.php', 'to_module'=> 'Accounts' ),
  ),
  
  'beans' => 
  array (
    array (
      'module' => 'fact_Facturas',
      'class' => 'fact_Facturas',
      'path' => 'modules/fact_Facturas/fact_Facturas.php',
      'tab' => true,
    ),
    array (
      'module' => 'fact_Items',
      'class' => 'fact_Items',
      'path' => 'modules/fact_Items/fact_Items.php',
      'tab' => false,
    ),
  ),
  
  'relationships' => array (
    array ( 'meta_data' => '<basepath>/SugarModules/relationships/relationships/accounts_fact_facturasMetaData.php' ),
    array ( 'meta_data' => '<basepath>/SugarModules/relationships/relationships/fact_facturas_fact_itemsMetaData.php' ),
  ),
  
  'image_dir' => '<basepath>/icons',
  
  'copy' => array (
    // New modules
    // array ( 'from' => '<basepath>/SugarModules/modules/fact_Productos', 'to' => 'modules/fact_Productos' ),
    array ( 'from' => '<basepath>/SugarModules/modules/fact_Items', 'to' => 'modules/fact_Items' ),
    array ( 'from' => '<basepath>/SugarModules/modules/fact_Facturas', 'to' => 'modules/fact_Facturas' ),
        
    // Some Javascript for Ajax edit o delete items
    array ( 'from' => '<basepath>/custom/include/generic/itemUtils.js', 
            'to' => 'custom/include/generic/itemUtils.js' ),
    // New SugarWidget to delete items from list
    array ( 'from' => '<basepath>/include/generic/SugarWidgets/SugarWidgetSubPanelDeleteRelatedButton.php', 
            'to' => 'include/generic/SugarWidgets/SugarWidgetSubPanelDeleteRelatedButton.php' ),
    // New SugarWidget to quick create Items
    array ( 'from' => '<basepath>/include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonNewItem.php', 
            'to' => 'include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonNewItem.php' ),
    // New SugarWidget to quick edit Items (Needs quickcreate active)
    array ( 'from' => '<basepath>/include/generic/SugarWidgets/SugarWidgetSubPanelQuickItem.php', 
            'to' => 'include/generic/SugarWidgets/SugarWidgetSubPanelQuickItem.php' ),
    // New SugarWidget to arrange Items (Needs quickcreate active)
    array ( 'from' => '<basepath>/include/generic/SugarWidgets/SugarWidgetSubPanelUpDownButton.php', 
            'to' => 'include/generic/SugarWidgets/SugarWidgetSubPanelUpDownButton.php' ),

    // New SugarWidget to add a button to sign invoices
    array ( 'from' => '<basepath>/include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonSignXml.php', 
            'to' => 'include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonSignXml.php' ),
    
    // Sugarwidget and Styles to show description under Items
    array ( 'from' => '<basepath>/include/generic/SugarWidgets/SugarWidgetSubpanelItemDescription.php', 
            'to' => 'include/generic/SugarWidgets/SugarWidgetSubpanelItemDescription.php' ),
    array ( 'from' => '<basepath>/custom/themes/default/fact_FacturasStyle.css', 
            'to' => 'custom/themes/default/fact_FacturasStyle.css' ),
    
    // Sugarwidget to show individual item taxes
    array ( 'from' => '<basepath>/include/generic/SugarWidgets/SugarWidgetSubpanelTax.php', 
            'to' => 'include/generic/SugarWidgets/SugarWidgetSubpanelTax.php' ),
    
    // New SugarField to WYSIWYG edition of Invoice Description and Conditions
    array ( 'from' => '<basepath>/include/SugarFields/Fields/Htmledit', 
            'to' => 'include/SugarFields/Fields/Htmledit' ),
    // New SugarField for IVA and IRPF
    array ( 'from' => '<basepath>/include/SugarFields/Fields/Impuesto', 
            'to' => 'include/SugarFields/Fields/Impuesto' ),
    // New SugarField for Invoice Number
    array ( 'from' => '<basepath>/include/SugarFields/Fields/NumFactura', 
            'to' => 'include/SugarFields/Fields/NumFactura' ),
    
    // We use HTML2PDF (http://html2pdf.fr) to generate PDF output
    array ( 'from' => '<basepath>/include/html2pdf_v3.28', 'to' => 'include/html2pdf' ),
    
    // We use CryptoApplet (http://forja.uji.es/projects/cryptoapplet) to sign PDF and Facturae.
    array ( 'from' => '<basepath>/include/CryptoApplet_V2.1.0', 'to' => 'include/CryptoApplet' ),
    
    // Install new Chart into Charts module
    array ( 'from' => '<basepath>/charts/FacturasChartDashlet', 'to' => 'modules/Charts/Dashlets/FacturasChartDashlet' ),
    
    // Administration sections
    array ( 'from' => '<basepath>/custom/modules/Configurator', 'to' => 'custom/modules/Configurator' ),
    array ( 'from' => '<basepath>/custom/modules/Administration/fact_Facturas_Check.php', 'to' => 'custom/modules/Administration/fact_Facturas_Check.php' ),
  ),
  
  'language' => array (
    array ( 'from' => '<basepath>/SugarModules/language/application/es_es.lang.php', 'to_module' => 'application', 'language' => 'es_es' ),
    array ( 'from' => '<basepath>/SugarModules/language/application/en_us.lang.php', 'to_module' => 'application', 'language' => 'en_us' ),
    
    // Nuevas cadenas para Accounts
    array ( 'from' => '<basepath>/strings/es_es.accounts.php', 'to_module' => 'Accounts', 'language' => 'es_es' ),
    array ( 'from' => '<basepath>/strings/en_us.accounts.php', 'to_module' => 'Accounts', 'language' => 'en_us' ),
    
    // Sección de configuracion
    array ( 'from' => '<basepath>/strings/es_es.configurator.php', 'to_module' => 'Configurator', 'language' => 'es_es' ),
    array ( 'from' => '<basepath>/strings/en_us.configurator.php', 'to_module' => 'Configurator', 'language' => 'en_us' ),
    array ( 'from' => '<basepath>/strings/es_es.administration.php', 'to_module' => 'Administration', 'language' => 'es_es' ),
    array ( 'from' => '<basepath>/strings/en_us.administration.php', 'to_module' => 'Administration', 'language' => 'en_us' ),
  ),
  
  'vardefs' => array (
    array ('from' => '<basepath>/vardefs/accounts_vardefs.php', 'to_module' => 'Accounts' ),
  ),
  
  // Administration section
  'administration' => array(
    array(
      'from' => '<basepath>/administration/fact_Facturas_options.php',
    ),
  ),
  
);
