<?php
    $host = 'localhost';
    $dbname = 'blog';
    $dbuser = 'root';
    $dbpass = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);

    if(!$conn){
        echo "database connected fail";
    }