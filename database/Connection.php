<?php
class Connection
{
    public static function make()
    {
        try {
            return new PDO("mysql:host=127.0.0.1; dbname=cmsphp", 'root', '');
          ///  echo "DB Connected<br>";
        } catch (\Throwable $th) {
            die("Connection failed: ". $th->getMessage());
        }
    }
}


