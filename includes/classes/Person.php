<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 12.01.2019
 * Time: 15:13
 */

abstract class Person
{
    protected $id;
    protected $name;
    protected $surname;
    protected $pesel;

    public function __construct($id = NULL, $name = '', $surname = '', $pesel = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->pesel = $pesel;
    }
}