
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> -->
    <!-- <meta http-equiv="refresh" content="30"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {display: block; overflow-x: hidden;}
    </style>

</head>
<body class="bg-dark">
    <div class="text-center">
        <h1 style="color:#01AAD4; margin-bottom: 0;">PENTAGON TRAGING AGENCY</h1>
        <small style="padding-top: 0; margin-top:0; color: red;">Dealers in Bolts & Nuts</small>
    </div>



<form method="post" action="create_lpo_process.php">
    <div class="container">
        <div class="row mt-5">
            <div class="column">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="display-6 text-center">Tax Invoice</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">

                            <th>Invoice No</th>
                            <th>Date</th>
                            <th>Company Name</th>

                            <tr>
                                <td><input width="" type="text" id="ref" name="ref_no"></td>
                                <td size="5"><input type="date" id="dat" name="ref_date" size="2"></td>
                                <td><input type="text" id="client" name="cname"></td>
                               

                            </tr>
                            <tr>
                                    <td><div>
                                        <label for="post">Postal Code</label>
                                        <input type="text" id="post" name="pcode">
                                    </div></td>
                                    <td><div>
                                        <label for="reg">Region</label>
                                        <input type="text" id="reg" name="region">
                                    </div></td>
                                    <td><div>
                                        <label for="cntry">Country</label>
                                        <input type="text" id="cntry" name="country">
                                    </div></td>
                             </tr>
                             <tr>
                                    <td colspan="1"><div>
                                        <label for="vran">VRN</label>
                                        <input type="text" id="vran" name="vrn">
                                    </div></td>
                                    <td colspan="1"><div>
                                        <label for="teen">TIN</label>
                                        <input type="text" id="teen" name="tin">
                                    </div></td>
                                     <td>
<!--                                    <input type="text" id="stat" name="pstatus">-->
                                    <select name="pstatus">
                                        <option selected>---Status---</option>
                                        <!-- Selection Box Options -->
                                        <option value="Paid">Paid</option>
                                        <option value="Due">Due</option>
                                    </select>
                                </td>
                             </tr>
                            <th colspan="1">LPO ref</th>
                            <th colspan="1">Delivery Ref</th>
                            <tr>
                                <td colspan="1"><input type="text" id="lpor" name="lpo_ref"></td>
                                <td colspan="1"><input type="text" id="dno" name="dnot"></td>
                            </tr>
                            
                                
                            <tr>
                                <td colspan="4"><button>Create</button></td>
                            </tr>
                            <tbody>
                                
                            </tbody>

    </table>

<!--    <div>-->
<!--        <label for="ref">Invoice No.</label>-->
<!--        <input type="text" id="ref" name="ref_no">-->
<!--    </div>-->

<!--    <div>-->
<!--        <label for="dat">Date</label>-->
<!--        <input type="date" id="dat" name="ref_date">-->
<!--    </div>-->

<!--    <div>-->
<!--        <label for="client">Company Name</label>-->
<!--        <input type="text" id="client" name="cname">-->
<!--    </div>-->

   <!--  <div>
        <label for="post">Postal Code</label>
        <input type="text" id="post" name="pcode">
    </div>
    <div>
        <label for="reg">Region</label>
        <input type="text" id="reg" name="region">
    </div>
    <div>
        <label for="cntry">Country</label>
        <input type="text" id="cntry" name="country">
    </div>
    <div>
        <label for="vran">VRN</label>
        <input type="text" id="vran" name="vrn">
    </div>
    <div>
        <label for="teen">TIN</label>
        <input type="text" id="teen" name="tin">
    </div> -->

<!--    <div>-->
<!--        <label for="stat">Pay Status</label>-->
<!--        <input type="text" id="stat" name="pstatus">-->
<!--    </div>-->

<!--    <div>-->
<!--        <label for="lpor">LPO Ref</label>-->
<!--        <input type="text" id="lpor" name="lpo_ref">-->
<!--    </div>-->

<!--    <div>-->
<!--        <label for="dno">D/Note Ref</label>-->
<!--        <input type="text" id="dno" name="dnot">-->
<!--    </div>-->
<!--    <button>Create</button>-->
</form>

<h1 class="text-danger"></h1>
<?php

//require_once ('../stat0/books/lpo/datab.php');
require_once ('../phpForm/config/db.php');

$query = "SELECT * FROM tax_invoice0";

$result = mysqli_query($conn, $query);
?>

<div class="container">
    <div class="row mt-5">
        <div class="column">
            <div class="card mt-5">
                <div class="card-header">
                    <div class="display-6 text-center">Tax Invoice Records</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>Ref_No</td>
                            <td>Company</td>
                            <td>Address</td>
                            <td>Date</td>
                            <td>Sub-Total</td>
                            <td>VAT</td>
                            <td>Gross Amount</td>
                            <td>Issued Pay</td>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            <td><?php echo $row['ref_id']; ?></td>
                            <td><?php echo $row['cname']; ?></td>
                            <td>P.O.Box <?php echo $row['pcode'] . ", ";
                                            echo $row['region'] . ", ";
                                            echo ['country']; ?>1
                            </td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['sub_total']; ?></td>
                            <td><?php echo $row['vat']; ?></td>
                            <td><?php echo $row['g_amount']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                        </tr>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>