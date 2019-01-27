<?php
/**
 * Created by PhpStorm.
 * User: spieriz
 * Date: 2019-01-26
 * Time: 14:14
 */

class EmptySurnameException extends Exception
{
    public function errorMessage() {
        //error message
        return 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>Nazwisko jest puste.</b>';
    }
}