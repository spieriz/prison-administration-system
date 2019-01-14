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


    function addEmployee(){
        $n_s = _GP('name_surname');
        $pesel = _GP('pesel');
        $adres = _GP('address');
        $role = _GP('role');
        $salary = _GP('salary');

        $n_s = explode(' ', $n_s);

        for ($i = sizeof($n_s); $i < 2; $i++){
            $n_s[] = '';
        }

        $salary = str_replace(",", ".", $salary);

        try {
            if ($role == 'guard'){
                $new_guard = PersonManager::createGuard(NULL, $n_s[0], $n_s[1], $pesel, $adres, $salary);
                PersonManager::addGuardToDatabase($new_guard);
            } elseif ($role == 'duty_officer'){
                $new_duty_officer = PersonManager::createDutyOfficer(NULL, $n_s[0], $n_s[1], $pesel, $adres, $salary);
                PersonManager::addDutyOfficerToDatabase($new_duty_officer);
            }
        } catch (Exception $e){
            $this->show($e->getMessage(), false);
        }
        $this->show('Dodano pracownika.', true);
    }

    public function show($message_text = NULL, $message_type = false){

        $employees = PersonManager::getAllEmployees();

        $this->assign(array(
            'employees' => $employees,

            'message'       => !is_null($message_text),
            'message_text'  => $message_text,
            'message_type'  => ($message_type) ? 'true' : 'false',
        ));

        $this->display('president/president.employees.default.tpl');
    }
}