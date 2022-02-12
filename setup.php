<?
 
/**
 * Get the name and the version of the plugin - Needed
 */
function plugin_version_networkexplorer() {
   return array('name'           => "Network Explorer",
                'version'        => '0.0.1',
                'author'         => 'Roy Brannath',
                'license'        => 'GPLv3+',
                'homepage'       => 'https://github.com/rbrannath/networkexplorer',
                'minGlpiVersion' => '9.5');
}

/**
 *  Check if the config is ok - Needed
 */
function plugin_networkexplorer_check_config() {
    return true;
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
