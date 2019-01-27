<?php
/**
 * Created by PhpStorm.
 * User: spieriz
 * Date: 2019-01-26
 * Time: 14:14
 */

class EmptyNameException extends Exception
{
    public function errorMessage() {
        //error message
        return 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>Imię jest puste.</b>';
    }
}