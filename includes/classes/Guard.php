<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 12.01.2019
 * Time: 15:22
 */

require_once ('Person.php');

class Guard extends Person
{
    private $salary;

    /**
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function __construct($id = NULL, $name = '', $surname = '', $pesel = '', $address = '', $salary = 0.0)
    {
        parent::__construct($id, $name, $surname, $pesel, $address);
        $this->salary = $salary;
    }

    public function updateGuard($name = NULL, $surname = NULL, $pesel = NULL, $address = NULL, $salary = NULL){
        if (!is_null($name)){
            $this->setName($name);
        }
        if (!is_null($surname)){
            $this->setSurname($surname);
        }
        if (!is_null($pesel)){
            $this->setPesel($pesel);
        }
        if (!is_null($address)){
            $this->setAddress($address);
        }
        if (!is_null($salary)){
            $this->setSalary($salary);
        }
    }
}