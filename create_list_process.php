<?php

$mysqli = require __DIR__ . "/datab1.php";

// Getting the Amount
$qty = $_POST["qty"];
$price = $_POST["price"];

$amount = $qty * $price;

// Input Data
$sql = "INSERT INTO order_list (order_ref, qty, unit, product, 
                                description, unit_price, amount)
                                VALUES (?,?,?,?,?,?,?)";


$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssssss", $_POST['ref'], $_POST['qty'], $_POST['units'],
    $_POST['pname'], $_POST['desc'], $_POST['price'],
    $amount);

if(! $stmt->execute()) {
    die("Connection Good" . $mysqli->error);
}
//$stmt->execute();
header("location:create_list.php");
//
// Data Entry validation;





?>