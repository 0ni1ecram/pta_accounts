<?php
if(isset($_POST['export'])){
    $con = mysqli_connect('localhost', 'root', '', 'login_acc');

    $file = 'data';
    header('Content-type:text/csv; charset=UTF-8');
    header('Content-disposition: attachment; filename=data.csv');

    $output = fopen('php://output', 'w');
    fputcsv($output, array('ID', 'QTY', 'Unit', 'Product', 'Description',  'Unit Price', 'Amount'));
    // $query = "SELECT * FROM order_list ORDER BY id DESC";
    $query = "SELECT id, qty, unit, product, description, unit_price, amount FROM order_list ORDER BY id DESC";
    $sql = "SELECT str.*, sr.* FROM order_list str, tax_invoice0 sr WHERE str.order_ref = sr.ref_no"; 
    $sql_query = "SELECT str.id str.qty, str.unit, str.product, str.description, str.unit_price, str.amount
                    FROM order_list str, tax_invoice0 sr WHERE str.order_ref = sr.ref_no";
    $result = mysqli_query($con, $sql_query);
    while($row=mysqli_fetch_assoc($result)){
        if($row['order_ref'] == 134){
            fputcsv($output, $row);
        }
        
    }
    fclose($output);
}


?>