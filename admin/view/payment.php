<?php

 include_once(__DIR__ . '/../../config.php');
 

if(isset( $_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM admission_payment WHERE ID = $deleteid"; 
    if(mysqli_query($conn,$sql) == true){
        header ('location:../payment.php');
    }
}
?>
<div class="contact ms-3">
    <div class="contact-title">
        <h1>
            All Payment
        </h1>
    </div>
    <div class="contact-data">
        <?php
        $payment_data="SELECT*FROM admission_payment ORDER BY id DESC";
        $payment_query = mysqli_query($conn ,$payment_data);
        echo"<table class='table tabel-light p-3'>
            <tr>
            <td>ID</td>
            <td>PAY Number</td>
            <td>TRX</td>
            <td>Date</td>
            <td>Action</td>
            
            </tr>
        
        ";
        while($data=mysqli_fetch_assoc($payment_query)){
            $pay_id=$data['id'];
            $payment_number=$data['payment_number'];
            $trx_id=$data['trx_id'];
            $payment_date=$data['payment_date'];
             
            echo"
            <tr>
            <td>$pay_id</td>
            <td>$payment_number</td>
            <td>$trx_id</td>
            <td>$payment_date</td>
            <td>
            <span class='btn btn-danger'>
                <a href='view/view_contact.php?deleteid=$pay_id' class='text-decoration-none text-white'>Delete</a>
            </span>
            </td>

            </tr>
            
            ";
        }
        ?>

    </div>
    <table class="table">
  
</table>
</div>