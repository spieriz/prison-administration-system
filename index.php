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

$username = NULL;
$password = NULL;

if (isset($_POST['username'])){
    $username = $_POST['username'];
}

if (isset($_POST['password'])){
    $password = $_POST['password'];
}

if (is_null($username) || is_null($password)){
    $pageObj = new ShowLoginPage();
    $pageObj->show();
} else {
    $db = Database::get();
    $sql = "SELECT role FROM users WHERE username = '$username' AND password = '$password';";
    $response = $db->_query($sql);

    if (empty($response)){
        $pageObj	= new ShowLoginPage();
        $pageObj->show('Błędne logowania.');
    } else {
        $path = require($response[0]['role'] . '.php');
        header("Location: " . $path);
    }
}

