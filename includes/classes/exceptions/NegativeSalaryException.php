<?php
/**
 * Created by PhpStorm.
 * User: spieriz
 * Date: 2019-01-27
 * Time: 03:49
 */

class NegativeSalaryException extends Exception
{
    public function errorMessage() {
        //error message
        return 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>Pensja nie może być ujemna.</b>';
    }
}