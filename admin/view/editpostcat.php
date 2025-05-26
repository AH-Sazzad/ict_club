<?php
ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once(__DIR__.'/../../config.php');
if(isset($_GET['editid'])){
    $edit=$_GET['editid'];
    $sql="SELECT *FROM post_categories WHERE id=$edit";
    $query=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($query);
    $id=$data['id'];
    $name=$data['name'];
    $description=$data['description'];

    if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql="UPDATE  post_categories SET name ='$name',description='$description' WHERE id ='$id'";

     if (mysqli_query($conn, $sql)) {
    $_SESSION['success'] = " Category Update Successfully!";
    header('Location:post_cat.php');
    exit;
  } else {
    $_SESSION['error'] = "Failed to Update Category.";
    header('Location:post_cat.php');
    exit;
  }
}
}


?>
<div class="container">
    <form action="" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p  class="fs-2 fw-normal mb-0 me-3">Update Category</p>
          </div>
            <div class="mb-3" hidden>
            <input type="text" name="id" id="id" class="form-control" required value = "<?php echo $id ?>">
        </div>

          <div data-mdb-input-init class="form-outline mb-4">
            <input name="name" type="text" id="catname" class="form-control form-control-lg"
              placeholder="Enter Category Name" required=""  value = "<?php echo $name ?>" />
            <label class="form-label" for="catname">Name</label>
          </div>

          <div data-mdb-input-init class="form-outline mb-3">
            <input name="description" type="text" rows="3" id="catdes" class="form-control form-control-lg"
              placeholder="Enter Description"  value = "<?php echo $description ?>"> 
            <label class="form-label" for="catdes">Description</label>
          </div>

          

          <div class="col-12 text-center">
                    <button type="submit" value="Update" name="update" class="btn btn-outline-success">Update </button>
                  </div>

        </form>
</div>