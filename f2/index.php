<?php 
include 'php_includes/autoload.php';
include 'php_header_footer/html_head.php';
include 'php_header_footer/page_header.php';

include 'php_header_footer/sidebar.php';

/* TODO: 
    1. #hash based routing system
    2. header / footer ready 
    3. auto load all php / js 
*/
echo '<div id="js_main_container" style="min-height:40em;"></div>';
load_all_html_files();



include 'php_header_footer/page_footer.php';