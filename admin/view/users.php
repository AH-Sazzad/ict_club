<?php

 include_once(__DIR__ . '/../../config.php');
 

if(isset( $_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM admission_login WHERE ID = $deleteid"; 
    if(mysqli_query($conn,$sql) == true){
        header ('location:../manage_users.php');
    }
}
?>
<div class="contact col-md-3 ms-3">
    <div class="contact-title">
        <h1>
            All Members
        </h1>
    </div>
    <div class="contact-data">
        <?php
        $admission_login="SELECT*FROM admission_login ORDER BY id DESC";
        $admission_query = mysqli_query($conn ,$admission_login);
        echo"<table class='table tabel-light p-3'>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Action</td>
            
            </tr>
        
        ";
        while($data=mysqli_fetch_assoc($admission_query)){
            $admission_id=$data['id'];
            $admission_name=$data['username'];
             
            echo"
            <tr>
            <td>$admission_id</td>
            <td>$admission_name</td>
            <td>
            <span class='btn btn-danger'>
                <a href='view/users.php?deleteid=$admission_id' class='text-decoration-none text-white'>Delete</a>
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