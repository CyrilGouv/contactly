<?php

abstract class Database {

    private static $pdo;

    private static function setDB() {
        self::$pdo = new PDO( 'mysql:host=localhost;dbname=contactly;charset=utf8', 'root', 'root' );
        self::$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }

    protected function getDB() {
        if ( self::$pdo === null ) {
            self::setDB();
        }

        return self::$pdo;
    }

}