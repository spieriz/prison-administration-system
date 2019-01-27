<?php
/**
 * Created by PhpStorm.
 * User: spieriz
 * Date: 2019-01-27
 * Time: 03:44
 */

class EmptyAddressException extends Exception
{
    public function errorMessage() {
        //error message
        return 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>Adres jest pusty.</b>';
    }
}