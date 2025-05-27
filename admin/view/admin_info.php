<?php
include_once(__DIR__ . '/../../config.php');



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $email = $_POST['email'];

    // File handling
    if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
        $img_name = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $img_path = "../uploads/" . basename($img_name);
        move_uploaded_file($img_tmp, $img_path);
    } else {
        $img_path = '';
    }

    
    $name = mysqli_real_escape_string($conn, $name);
    $bio = mysqli_real_escape_string($conn, $bio);
    $img_path = mysqli_real_escape_string($conn, $img_path);

    $sql = "INSERT INTO admin_info (admin_name, bio,email, profile) VALUES ('$name', '$bio','$email', '$img_path')";
    
    if (mysqli_query($conn, $sql)==true) {
        echo '<script>alert("Data Added Successfully")</script>';
        header("location:index.php");
    } else {
        echo '<script>alert("Data Not Added")</script>';
    }
}
?>

<div class="container mt-5">
        <h3 class="text-white bg-success text-center p-3 rounded">Hello Admin</h3>
        <form class="p-4 border border-warning rounded" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Enter Your Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Enter Bio</label>
                <input type="text" class="form-control" name="bio" id="bio" required>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Upload Your Image</label>
                <input type="file" class="form-control" name="img" id="img" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Enter Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <input type="submit" value="Submit" name="submit" class="btn btn-success px-4 py-2 rounded-pill fs-5">
            </div>
        </form>
    </div>