<?php



$cookieName = "test";
$cookieValue = "Testing cookie ...";
$expire = time() + 3600;
$path = "/";
$domain = "localhost";
$secure = false;
$httpOnly = true;

$ok = setcookie($cookieName, $cookieValue, $expire, $path, $domain, $secure, $httpOnly);

if ($ok) {
    echo "cokkies is found";
}

$get = $_GET;
echo $get;