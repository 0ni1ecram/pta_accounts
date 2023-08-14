<?php
include ('datab1.php');


if(isset($_GET['delid'])){

	$id = $_GET['delid'];

	$sql = "DELETE FROM tax_invoice0 WHERE id=$id";
	$result = mysqli_query($mysqli, $sql);

	if($result) {
		echo "Record Successful Deleted!";
	} else {
		die('Error!');
	}
}
?>