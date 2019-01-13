<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 12.01.2019
 * Time: 15:22
 */

require_once ('./includes/classes/Person.php');

class Guard extends Person
{
    private $salary;

    public function __construct($id = NULL, $name = '', $surname = '', $pesel = '', $address = '', $salary = 0.0)
    {
        parent::__construct($id, $name, $surname, $pesel, $address);
        $this->salary = $salary;
    }

    public function updateGuard($name = NULL, $surname = NULL, $pesel = NULL, $address = NULL, $salary = NULL){
        if (!is_null($name)){
            $this->name = $name;
        }
        if (!is_null($surname)){
            $this->surname = $surname;
        }
        if (!is_null($pesel)){
            $this->pesel = $pesel;
        }
        if (!is_null($address)){
            $this->address = $address;
        }
        if (!is_null($salary)){
            $this->salary = $salary;
        }
    }
}