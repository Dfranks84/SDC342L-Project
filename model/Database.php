<?php

/**
 * Database Model
 * Provides access to the existing project database connection.
 */
class Database
{
    public static function connect()
    {
        require __DIR__ . '/../config/database.php';

        return $conn;
    }
}