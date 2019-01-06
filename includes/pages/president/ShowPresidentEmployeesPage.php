<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 20:54
 */

require_once './includes/pages/AbstractPage.php';

class ShowPresidentEmployeesPage extends AbstractPage
{
    function __construct()
    {
        parent::__construct();
    }

    public function show(){
        $this->display('president/president.employees.default.tpl');
    }
}