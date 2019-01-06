<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 19:50
 */

require_once ('./includes/common.php');

require('./includes/pages/ShowLoginPage.php');

$user = NULL;

if (isset($_POST['user'])){
    $user = $_POST['user'];
}

if (!is_null($user)){
    $path = require($user . '.php');
    header("Location: " . $path);
    die();
}

$pageObj	= new ShowLoginPage();

$pageObj->show();