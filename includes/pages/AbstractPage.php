<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 20:54
 */

abstract class AbstractPage
{
    /**
     * reference of the template object
     * @var template
     */
    protected $tpl;

    protected function __construct()
    {
        $this->initTemplate();
    }

    protected function initTemplate() {
        if(isset($this->tpl))
            return true;

        $this->tpl	= new Template();
        return true;
    }

    protected function assign($array, $nocache = true) {
        $this->tpl->assign_vars($array, $nocache);
    }

    protected function display($file) {
        global $LNG;

        $this->assign(array(
            'LNG'			=> $LNG,
        ), false);

        $this->tpl->display($file);

        exit;
    }
}