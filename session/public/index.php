<?php

declare(strict_types= 1);
error_reporting(E_ALL); 
ini_set("dislapy_error",1);

define("DD", realpath("../") );
echo DD ."<br>";
ini_set("session.save_path",DD ."/storage/session");
session_start();
echo "Session ID : ". session_id() ."<br>";

// var_dump($_COOKIE);
// session_destroy();

$_SESSION["test"] = "Hello world!";     //session create
$_SESSION ["userID"] = "one";
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <h1> <a href="page.php">Go to Page</a></h1>
</body>
</html>



