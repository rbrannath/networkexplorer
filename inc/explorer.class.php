<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
class PluginNetworkExplorerExplorer extends CommonDBTM 
{
     /**
     * This function is called from GLPI to allow the plugin to insert one or more item
     *  inside the left menu of a Itemtype.
     */
   function getTabNameForItem(CommonGLPI $item, $withtemplate = 0) {
      //return self::createTabEntry('Network Explorer');
        var_dump("is called!");
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
