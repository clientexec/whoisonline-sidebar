<?php
require_once 'modules/admin/models/DashboardPlugin.php';
require_once 'modules/clients/models/UserGateway.php';

class PluginWhoisonline extends DashboardPlugin
{
    /* plugin member vars used by ClientExec */
    var $name = /*T*/"Who's Online"/*/T*/;
    var $smallName = /*T*/"Online"/*/T*/;

    var $description = /*T*/"This shows the users currently logged into your ClientExec."/*/T*/;
    var $default = true; // plugin to be included with fresh installs
    var $cache = true;
    var $sidebarPlugin = true;
    var $order = 2;
    var $iconName  = "icon-eye-open"; // This must be a bootstrap defined icon

    var $jsLibs  = array('plugins/dashboard/whoisonline/plugin.js');
    var $cssPages = array('plugins/dashboard/whoisonline/plugin.css,plugins/dashboard/whoisonline/assets/flags.css');

    //override the getPanel of DashboardPlugin as we do not want or have an index.phtml to output
    //we can just return html directly
    public function getPanel() {
        return '<div id="plugin-whoisonline"><img class="content-loading" src="../images/loader.gif" /></div>';
    }

}
