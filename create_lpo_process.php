<?php

$mysqli = require __DIR__ . "/datab1.php";

$add_product = false;

// Get data from input
$ref_no = $_POST['ref_no'];
$cname = $_POST['cname'];
$pcode = $_POST['pcode'];
$region = $_POST['region'];
$country = $_POST['country'];
$vrn = $_POST['vrn'];
$tin = $_POST['tin'];
$date = $_POST['ref_date'];
$status =$_POST['pstatus'];
$lpo_ref = $_POST['lpo_ref'];
$dnote_ref = $_POST['dnot'];

// Input data
$sql = "INSERT INTO tax_invoice0 (ref_no, cname, 
                                    pcode, region, country, 
                                    vrn, tin, date, status, 
                                    lpo_ref, dnote_ref)
                                    VALUES (?,?,?,?,?,?,?,?,?,?,?)";



$stmt = $mysqli->stmt_init();



if(! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssssssssss", $ref_no, $cname,
                                $pcode, $region, $country,
                                $vrn, $tin, $date, $status,
                                $lpo_ref, $dnote_ref);
$make_list = false;

// Registration Validation

if ($stmt->execute()) {
//    $ref_no;
//    header("location:create_list.php");
//    $make_list = true;
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $conn = require __DIR__ . "/datab1.php";

        $sql = sprintf("SELECT * FROM tax_invoice0 WHERE ref_no='%s'",
                                $conn->real_escape_string($ref_no));

        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();

        if ($user) {
            session_start();

            session_regenerate_id();

            $_SESSION['ref'] = $user['ref_no'];

            header("Location:create_list.php");
        }
    }
} else {
    if ($mysqli->errno === 1062) {
        die("Invoice created already");
    } else {
        die($mysqli->error . " : " . $mysqli->errno );
    }
}
?>


