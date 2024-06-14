<?php

// define("DD",realpath("."));


function autoloadContracts($name)
{
    $fileName = DD . "/contract" . $name . "php";
    if (file_exists($fileName)) {
        require $fileName;
    }   
}
function autoloadTemplates($name)
{
    $fileName = DD . "/template" . $name . "php";
    if (file_exists($fileName)) {
        require $fileName;
    }
}


spl_autoload_register("autoloadContracts");
spl_autoload_register("autoloadTemplates");