<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 20:54
 */

require_once './includes/pages/AbstractPage.php';

class ShowGuardPrisonersPage extends AbstractPage
{
    function __construct()
    {
        parent::__construct();
    }

    function dupa(){
        echo 'dupa1';
    }

    function changePrisonersCell(){
        $prisoner_id = _GP('prisoner_id', 0);
        $cell_id = _GP('cell_id', 0);

        PersonManager::changePrisonersCell($prisoner_id, $cell_id);

        $this->show(true);
    }

    function showChangeCell(){
        $prisoner_id = _GP('prisoner_id', 0);

        $prisoners = PersonManager::getAllPrisoners();
        $cells = PersonManager::getAllCells();

        $this->assign(array(
            'prisoner_id'   => $prisoner_id,
            'prisoners'     => $prisoners,
            'cells'         => $cells,
            'choose_cell'   => true,
            'cell_changed'  => false,
        ));

        $this->display('guard/guard.prisoners.default.tpl');
    }

    public function show($cell_changed = false){
        $prisoners = PersonManager::getAllPrisoners();

        $this->assign(array(
            'prisoners'     => $prisoners,
            'choose_cell'   => false,
            'cell_changed'  => $cell_changed,
        ));

        $this->display('guard/guard.prisoners.default.tpl');
    }
}