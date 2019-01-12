<?php
/**
 * Project: Prison Administration System
 * Author: Paweł Ledwig
 * IDE: PhpStorm
 * Date: 12.01.2019
 * Time: 17:08
 */

class Database
{
    protected static $instance = NULL;
    protected static $server = "localhost:3306";
    protected static $username = "root";
    protected static $password = "";
    protected static $db = "psw";
    protected static $connection = NULL;
    public function __construct()
    {
        $this->initDatabase();
    }
    function initDatabase()
    {
        self::$connection = new mysqli(self::$server, self::$username, self::$password, self::$db);
    }
    public static function get()
    {
        if (!isset(self::$instance))
            self::$instance = new self();
        return self::$instance;
    }
    public static function closeConnection(){
        if (isset(self::$connection)){
            mysqli_close(self::$connection);
        }
    }
    function isSelectQuery($sql){
        $array = explode(' ', $sql);
        if (strcmp(strtolower($array[0]), 'select') == 0){
            return true;
        } else {
            return false;
        }
    }

    /*
    function _query as parameter takes sql query
    if query type is 'select', then it's fetching result as array of associated arrays
    if query type is other than 'select', it returns boolean value (query success/sql error)
    */
    function _query($sql)
    {
        // Check connection
        if (mysqli_error(self::$connection)) {
            die("Connection failed: " . mysqli_error(self::$connection));
        }
        if ($this->isSelectQuery($sql)){
            // if query is select query, then fetch all to associative table
            return mysqli_fetch_all(self::$connection->query($sql), MYSQLI_ASSOC);
        } else {
            // if query is not select (is boolean), then return it's value
            return self::$connection->query($sql);
        }
    }
}