<?php

/**
 * Singleton - connection class
 */
abstract class Model{

    private static $conn;

    /**
     * Methode to instance a PDO object
     *
     * @return PDO object
     */
    private static function setConnection(){
        self::$conn = new PDO ("mysql:host=localhost;dbname=biblio;charset=utf8","root");
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        return self::$conn;
    }

    /**
     * Getter methode of the PDO object, if it does not existe, the methode call setConnection
     *
     * @return void
     */
    protected function getConnection(){
        if(self::$conn===null){
            self::$conn = $this->setConnection();
        }
        return self::$conn;
    }
}