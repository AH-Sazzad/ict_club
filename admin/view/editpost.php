<?php
include_once(__DIR__ . '/../../config.php');

if (isset($_GET['update'])) {
    $updateid = $_GET['update'];
    $sql = "SELECT * FROM post WHERE id = $updateid";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    $id = $data['id'];
    $title = $data['title'];
    $tag = $data['tag'];
    $cat = $data['cat'];
    $description = $data['description'];
    $short_des = $data['short_description'] ?? '';
    $post_status = $data['post_status'];
    $img = $data['img'];

    if (isset($_POST['submit'])) {
        $id=$_POST['id'];
        $title = $_POST['title'];
        $tag = $_POST['tag'];
        $cat = $_POST['cat'];
        $description = $_POST['description'];
        $short_des = $_POST['short_des'] ?? '';
        $post_status = $_POST['post_status'];

        // Image upload
        if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
            $img_name = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            $img_path = "../uploads/" . basename($img_name);
            move_uploaded_file($img_tmp, $img_path);
            $img_sql = ", img='$img_path'";
        } else {
            $img_sql = ""; 
        }

        // Build SQL query dynamically
        $sql = "UPDATE post SET 
                    title='$title',
                    tag='$tag',
                    cat='$cat',
                    description='$description',
                    short_description='$short_des',
                    post_status='$post_status'
                    $img_sql
                WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            echo "Blog updated successfully.";
            header('Location: allpost.php');
            exit;
        } else {
            echo "Blog update unsuccessful.";
        }
    }
}
?>



<form class="p-4 border border-warning rounded" action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="title" class="form-label">Enter Post Title</label>
        <input type="text" class="form-control" name="title" id="title" value="<?php echo $title; ?>" required>
    </div>

    <div class="mb-3">
        <label for="img" class="form-label">Upload Your Image</label>
        <input type="file" class="form-control" name="img" id="img">
        <p class="mt-2">Current Image: <img src="<?php echo $img; ?>" alt="Post Image" width="100"></p>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Write Your Content</label>
        <textarea name="description" id="description" class="form-control" rows="12"><?php echo $description; ?></textarea>
    </div>

    <div class="mb-3">
        <label for="short_des" class="form-label">Short Description</label>
        <textarea name="short_des" id="short_des" class="form-control" rows="4"><?php echo $short_des; ?></textarea>
    </div>

    <div class="row">
        <div class="mb-3 col-lg-6">
            <label for="cat" class="form-label">Select Category</label>
            <select class="form-select" name="cat" id="cat">
                <?php
                $category = "SELECT * FROM post_categories";
                $cat_query = mysqli_query($conn, $category);
                while ($cat_data = mysqli_fetch_assoc($cat_query)) {
                    $cat_id = $cat_data['id'];
                    $cat_name = $cat_data['name'];
                    $selected = ($cat == $cat_name) ? "selected" : "";
                    echo "<option value='$cat_name' $selected>$cat_name</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3 col-lg-6">
            <label for="tag" class="form-label">Select Tag</label>
            <select class="form-select" id="tag" name="tag">
                <?php
                $tag_post = "SELECT * FROM post_tag";
                $tag_query = mysqli_query($conn, $tag_post);
                while ($tag_data = mysqli_fetch_assoc($tag_query)) {
                    $tag_id = $tag_data['id'];
                    $tag_name = $tag_data['tag_name'];
                    $selected = ($tag == $tag_name) ? "selected" : "";
                    echo "<option value='$tag_name' $selected>$tag_name</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="post_status" class="form-label">Post Status</label>
            <select name="post_status" id="post_status" class="form-select">
                <option value="1" <?php echo $post_status == 1 ? 'selected' : ''; ?>>Published</option>
                <option value="0" <?php echo $post_status == 0 ? 'selected' : ''; ?>>Unpublished</option>
            </select>
        </div>
    </div>

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="mb-3">
        <input type="submit" value="Update Post" name="submit" class="btn btn-success px-4 py-2 rounded-pill fs-5">
    </div>
</form>
