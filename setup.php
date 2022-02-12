<?php
 
define('NETWORK_EXPLORER_VERSION', '0.0.1');

/**
 * Init the hooks of the plugins - Needed
 *
 * @return void
 */
function plugin_init_myexample() {
   global $PLUGIN_HOOKS;

   //required!
   $PLUGIN_HOOKS['csrf_compliant']['networkexplorer'] = true;

   //some code here, like call to Plugin::registerClass(), populating PLUGIN_HOOKS, ...
}


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
            'min' => '9.5',
            'max' => '9.6'
         ],
         'php'    => [
            'min' => '7.0'
         ]
      ]
   ];
}

/**
 *  Check if the config is ok - Needed
 */
function plugin_networkexplorer_check_config($verbose = false) {
   if (true) {
      return true;
   }

   if ($verbose) {
      echo "Installed, but not configured";
   }
   return false;
}
 
/**
 * Check if the prerequisites of the plugin are satisfied - Needed
 */
function plugin_networkexplorer_check_prerequisites() {
 
    // Check that the GLPI version is compatible
    if (version_compare(GLPI_VERSION, '9.5', 'lt') || version_compare(GLPI_VERSION, '9.6', 'gt')) {
        echo "This plugin Requires GLPI >= 9.5 and GLPI <9.6";
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
 
    $PLUGIN_HOOKS['csrf_compliant']['networkexplorer'] = true;
  echo "iscalled!";
   Plugin::registerClass(
     'PluginNetworkExplorerExplorer', [
        'addtabon' => [
           'Computer',
           'Phone'
        ]
     ]
   );
 
}
