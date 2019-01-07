<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 20:54
 */

require_once './includes/pages/AbstractPage.php';

class ShowGuardChooseCellPage extends AbstractPage
{
    function __construct()
    {
        parent::__construct();
    }

    public function show(){
        $this->display('guard/guard.prisoners.choose.cell.tpl');
    }
}