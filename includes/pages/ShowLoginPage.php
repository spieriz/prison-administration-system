<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 02.01.2019
 * Time: 20:54
 */

require ('AbstractPage.php');

class ShowLoginPage extends AbstractPage
{
    function __construct()
    {
        parent::__construct();
    }

    public function show($message_text = NULL, $message_type = false){

        $this->assign(array(
            'message'       => !is_null($message_text),
            'message_text'  => $message_text,
            'message_type'  => ($message_type) ? 'true' : 'false',
        ));

        $this->display('login.tpl');
    }
}