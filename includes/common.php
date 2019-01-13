<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 20:09
 */

require_once ('./includes/classes/Database.php');
require_once ('./includes/classes/Template.php');
require_once ('./includes/classes/PersonManager.php');

function _GP($name, $default = NULL){
    if (!empty($_GET[$name]))
        return $name;

    if (!empty($_POST[$name]))
        return $_POST[$name];

    return $default;
}