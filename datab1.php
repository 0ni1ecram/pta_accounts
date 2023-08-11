<?php

$host = "localhost";
$user = "root";
$pass = "";
$datab ="login_acc";

$mysqli = new mysqli( hostname:$host, username:$user, password:$pass, database:$datab );

if( $mysqli->connect_errno){
    die("Connection problem: " . $mysqli->error);
}
return $mysqli;
