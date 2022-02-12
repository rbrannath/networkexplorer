<?php
 
class PluginNetworkExplorerExplorer extends CommonGLPI
{
     /**
     * This function is called from GLPI to allow the plugin to insert one or more item
     *  inside the left menu of a Itemtype.
     */
    function getTabNameForItem(CommonGLPI $item, $withtemplate=0)
    {
        // return self::createTabEntry('Network Explorer');
        return __('Network Explorer', 'networkexplorerplugin');
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
