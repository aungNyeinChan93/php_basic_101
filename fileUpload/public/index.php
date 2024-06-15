<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_error", 1);


define("DD", realpath("../"));
// echo DD;

echo sys_get_temp_dir() . "<br>";                   //C:\Users\Pc\AppData\Local\Temp >> temp
echo php_ini_loaded_file();                         // C:\xampp\php\php.ini  >>>php.ini

// die();

ob_start();
require DD . "/template/main.php";
$html = ob_get_clean();

if (isset($_POST["email"])) {
    var_dump($_POST);
    echo "<br><br>";
    var_dump($_FILES);
    echo "<br><br>";
    $fileName = $_FILES["image"]["name"];
    $fullPath = $_FILES["image"]["full_path"];
    $temName = $_FILES["image"]["tmp_name"];
    $error = $_FILES["image"]["error"];
    $fileSize = $_FILES["image"]["size"];
    $fileType = $_FILES["image"]["type"];           //should not  use   || should MIME

    //userEmail && userPassword
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];

    echo "$userEmail <br> $userPassword <br>";

    echo "fileName : $fileName <br>";
    echo "fullPath : $fullPath <br>";
    echo "temName : $temName <br>";
    echo "error : $error <br>";
    echo "size : $fileSize <br>";
    echo "type : $fileType <br>";

    $tmp = explode('.', $fileName);
    $file_extension = end($tmp);
    var_dump($file_extension);
    $uploadDir = DD . "/public/uploads/";
    if (checkMIME_Type($temName)) {
        if (is_uploaded_file($temName)) {
            echo "file is tem_uploaded ...<br> ";
            $newFile = md5(time() . $fileName) . "." . $file_extension;
            $destinationFile = $uploadDir . $newFile;
            if (move_uploaded_file($temName, $destinationFile)) {
                echo "File is already uploaded ... <br>";
            } else {
                echo "Something Wrong! <br>";
            }
        }
    } else {
        echo "File type is not support ...<br>";
    }
} else {
    echo $html;
}



function checkMIME_Type(string $file): bool
{
    $allowedFileType = [
        "image/jpeg",
        "image/png",
        "image/gif",
        "application/pdf"
    ];
    if (in_array(mime_content_type($file), $allowedFileType)) {
        return true;
    } else {
        return false;
    }
}



