<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
define('NETWORK_EXPLORER_VERSION', '0.0.1');

/**
 * Get the name and the version of the plugin - Needed
 */
function plugin_version_networkexplorer() {
   return [
      'name'           => 'Network Explorer',
      'version'        => NETWORK_EXPLORER_VERSION,
      'author'         => 'Roy Brannath',
      'license'        => 'GLPv3',
      'homepage'       => 'https://github.com/rbrannath/networkexplorer',
      'requirements'   => [
         'glpi'   => [
            'min' => '9.4',
         ]
      ]
   ];
}

/**
 *  Check if the config is ok - Needed
 */
function plugin_networkexplorer_check_config($verbose = false) {
   if (true) { // Your configuration check
      return true;
   }

   if ($verbose) {
      echo __('Installed / not configured');
   }
   return false;
}
 
/**
 * Check if the prerequisites of the plugin are satisfied - Needed
 */
function plugin_networkexplorer_check_prerequisites() {

   // Version check is not done by core in GLPI < 9.2 but has to be delegated to core in GLPI >= 9.2.
   $version = preg_replace('/^((\d+\.?)+).*$/', '$1', GLPI_VERSION);
   if (version_compare($version, '9.4', '<')) {
      echo "This plugin requires GLPI >= 9.4";
      return false;
   }
   return true;
}

/**
 * Init the hooks of the plugins - Needed
**/
function plugin_init_networkexplorer()
{
    global $PLUGIN_HOOKS;
 echo "vorher!";
	try {
	 Plugin::registerClass(
     'PluginNetworkexplorerExplorer', [
        'addtabon' => [
           'Computer',
           'Profile'
        ]
     ]
   );
} catch (Exception $ex) {
	echo $ex;
}
	    

 $PLUGIN_HOOKS['csrf_compliant']['networkexplorer'] = true;
}
