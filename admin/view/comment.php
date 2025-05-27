<?php

 include_once(__DIR__ . '/../../config.php');
 

if(isset( $_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM comment WHERE ID = $deleteid"; 
    if(mysqli_query($conn,$sql) == true){
        header ('location:../comment.php');
    }
}
?>
<div class="contact ms-3">
    <div class="contact-title">
        <h1>
            All Contact
        </h1>
    </div>
    <div class="contact-data">
        <?php
        $comment="SELECT*FROM comment ORDER BY id DESC";
        $comment_query = mysqli_query($conn ,$comment);
        echo"<table class='table tabel-light p-3'>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
            
            </tr>
        
        ";
        while($data=mysqli_fetch_assoc($comment_query)){
            $comment_id=$data['id'];
            $comment_name=$data['name'];
            $comment_email=$data['email'];
             
            echo"
            <tr>
            <td>$comment_id</td>
            <td>$comment_name</td>
            <td>$comment_email</td>
            <td>
                        <span class='btn btn-success'>
            
                <a href= 'readcomment.php?readid=$comment_id' class='text-decoration-none text-white'>Read</a>
            </span>
            <span class='btn btn-danger'>
                <a href='view/comment.php?deleteid=$comment_id' class='text-decoration-none text-white'>Delete</a>
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