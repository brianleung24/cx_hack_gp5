<?php
/**
 * Created by PhpStorm.
 * User: kinngaileung
 * Date: 22/10/2016
 * Time: 8:46 PM
 */

$mysqli = new mysqli();
//DB Credentials
$host = "172.17.0.2";
$user = "root";
$password = "password";
$dbname = "hackaton";
//Connect DB
$mysqli->connect($host, $user, $password, $dbname);
if (mysqli_connect_errno()) {
    //echo 'error';
    //echo("Failed to connect, the error message is : ".
    echo mysqli_connect_error();
    //exit();
}