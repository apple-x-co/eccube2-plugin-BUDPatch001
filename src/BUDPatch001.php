<?php
/*
 * This file is part of EC-CUBE
*
* Copyright(c) 2000-2011 LOCKON CO.,LTD. All Rights Reserved.
*
* http://www.lockon.co.jp/
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 2
* of the License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/**
 * プラグインメイン
 *
 * @package BUDPatch001
 * @version $Id$
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