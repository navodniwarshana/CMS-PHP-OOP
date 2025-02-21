<?php
$config = require "config.php";
require "database/Connection.php";
require "database/migration/CreateUser.php";
require "database/migration/CreatePost.php";

$pdo = Connection::make($config['database']);

CreateUser::createUserTable($pdo);
CreatePost::createPostTable($pdo);

?>