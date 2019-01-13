<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 12.01.2019
 * Time: 15:55
 */

require_once ('./includes/classes/Guard.php');
require_once ('./includes/classes/DutyOfficer.php');

class PersonManager
{
    public static function createGuard($id = NULL, $name = '', $surname = '', $pesel = '', $address = '', $salary = 0.0){

        self::validateData($name, $surname, $pesel, $address, $salary);

        return new Guard($id, $name, $surname, $pesel, $address, $salary);
    }

    public static function createDutyOfficer($id = NULL, $name = '', $surname = '', $pesel = '', $address = '', $salary = 0.0){

        self::validateData($name, $surname, $pesel, $address, $salary);

        return new DutyOfficer($id, $name, $surname, $pesel, $address, $salary);
    }

    public static function getAllGuards(){
        $db = Database::get();

        $sql = "SELECT * FROM guard;";
        $result = $db->_query($sql);

        foreach ($result as $key => $val){
            $result[$key]['role'] = 'guard';
        }

        return $result;
    }

    public static function getAllDutyOfficers(){
        $db = Database::get();

        $sql = "SELECT * FROM duty_officer;";
        $result = $db->_query($sql);

        foreach ($result as $key => $val){
            $result[$key]['role'] = 'duty_officer';
        }

        return $result;
    }

    public static function addGuardToDatabase(Guard $guard){
        $db = Database::get();

        $sql = "INSERT INTO guard VALUES(NULL, '".$guard->getName()."', '".$guard->getSurname()."', '".$guard->getPesel()
            ."', '".$guard->getSalary()."', '', '', '', '', 1, '".$guard->getAddress()."');";

        $db->_query($sql);
    }

    public static function addDutyOfficerToDatabase(DutyOfficer $dutyOfficer)
    {
        $db = Database::get();

        $sql = "INSERT INTO duty_officer VALUES(NULL, '".$dutyOfficer->getName()."', '".$dutyOfficer->getSurname()."', '".$dutyOfficer->getPesel()
            ."', '".$dutyOfficer->getSalary()."', '', '', '', '', 1, '".$dutyOfficer->getAddress()."');";

        $db->_query($sql);
    }

    public static function getAllEmployees(){
        return array_merge(self::getAllGuards(), self::getAllDutyOfficers());
    }

    private static function validateData($name, $surname, $pesel, $address, $salary){
        if (is_null($name) || strlen($name) == 0){
            throw new Exception('Imię jest puste.');
        }
        if (is_null($surname) || strlen($surname) == 0){
            throw new Exception('Nazwisko jest puste.');
        }
        if (is_null($pesel) || strlen($pesel) != 11){
            throw new Exception('Błędny numer PESEL.');
        }
        if (is_null($address) || strlen($address) == 0){
            throw new Exception('Adres jest pusty.');
        }
        if (is_null($salary) || $salary < 0){
            throw new Exception('Pensja nie może być ujemna.');
        }

    }
}