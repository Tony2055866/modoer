<?php
define('MOD_FLAG', 'item');
define('MOD_ROOT', MUDDER_MODULE . MOD_FLAG . DS);

if(!$_G['mod'] = read_cache(MUDDER_CACHE . MOD_FLAG.'_config.php')) {
    if(isset($_G['modules'][MOD_FLAG])) {
        $C =& $_G['loader']->model('config');
        $C->write_cache(MOD_FLAG);
        include MOD_ROOT . 'inc' . DS . 'cache.php';
        show_error('global_cache_module_succeed');
    }
    if(empty($_G['mod'])) {
        redirect('global_module_not_install');
    }
}
if(!$_G['modules'][MOD_FLAG]) redirect('global_module_disable');
$_G['mod'] = array_merge($_G['mod'], $_G['modules'][MOD_FLAG]);
$MOD =& $_G['mod'];

if(!$MOD['list_filter_li_collapse_num']) $MOD['list_filter_li_collapse_num'] = 1000000;

if(!defined('IN_ADMIN')) {
    $acts = array('ajax','category','member','list','detail','pic','allpic','reviews','top','tag','rss','search','album','mtool','related','tops');
    if(!in_array($_GET['act'], $acts)) $_GET['act'] = 'category';

    include MOD_ROOT . $_GET['act'] . '.php';
}
?>