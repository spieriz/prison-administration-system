<?php
/**
 * Created by PhpStorm.
 * User: spieriz
 * Date: 2019-01-27
 * Time: 03:41
 */

class EmptyPeselException extends Exception
{
    public function errorMessage() {
        //error message
        return 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>Pesel jest pusty.</b>';
    }
}