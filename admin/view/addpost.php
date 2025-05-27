<?php
include_once(__DIR__ . '/../../config.php');
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $tag = $_POST['tag'];
    $cat = $_POST['cat'];
    $description = $_POST['description'];
    $short_des = $_POST['short_des'];
    $post_status = $_POST['post_status'];

    // File handling
    if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
        $img_name = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $img_path = "../uploads/" . basename($img_name);
        move_uploaded_file($img_tmp, $img_path);
    } else {
        $img_path = '';
    }

    
    $title = mysqli_real_escape_string($conn, $title);
    $tag = mysqli_real_escape_string($conn, $tag);
    $cat = mysqli_real_escape_string($conn, $cat);
    $description = mysqli_real_escape_string($conn, $description);
    $short_description = mysqli_real_escape_string($conn, $short_des);
    $img_path = mysqli_real_escape_string($conn, $img_path);

    $sql = "INSERT INTO post (title, tag,cat, description,short_description,img,post_status) VALUES ('$title', '$tag','$cat', '$description','$short_description','$img_path',$post_status)";
    
    if (mysqli_query($conn, $sql)==true) {
        echo '<script>alert("Post Added Successfully")</script>';
        header("location:addpost.php");
    } else {
        echo '<script>alert("post Not Added")</script>';
    }
}



?>


<div class="container ">
    <div class="title d-flex justify-contant-center align-item-center">
        <h3>Add New Post</h3>
        <hr>
    </div>
    <div class="form">
        <form class="p-4 border border-warning rounded" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Enter Post Title</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Upload Your Image</label>
                <input type="file" class="form-control" name="img" id="img" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Write Your contant</label>
                <textarea name="description" id="description" class="form-control" rows="12"></textarea>
                
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Copy And Past The Top Part Of Your Artical</label>
                <textarea name="short_des" id="short_description" class="form-control" rows="4"></textarea>
                
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="cat" class="form-label"></label>
                    <select class='form-select' name="cat" id='cat' aria-label='Default select example'>
                    <?php 
                         $category="SELECT*FROM post_categories";
                         $query=mysqli_query($conn,$category);
                         while($data=mysqli_fetch_assoc($query)){
                            $id=$data['id'];
                             $cat_name=$data['name'];
                              echo "
                                    <option selected>$cat_name</option> ";
                         }
                        
                       
                    ?>
                     </select>
                    
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="tag" class="form-label"></label>
                                                 <select class='form-select' id='Tag' name="tag" aria-label='Default select example'>
                    <?php 
                         $tag="SELECT*FROM post_tag";
                         $query=mysqli_query($conn,$tag);
                         while($tag_data=mysqli_fetch_assoc($query)){
                            $id=$tag_data['id'];
                             $tag_name=$tag_data['tag_name'];
                            


                            echo " <option>$tag_name</option>";
                   
                    
                         }
                        
                       
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                <label for="Post Status" class="form-label">Post Status</label>
                <select name="post_status" id="post_status">
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
                </select>
                
            </div>
            </div>
            <div class="mb-3">
                <input type="submit" value="Post" name="submit" class="btn btn-success px-4 py-2 rounded-pill fs-5">
            </div>
        </form>
    </div>

</div>