<?php
class CreatePost
{

    public static function createPostTable($pdo)
    {
        if (!$pdo) {
            die("PDO connection is null. Check your database connection.");
        }
        try {
            $query = "CREATE TABLE IF NOT EXISTS posts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL UNIQUE,
                slug VARCHAR(255) NOT NULL UNIQUE,
                body TEXT NOT NULL,
                thumbnail VARCHAR(255),
                is_published VARCHAR(50) DEFAULT '1',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";

            $stmt = $pdo->prepare($query);
            $stmt->execute();

        } catch (\Throwable $th) {
            die($th->getMessage());
        }


    }

}

