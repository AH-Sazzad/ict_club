<?php

 include_once(__DIR__ . '/../../config.php');
 

if(isset( $_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM messages WHERE ID = $deleteid"; 
    if(mysqli_query($conn,$sql) == true){
        header ('location:../allcontact.php');
    }
}
?>
<div class="contact ms-3">
    <div class="contact-title">
        <h1>
            All Members
        </h1>
    </div>
    <div class="contact-data">
        <?php
        $contact_data="SELECT*FROM messages ORDER BY id DESC LIMIT 10";
        $contact_query = mysqli_query($conn ,$contact_data);
        echo"<table class='table tabel-light p-3'>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Subject</td>
            <td>Action</td>
            
            </tr>
        
        ";
        while($data=mysqli_fetch_assoc($contact_query)){
            $contact_id=$data['id'];
            $contact_firstname=$data['firstname'];
            $contact_subject=$data['user_subject'];
             
            echo"
            <tr>
            <td>$contact_id</td>
            <td>$contact_firstname</td>
            <td>$contact_subject</td>
            <td>
                        <span class='btn btn-success'>
            
                <a href= 'contact.php?readid=$contact_id' class='text-decoration-none text-white'>Read</a>
            </span>
            <span class='btn btn-danger'>
                <a href='view/view_contact.php?deleteid=$contact_id' class='text-decoration-none text-white'>Delete</a>
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