<?php

class Database
{

    private static $database = "dynamic";
    private static $host = "localhost";
    private static $username = "root";
    private static $port = "3306";
    private static $password = "0724886404Was";

    private static $connection;

    private static function connect()
    {
        if (Database::$connection==null) {
            Database::$connection = new mysqli(Database::$host, Database::$username, Database::$password, Database::$database, Database::$port);
        }
        return Database::$connection;
    }

    public static function iud($query)
    {
        $pre=Database::connect()->prepare($query);
        return $pre;
    }
    public static function s($query)
    {
        return Database::connect()->prepare($query);
    }
}
