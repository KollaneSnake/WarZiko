<?php
class pdoConn{   

    private static $instance = null;

    private static $dbh = null;

    private function __construct(){


        $user="juri";
        $db="warziko";
        $pass="123";
        $host="localhost";
        $charset="utf8";

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        //$dsn->exec("SET CHARACTER SET utf8");
        $opt = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        try {
            self::$dbh = new PDO($dsn, $user, $pass);
        } catch (Exception $e) {
            echo "No connection! ".$e->getMessage();
        }
    }

    public static function getDbh(){
        if(is_null(self::$dbh)){
            self::$instance= new self;
        }
        return self::$dbh;
    }
    protected function __clone(){}

}