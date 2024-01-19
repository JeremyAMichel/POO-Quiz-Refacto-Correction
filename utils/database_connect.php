<?php
$dns = "mysql:host=localhost;dbname=quiz_refacto";
$user = "root";
$password = "";

try {
    $database = new PDO ($dns,$user,$password);
} catch (Exception $message) {
    echo "il y a un souci <br>" . "<pre>$message</pre>";
}