<?php
ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
 include_once(__DIR__ . '/../../config.php');
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $description=$_POST['description'];

    $add="INSERT INTO post_categories(name,description)VALUES('$name','$description')";

    if (mysqli_query($conn, $add)) {
    $_SESSION['Added'] = "Add New Category Successfully!";
    header('Location:post_cat.php');
    exit;
  } else {
    $_SESSION['Failed'] = "Failed to Add New Category.";
    header('Location:post_cat.php');
    exit;
  }
}
if(isset( $_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM post_categories WHERE ID = $deleteid"; 
    if(mysqli_query($conn,$sql) == true){
        header ('location:post_cat.php');
    }
}

?>
<div class="container">
    <form action="" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p  class="fs-2 fw-normal mb-0 me-3">Add Category</p>
          </div>

          <?php
if (isset($_SESSION['Added'])) {
  echo '<div class="alert alert-success">' . $_SESSION['Added'] . '</div>';
  unset($_SESSION['Added']);
}

if (isset($_SESSION['Failed'])) {
  echo '<div class="alert alert-danger">' . $_SESSION['Failed'] . '</div>';
  unset($_SESSION['Failed']);
}
?>


          <div data-mdb-input-init class="form-outline mb-4">
            <input name="name" type="text" id="catname" class="form-control form-control-lg"
              placeholder="Enter Category Name" required="" />
            <label class="form-label" for="catname">Name</label>
          </div>

          <div data-mdb-input-init class="form-outline mb-3">
            <textarea name="description" type="text" rows="3" id="catdes" class="form-control form-control-lg"
              placeholder="Enter Description"> </textarea>
            <label class="form-label" for="catdes">Description</label>
          </div>

          

          <div class="col-12 text-center">
                    <button type="submit" value="add" name="add" class="btn btn-outline-success">Add </button>
                  </div>

        </form>

        <div class="contact ms-3">
    <div class="contact-title">
        <h1>
            All Category
        </h1>
    </div>
    <div class="contact-data">
        <?php
        $add="SELECT*FROM post_categories ORDER BY id DESC ";
        $add_query = mysqli_query($conn ,$add);
        echo"<table class='table tabel-light p-3'>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Action</td>
            
            </tr>
        
        ";
        while($data=mysqli_fetch_assoc($add_query)){
            $add_id=$data['id'];
            $add_name=$data['name'];
            $add_description=$data['description'];
             
            echo"
            <tr>
            <td>$add_id</td>
            <td>$add_name</td>
            <td>$add_description</td>
            <td>
                        <span class='btn btn-success'>
            
                <a href= 'editpostcat.php?editid=$add_id' class='text-decoration-none text-white'>Edit</a>
            </span>
            <span class='btn btn-danger'>
                <a href='post_cat.php?deleteid=$add_id' class='text-decoration-none text-white'>Delete</a>
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

</div>