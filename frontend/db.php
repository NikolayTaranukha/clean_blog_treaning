<?php
function connection()
{
    $driver = 'mysql';
    $host = 'localhost';
    $db = 'blog';
    $user = 'root';
    $pass = '';
    try {
        $conn = new PDO("$driver:host=$host; dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
