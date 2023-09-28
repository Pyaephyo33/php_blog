<?php
    $host = 'localhost';
    $dbname = 'blog';
    $dbuser = 'root';
    $dbpass = "";
    $db = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);

    if(!$db){
        echo "database connected fail";
    }