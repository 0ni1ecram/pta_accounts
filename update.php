<?php
include('datab1.php');

$id = $_GET['updatedid'];
$sql = "SELECT * FROM order_ref WHERE id=$id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit']))
{
    $name = $_POST['product'];
    $email = $_POST['description'];
    $pass = $_POST['qty'];
    $unit = $_POST['unit'];
    $hash = $_POST['unit_price'];

    $sql = "UPDATE order_ref SET id='$id', product='$product', description='$email', 
                                qty='$pass',
                                unit='$unit',
                                unit_price='$hash' WHERE id=$id";
    $result = mysqli_query($mysqli, $sql);
    if($result){
        echo "User Updated";
    } else {
        echo mysqli_errno($mysqli);
    }
}

include('create_list.php');
?>