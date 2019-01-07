<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 19:50
 */

require_once './includes/pages/AbstractPage.php';
require_once './includes/common.php';

$page = 'guardPrisoners';
$mode = 'show';

if (isset($_POST['page'])) {
    $page       = $_POST['page'];
    $page		= str_replace(array('_', '\\', '/', '.', "\0"), '', $page);
}

if (isset($_POST['mode'])) {
    $mode = $_POST['mode'];
}

$pageClass	= 'Show'.ucwords($page).'Page';

$path		= './includes/pages/guard/' . $pageClass.'.php';

if(!file_exists($path)) {
    echo 'file not exists!';
}

require $path;

$pageObj	= new $pageClass;
$pageObj->{$mode}();