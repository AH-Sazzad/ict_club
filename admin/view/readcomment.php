
<?php
 include_once(__DIR__ . '/../../config.php');
include_once(__DIR__.'/../../includes/admin_head.php');


// Set defaults to avoid "undefined variable" warnings
$comment_id = '';
$comment_name = '';
$comment_email = '';
$comment_comment = '';

if (isset($_GET['readid'])) {
    $readid = $_GET['readid'];
    $sql = "SELECT * FROM comment WHERE id = $readid";
    $query = mysqli_query($conn, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        $comment_id = $data['id'];
        $comment_name = $data['name'] ?? '';
        $comment_email = $data['email'] ?? '';
        $comment_comment = $data['comment'] ?? '';
    }
}
?>

<div class="container">
    <div class="title">
        <h1>Comment</h1>
    </div>
    <div>
        <form action="" method="post" class="php-email-form" >
                <div class="row gy-4 p-3">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control " value="<?php echo $comment_name;?>">
                    </div>
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" value="<?php echo $comment_email;?>">
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" name="comment" rows="6" ><?php echo $comment_comment;?></textarea>
                  </div>

                </div>
              </form>
    </div>
</div>