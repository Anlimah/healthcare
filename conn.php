<?php

try
{
$pass = '';
$user = 'root';
$host = 'localhost';
$db = 'healthcare';

$j7 = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);

$j7->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo $e->getMessage();
}


?>
