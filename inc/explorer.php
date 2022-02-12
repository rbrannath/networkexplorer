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
   switch ($item::getType()) {
      case Computer::getType():
      case Phone::getType():
         return __('Tab from my plugin', 'myexampleplugin');
         break;
   }
   return '';
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
