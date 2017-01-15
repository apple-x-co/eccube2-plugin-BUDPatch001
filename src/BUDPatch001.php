<?php
/**
 * プラグインメイン
 *
 * @package BUDPatch001
 * @version 1.0
 */
class BUDPatch001 extends SC_Plugin_Base {
	
    function install($plugins) {
    	$query =& SC_Query_Ex::getSingletonInstance();
        $query->query("ALTER TABLE `dtb_session` CHANGE `sess_data` `sess_data` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL");
        $query->query("ALTER TABLE `dtb_order_temp` CHANGE `session` `session` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL");
    }
    
    function uninstall($plugins) {
        // nop
    }
    
    function enable($plugins) {
        // nop
    }
    
    function disable($plugins) {
        // nop
    }

    function register($helper_plugin) {
        // nop
    }
    
    function preProcess($page) {
        // nop
    }
    
    function process($page) {
        // nop
    }
}
?>