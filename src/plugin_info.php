<?php
/**
 * プラグイン情報
 *
 * @package BUDPatch001
 * @version 1.0
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