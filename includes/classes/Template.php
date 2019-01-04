<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 20:07
 */

require_once('./includes/libs/Smarty/Smarty.class.php');

class Template extends Smarty
{
    function __construct()
    {
        parent::__construct();
        $this->smartySettings();
    }

    private function smartySettings()
    {
        $this->setTemplateDir('./styles/templates/');
        $this->setConfigDir('./configs/');
        $this->setCacheDir('./cache/');
        $this->setCompileDir('./cache/templates/');
        $this->setCacheLifetime(604800);
    }

    public function assign_vars($var, $nocache = true)
    {
        parent::assign($var, NULL, $nocache);
    }
}