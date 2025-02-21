<?php
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                'mysql:host='.$config['host'].';dbname='.$config['dbname'],
                $config['user'],$config['password']
            );
         //   return new PDO("mysql:host=127.0.0.1; dbname=cmsphp", 'root', '');
          ///  echo "DB Connected<br>";
        } catch (\Throwable $th) {
            die("Connection failed: ". $th->getMessage());
        }
    }
}


