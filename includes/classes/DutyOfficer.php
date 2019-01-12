<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 12.01.2019
 * Time: 16:36
 */

class DutyOfficer extends Person
{
    private $salary;

    public function __construct($id = NULL, $name = '', $surname = '', $pesel = '', $salary = 0.0)
    {
        parent::__construct($id, $name, $surname, $pesel);
        $this->salary = $salary;
    }

    public function updateDutyOfficer($name = NULL, $surname = NULL, $pesel = NULL, $salary = NULL){
        if (!is_null($name)){
            $this->name = $name;
        }
        if (!is_null($surname)){
            $this->surname = $surname;
        }
        if (!is_null($pesel)){
            $this->pesel = $pesel;
        }
        if (!is_null($salary)){
            $this->salary = $salary;
        }
    }
}