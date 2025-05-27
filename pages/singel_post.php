<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once(__DIR__ . '/../config.php');
include_once(__DIR__ . '/../includes/bloghead.php');
include_once(__DIR__ . '/../includes/blogheader.php');
?>
<?php
$title="";
if (isset($_GET['view']) && $_GET['view'] == 'postview' && isset($_GET['id'])) {
    $id = ($_GET['id']);  // sanitize to prevent injection

    $query = "SELECT * FROM post WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data=mysqli_fetch_assoc($result);
    $title=$data['title'];
    $tag = $data['tag'];
    $cat = $data['cat'];
    $description = $data['description'];
    $date = $data['date'];
    $img = $data['img'];
}
?>


<main>
  <section class="section">
    <div class="container">
        <div class="row no-gutters-lg">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog-title">

                    <h1><?php echo $title; ?></h1>
                    <p><?php echo $date;?></p>
                    <hr>
                    <img src="<?php echo $img;?>" alt="">
                    <p><?php echo $description; ?></p>
                </div>
                <div class="comment">
  <?php include_once('../includes/comment.php'); ?>
</div>

            </div>
              <div class="col-lg-4">
                    <?php include_once('../includes/asidebar.php') ?>
                </div>
        </div>
    </div>
  </section>
</main>
<?php
 include_once(__DIR__ . '/../includes/blogfooter.php'); ?>
