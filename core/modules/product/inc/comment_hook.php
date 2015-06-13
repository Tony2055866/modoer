<?php
/**
* @author moufer<moufer@163.com>
* @copyright (c)2001-2009 Moufersoft
* @website www.modoer.com
*/
!defined('IN_MUDDER') && exit('Access Denied');

return array (
    'product' => array(
        'name' => lang('product_hook_comment_name'),
        'table_name' => 'dbpre_product',
        'key_name' => 'pid',
        'title_name' => 'subject',
        'grade_name' => 'grade',
        'total_name' => 'comments',
        'detail_url' => 'product/detail/pid/_ID_',
    ),
);
?>