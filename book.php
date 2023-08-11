<?php

require_once('datab1.php');

$query = "SELECT * FROM tax_invoice0";

$result = mysqli_query($mysqli, $query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Profoma</title>
</head>
<body class="bg-dark">

 <div class="text-center">
        <h1 style="color:#01AAD4; margin-bottom: 0;">PENTAGON TRAGING AGENCY</h1>
        <small style="padding-top: 0; margin-top:0; color: red;">Dealers in Bolts & Nuts</small>
    </div>

<!------ For LPO records created ---->

<h1 class="text-danger"> </h1>

<div class="container">
    <div class="row mt-5">
        <div class="column">
            <div class="card mt-5">
                <div class="card header">
                    <div class="card display-6">Tax Invoice

                        <form method="post" action="create.php" align="top right" style="font-size: 10px;"><input value="create"
                                                               name="create"
                                                               type="submit"></form>
                    </div>
                    <div class="card body">
                        <table class="table table-bordered text-center">
                           <thead class="table-dark">
                               <tr class="bg-dark text-white">
                                <td>Delivery Ref</td>
                                <td>Invoice No.</td>
                                <td>Date</td>
                                <td>Customer Ref</td>
                                <td>VAT</td>
                                <td>Total</td>
                                <td>Status</td>
                            </tr>
                           </thead>
                            
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                ?>
                                <td><?php echo $row["dnote_ref"]; ?></td>
                                <td><form method="post"><input value="<?php echo $row["ref_no"]; ?>"
                                                               name="<?php echo $row["ref_no"]; ?>"
                                                               type="submit"></form></td>
                                <td><?php echo $row["date"]; ?></td>
                                <td><?php echo $row["cname"]; ?></td>
                                <td><?php echo $row["VAT"]; ?></td>
                                <td><?php echo $row["amount_total"]; ?></td>
                                <td><?php echo $row["status"]; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tfoot class="table-dark">
                                <tr class="bg-dark text-white">
                                <td>Delivery Ref</td>
                                <td>Invoice No.</td>
                                <td>Date</td>
                                <td>Customer Ref</td>
                                <td>VAT</td>
                                <td>Total</td>
                                <td>Status</td>
                            </tr>
                            </tfoot>

                        </table>
                    </div></div></div></div></div>
</div>

</body>
</html>
