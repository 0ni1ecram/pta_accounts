<?php
if(isset($_POST['export'])){

    include('datab1.php');
    // $mysqli = mysqli_connect('localhost', 'root', '', 'login_acc');

    $file = 'data';
    header('Content-type:text/csv; charset=UTF-8');
    header('Content-disposition:attachment; filename=data.csv');

    $output = fopen('php://output', 'w');
    fputcsv($output, array('ID', 'QTY', 'Unit', 'Product', 'Description', 'Unit Price', 'Amount'));

    $sql = "SELECT str.*, sr.* 
                FROM order_list str, tax_invoice0 sr 
                WHERE str.order_ref = sr.ref_no";
    $query = "SELECT ol.order_ref, ol.qty, ol.unit, ol.product, ol.description, ol.unit_price, ol.amount
                    FROM order_list ol, tax_invoice0 ti 
                    WHERE ol.order_ref = ti.ref_no";
    $result = mysqli_query($mysqli, $query);
$n=0;
    while($row=mysqli_fetch_assoc($result)){
        $n=$n;
        if($row['order_ref'] == 11342){
            fputcsv($output, $row);
            $n++;
        }
    }
    $x = $n+1;
    ;
    fputcsv($output, array('','','','','','SUB-TOTAL', '=PRODUCT(SUM(G2:G'.$x.'),(1/1.18))'));
    fputcsv($output, array('','','','','','VAT', '=PRODUCT(SUM(G2:G'.$x.'),(1/1.18),0.18)'));
    fputcsv($output, array('','','','','','Total','=SUM(G2:G'.$x.')'));
    fclose($output);
}
?>