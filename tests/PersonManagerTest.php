<?php
/**
 * Created by PhpStorm.
 * User: spieriz
 * Date: 2019-01-26
 * Time: 13:39
 */

require_once ('../includes/classes/Database.php');
require_once ('../includes/classes/PersonManager.php');
require_once ('../includes/classes/exceptions/EmptyNameException.php');
require_once ('../includes/classes/exceptions/EmptySurnameException.php');
require_once ('../includes/classes/exceptions/EmptyPeselException.php');
require_once ('../includes/classes/exceptions/ShortPeselException.php');
require_once ('../includes/classes/exceptions/LongPeselException.php');
require_once ('../includes/classes/exceptions/EmptyAddressException.php');
require_once ('../includes/classes/exceptions/EmptySalaryException.php');
require_once ('../includes/classes/exceptions/NegativeSalaryException.php');


use PHPUnit\Framework\TestCase;

class PersonManagerTest extends TestCase
{
    public function testCreateGuard()
    {
        // name is null
        try {
            PersonManager::createGuard(NULL, NULL, 'surname', '95100464578', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyNameException::class, $e);
        }

        // name is empty string
        try {
            PersonManager::createGuard(NULL, '', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyNameException::class, $e);
        }

        // surname is null
        try {
            PersonManager::createGuard(NULL, 'name', NULL, '95100464578', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptySurnameException::class, $e);
        }

        // surname is empty string
        try {
            PersonManager::createGuard(NULL, 'name', '', '95100464578', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptySurnameException::class, $e);
        }

        // pesel is null
        try {
            PersonManager::createGuard(NULL, 'name', 'surname', NULL, 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyPeselException::class, $e);
        }

        // pesel length is smaller than 13 characters
        try {
            PersonManager::createGuard(NULL, 'name', 'surname', '9510046457', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(ShortPeselException::class, $e);
        }

        // pesel length is bigger than 13 characters
        try {
            PersonManager::createGuard(NULL, 'name', 'surname', '951004645789', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(LongPeselException::class, $e);
        }

        // address is null
        try {
            PersonManager::createGuard(NULL, 'name', 'surname', '95100464578', NULL, 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyAddressException::class, $e);
        }

        // address is empty string
        try {
            PersonManager::createGuard(NULL, 'name', 'surname', '95100464578', '', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyAddressException::class, $e);
        }

        // salary is null
        try {
            PersonManager::createGuard(NULL, 'name', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', NULL);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptySalaryException::class, $e);
        }

        // salary is empty string
        try {
            PersonManager::createGuard(NULL, 'name', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', '');
        } catch (Exception $e){
            $this->assertInstanceOf(EmptySalaryException::class, $e);
        }

        // salary is negative
        try {
            PersonManager::createGuard(NULL, 'name', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', -123);
        } catch (Exception $e){
            $this->assertInstanceOf(NegativeSalaryException::class, $e);
        }
    }

    public function testCreateDutyOfficer()
    {
        // name is null
        try {
            PersonManager::createDutyOfficer(NULL, NULL, 'surname', '95100464578', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyNameException::class, $e);
        }

        // name is empty string
        try {
            PersonManager::createDutyOfficer(NULL, '', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyNameException::class, $e);
        }

        // surname is null
        try {
            PersonManager::createDutyOfficer(NULL, 'name', NULL, '95100464578', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptySurnameException::class, $e);
        }

        // surname is empty string
        try {
            PersonManager::createDutyOfficer(NULL, 'name', '', '95100464578', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptySurnameException::class, $e);
        }

        // pesel is null
        try {
            PersonManager::createDutyOfficer(NULL, 'name', 'surname', NULL, 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyPeselException::class, $e);
        }

        // pesel length is smaller than 13 characters
        try {
            PersonManager::createDutyOfficer(NULL, 'name', 'surname', '9510046457', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(ShortPeselException::class, $e);
        }

        // pesel length is bigger than 13 characters
        try {
            PersonManager::createDutyOfficer(NULL, 'name', 'surname', '951004645789', 'Nowowiejska 13, Brzeg', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(LongPeselException::class, $e);
        }

        // address is null
        try {
            PersonManager::createDutyOfficer(NULL, 'name', 'surname', '95100464578', NULL, 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyAddressException::class, $e);
        }

        // address is empty string
        try {
            PersonManager::createDutyOfficer(NULL, 'name', 'surname', '95100464578', '', 125.23);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptyAddressException::class, $e);
        }

        // salary is null
        try {
            PersonManager::createDutyOfficer(NULL, 'name', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', NULL);
        } catch (Exception $e){
            $this->assertInstanceOf(EmptySalaryException::class, $e);
        }

        // salary is empty string
        try {
            PersonManager::createDutyOfficer(NULL, 'name', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', '');
        } catch (Exception $e){
            $this->assertInstanceOf(EmptySalaryException::class, $e);
        }

        // salary is negative
        try {
            PersonManager::createDutyOfficer(NULL, 'name', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', -123);
        } catch (Exception $e){
            $this->assertInstanceOf(NegativeSalaryException::class, $e);
        }
    }

    public function testAddGuardToDatabase()
    {
        $guards_list_before = PersonManager::getAllGuards();
        $guards_before = count($guards_list_before);

        $guard = PersonManager::createGuard(NULL, 'name', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', 125.23);

        PersonManager::addGuardToDatabase($guard);

        $guards_list_after = PersonManager::getAllGuards();
        $guards_after = count($guards_list_after);

        $this->assertEquals($guards_before + 1, $guards_after);
    }

    public function testAddDutyOfficerToDatabase()
    {
        $duty_officers_list_before = PersonManager::getAllDutyOfficers();
        $duty_officers_before = count($duty_officers_list_before);

        $duty_officer = PersonManager::createDutyOfficer(NULL, 'name', 'surname', '95100464578', 'Nowowiejska 13, Brzeg', 125.23);

        PersonManager::addDutyOfficerToDatabase($duty_officer);

        $duty_officers_list_after = PersonManager::getAllDutyOfficers();
        $duty_officers_after = count($duty_officers_list_after);

        $this->assertEquals($duty_officers_before + 1, $duty_officers_after);
    }

    public function testGetAllEmployees()
    {
        $guards = PersonManager::getAllGuards();
        $guards_number = count($guards);

        $duty_officers = PersonManager::getAllDutyOfficers();
        $duty_officers_number = count($duty_officers);


        $employees = PersonManager::getAllEmployees();
        $employees_number = count($employees);

        $this->assertEquals($guards_number + $duty_officers_number, $employees_number);
    }

}
