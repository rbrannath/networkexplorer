<?php
 
class PluginNetworkExplorerExplorer extends CommonDBTM 
{
     /**
     * This function is called from GLPI to allow the plugin to insert one or more item
     *  inside the left menu of a Itemtype.
     */
    function getTabNameForItem(CommonGLPI $item, $withtemplate=0)
    {
       echo "iscalledToo!";
        return self::createTabEntry('Network Explorer');
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
