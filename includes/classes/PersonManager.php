<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 12.01.2019
 * Time: 15:55
 */

class PersonManager
{
    public static function createGuard($id = NULL, $name = '', $surname = '', $pesel = '', $salary = 0.0){

        self::validateData($name, $surname, $pesel, $salary);

        return new Guard($id, $name, $surname, $pesel, $salary);
    }

    public static function createDutyOfficer($id = NULL, $name = '', $surname = '', $pesel = '', $salary = 0.0){

        self::validateData($name, $surname, $pesel, $salary);

        return new Guard($id, $name, $surname, $pesel, $salary);
    }

    public static function getAllGuards(){
        $db = Database::get();

        $sql = "SELECT * FROM guard;";
        $result = $db->_query($sql);

        return $result;
    }

    public static function getAllDutyOfficers(){
        $db = Database::get();

        $sql = "SELECT * FROM duty_officer;";
        $result = $db->_query($sql);

        return $result;
    }

    public static function getAllEmployees(){
        return array_merge(self::getAllGuards(), self::getAllDutyOfficers());
    }

    private static function validateData($name = NULL, $surname = NULL, $pesel = NULL, $salary = NULL){
        if (!is_null($name)){
            if (strlen($name) == 0){
                throw new Exception('Imię jest puste.');
            }
        }
        if (!is_null($surname)){
            if (strlen($surname) == 0){
                throw new Exception('Nazwisko jest puste.');
            }
        }
        if (!is_null($pesel)){
            if (strlen($pesel) != 11){
                throw new Exception('Błędny numer PESEL.');
            }
        }
        if (!is_null($salary)){
            if ($salary < 0){
                throw new Exception('Pensja nie może być ujemna.');
            }
        }
    }
}