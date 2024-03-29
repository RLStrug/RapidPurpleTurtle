<?php
class Conf {
    static private $debug = true;

    static private $databases = array(
        'hostname' => 'localhost',
        'database_name' => 'expert',
        'login' => 'admin',
        'password' => 'toto',
        'port' => 3306
    );
    static public function getDebug() {
        return self::$debug;
    }
    static public function getLogin() {
        return self::$databases['login'];
    }
    static public function getHostName() {
        return self::$databases['hostname'];
    }
    static public function getDatabaseName() {
        return self::$databases['database_name'];
    }
    static public function getPassword() {
        return self::$databases['password'];
    }
    static public function getPort() {
        return self::$databases['port'];
    }
}
?>
