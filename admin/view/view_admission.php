<?php

 include_once(__DIR__ . '/../../config.php');
 

if(isset( $_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM admission_info WHERE ID = $deleteid"; 
    if(mysqli_query($conn,$sql) == true){
        header ('location:../admission.php');
    }
}
?>
<div class="contact ms-3">
    <div class="contact-title">
        <h1>
            All Admission
        </h1>
    </div>
    <div class="contact-data">
        <?php
        $admission_info="SELECT*FROM admission_info ORDER BY id DESC";
        $admission_query = mysqli_query($conn ,$admission_info);
        echo"<table class='table tabel-light p-3'>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Roll</td>
            <td>Subject</td>
            
            </tr>
        
        ";
        while($data=mysqli_fetch_assoc($admission_query)){
            $admission_id=$data['id'] ??'';
            $admission_name=$data['first_name'] ??'';
            $admission_roll=$data['roll_number'] ??'';
            $admission_subject=$data['subject'] ??'';
             
            echo"
            <tr>
            <td>$admission_id</td>
            <td>$admission_name</td>
            <td>$admission_roll</td>
            <td>$admission_subject</td>
            <td>
                        <span class='btn btn-success'>
            
                <a href= 'admission_view.php?readid=$admission_id' class='text-decoration-none text-white'>Read</a>
            </span>
            <span class='btn btn-danger'>
                <a href='view/view_admission.php?deleteid=$admission_id' class='text-decoration-none text-white'>Delete</a>
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