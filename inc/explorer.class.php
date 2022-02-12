<?php

class PluginNetworkexplorerExplorer extends CommonGLPI 
{
     function __construct() {
        echo "In BaseClass constructor\n";
    }
     /**
     * This function is called from GLPI to allow the plugin to insert one or more item
     *  inside the left menu of a Itemtype.
     */
   function getTabNameForItem(CommonGLPI $item, $withtemplate = 0) {
      //return self::createTabEntry('Network Explorer');
      echo "should be called";
      return __('My plugin', 'networkexplorerplugin');
   }
 
    /**
     * This function is called from GLPI to render the form when the user click
     *  on the menu item generated from getTabNameForItem()
     */
    static function displayTabContentForItem(CommonGLPI $item, $tabnum=1, $withtemplate=0)
    {
        ?>
        <div>Explorer-Area</div>
        <?
        return true;
    }
}
