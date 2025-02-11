<?php
 require "database/Connection.php";
 require "database/migration/CreateUser.php";
require "database/migration/CreatePost.php";

 $pdo=Connection::make();

 CreateUser::createUserTable($pdo);
 CreatePost::createPostTable($pdo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    Index
</body>
</html>
