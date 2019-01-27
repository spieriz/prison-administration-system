<?php
/**
 * Created by PhpStorm.
 * User: spieriz
 * Date: 2019-01-26
 * Time: 13:39
 */

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

    }

    public function testAddGuardToDatabase()
    {

    }

    public function testAddDutyOfficerToDatabase()
    {

    }

    public function testChangePrisonersCell()
    {

    }

}
