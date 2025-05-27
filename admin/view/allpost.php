<?php

 include_once(__DIR__ . '/../../config.php');
 

if(isset( $_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM post WHERE ID = $deleteid"; 
    if(mysqli_query($conn,$sql) == true){
        header ('location:../manage_blog.php');
    }
}
?>
<div class="contact ms-3">
    <div class="contact-title">
        <h1>
            All Post
        </h1>
    </div>
    <div class="post-data">
        <?php
        $post_data="SELECT*FROM post ORDER BY id DESC";
        $poat_query = mysqli_query($conn ,$post_data);
        echo"<table class='table tabel-light p-3'>
            <tr>
            <td>ID</td>
            <td>Title</td>
            <td>category</td>
            <td>Status</td>
            <td>Action</td>
            
            </tr>
        
        ";
        while($data=mysqli_fetch_assoc($poat_query )){
            $id=$data['id'];
            $title=$data['title'];
            $category=$data['cat'];
            $status=$data['post_status'];
             
            echo"
            <tr>
            <td>$id</td>
            <td>$title</td>
            <td>$category</td>
            <td>$status</td>
            <td>
                        <span class='btn btn-success'>
            
                <a href= 'editpost.php?update=$id' class='text-decoration-none text-white'>Update</a>
            </span>
            <span class='btn btn-danger'>
                <a href='view/allpost.php?deleteid=$id' class='text-decoration-none text-white'>Delete</a>
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