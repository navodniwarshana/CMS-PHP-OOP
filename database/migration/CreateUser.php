<?php

class CreateUser
{

    public static function createUserTable($pdo)
    {

        if (!$pdo) {
            die("PDO connection is null. Check your database connection.");
        }
        try {
            $query = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) NOT NULL UNIQUE,
            email VARCHAR(255) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            thumbnail VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

            $stmt = $pdo->prepare($query);
            $stmt->execute();

        } catch (\Throwable $th) {
            die($th->getMessage());
        }


    }

}

