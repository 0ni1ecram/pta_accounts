<?php
session_start();

if($_SESSION['ref'])
{
    $mysqli = require __DIR__ . "/datab1.php";

    $sql = "SELECT * FROM tax_invoice0
            WHERE ref_no={$_SESSION['ref']}";

    

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice List of Goods</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>List of Items</h1>
    <!-- <h2>Invoice No. <?=htmlspecialchars($user['ref_no']) ?></h2> -->

    <h2>Products</h2>
    <form method="post" action="create_list_process.php">
    <div class="container">
        <div class="row mt-5">
            <div class="column">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="display-6 text-center">
                            Add Product
                            <!-- Invoice No: <?= htmlspecialchars($user['ref_no'])?> -->
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr>
                                    <label>Invoice No.</label>
                                    <input type="text" name="ref"
                                            content="<?=htmlspecialchars($user['ref_no']) ?>"
                                            value = "<?=htmlspecialchars($user['ref_no']) ?>"
                                            placeholder = "<?=htmlspecialchars($user['ref_no']) ?>" 
                                            style="width: 50px; margin: 5px; font-size: 12px;">
                                </tr>
                                <thead>
                                    <td>Quantity</td>
                                    <td>Unit</td>
                                    <td>Product Name</td>
                                    <td>Description</td>
                                    <td>Unit Price</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" name="qty" 
                                            style="width: 45px;">
                                        </td>
                                        <td><input type="text" name="units" 
                                            style="width: 40px;">
                                        </td>
                                        <td><input type="text" name="pname" 
                                            style="width: 100px;">
                                        </td>
                                        <td><input type="text" name="desc" 
                                            style="width: 200px;">
                                        </td>
                                        <td><input type="text" name="price" 
                                            style="width: 80px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><button>Add Product</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </form>

<!-- Order List View  -->


<?php

$query1 = "SELECT * FROM order_list WHERE order_ref= {$_SESSION['ref']}";

$result1 = mysqli_query($mysqli, $query1);



?>

    <div class="container">
    <div class="row mt-1">
        <div class="column">
            <div class="card mt-1">
                <div class="card-header">
                    <div class="display-8 text-center">
                        List of Products
                        Invoice No: <?= htmlspecialchars($user['ref_no'])?>
                    </div>
                </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered text-center table-responsive-md">
                            <thead class="table-dark">
                                <tr class="bg-dark text-white">
                                <!-- <td>Order Ref</td> -->
                                <td>QTY</td>
                                <td>Unit</td>
                                <td>Product</td>
                                <td>Description</td>
                                <td>Price</td>
                                <td>Amount</td>
                                <td colspan="2"></td>
                            </tr>
                            </thead>
                            
                            <tbody class="table-group-divider">
                                <tr>
                            <?php
                            while($row = mysqli_fetch_assoc($result1))
                            {
                            ?>
                                <!-- <td><?php echo $row['order_ref']; ?></td> -->
                                <td><?php echo $row['qty']; ?></td>
                                <td><?php echo $row['unit']; ?></td>
                                <td><?php echo $row['product']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo number_format($row['unit_price'], 2); ?></td>
                                <td><?php echo number_format($row['amount'], 2); ?></td>

                                <td><a href="#" class="btn btn-primary" 
                                    style="font-size: 10px;">Edit</a></td>
                                <td><a href="#" class="btn btn-danger"
                                    style=" font-size: 10px;">Del</a></td>
                            </tr>
                            </tbody>
                            
                            <?php
                            }
                            ?>
                            <tr>
                                <td colspan="5">Total</td>
                                <td><input type="text" name="ref"
                                            content="<?=htmlspecialchars($user['ref_no']) ?>"
                                            value = "<?=htmlspecialchars($user['ref_no']) ?>"
                                            placeholder = "<?=htmlspecialchars($user['ref_no']) ?>" 
                                        ></td>
                                <td colspan="2">
                                    <form action="end_create_list.php">
                                        <button>Create Invoice</button>
                                    </form>

                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>