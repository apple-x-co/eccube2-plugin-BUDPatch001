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
 * プラグイン情報
 *
 * @package BUDPatch001
 * @version $Id$
 */
class plugin_info{
    static $PLUGIN_CODE       = "BUDPatch001";
    static $PLUGIN_NAME       = "修正パッチ001";
    static $PLUGIN_VERSION    = "1.0.0";
    static $COMPLIANT_VERSION = "2.13.0+";
    static $AUTHOR            = "Buddying Inc.";
    static $DESCRIPTION       = "データベースにMySQLを使用している場合、セッションが大きくなると一部のデータが欠落する問題を解決します。インストールすると適用されます。";
    static $PLUGIN_SITE_URL   = "http://buddying.jp/eccube/plugins/2/BUDPatch001/";
    static $AUTHOR_SITE_URL   = "http://buddying.jp/";
    static $CLASS_NAME        = "BUDPatch001";
    static $HOOK_POINTS       = array();
    static $LICENSE           = "LGPL";
}
?>