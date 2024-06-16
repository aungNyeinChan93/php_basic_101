<?php 
declare(strict_types= 1);
error_reporting(E_ALL); 
ini_set("dislapy_error",1);

session_start();
echo session_id(). "<br>";


echo $_SESSION["test"];

// session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <a href="test.php" target="_blank">Go to test</a>
    </h1>
</body>
</html>


