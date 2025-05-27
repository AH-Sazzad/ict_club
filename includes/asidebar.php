<?php
include_once(__DIR__ . '/../config.php');  
include_once('admin_head.php');
$admin_info="SELECT*FROM admin_info";
$query=mysqli_query($conn,$admin_info);
$admin_data=mysqli_fetch_assoc($query);
$id=$admin_data['id'];
$name=$admin_data['admin_name'];
$bio=$admin_data['bio'];
$email=$admin_data['email'];
$img=$admin_data['profile'];

$post="SELECT*FROM post ORDER BY id DESC LIMIT 3";
$query_post=mysqli_query($conn,$post);
//


?>

<div class="widget-blocks">
    <div class="row">
      <div class="col-lg-12">
        <div class="widget">
          <div class="widget-body">
            <img loading="lazy" decoding="async" class="avatar-img rounded" src="<?php echo $img;?>" alt="About Me" class="w-100 author-thumb-sm d-block">
            <h2 class="widget-title my-3"><?php echo $name;?></h2>
            <p class="mb-3 pb-2 "><?php echo $bio;?></p> <a href="https://www.facebook.com/sksazzad.doon.7" class="btn btn-sm btn-outline-primary">Know
              More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-6">
        <div class="widget">
          <h2 class="section-title mb-3">Recommended</h2>
          <div class="widget-body">
            <div class="widget-list">
              <?php while($post_data=mysqli_fetch_assoc($query_post)) {?>
              <article class="card article-card article-card-sm blog-card">
                <a href="singel_post.php?view=postview&&id=<?php echo $post_data['id'];?>">
                  <div class="card-image">
                    
                    <img loading="lazy" decoding="async" src="<?php echo $post_data['img']; ?>" alt="Post Thumbnail" class="w-100">
                  </div>
                </a>
                <div class="card-body px-0 pb-0">
                  <ul class="post-meta mb-2">
                    <li> <a href="#!"><?php echo $post_data['tag'];?></a>
                    </li>
                  </ul>
                  <h2><a class="post-title" href="singel_post.php?view=postview&&id=<?php echo $post_data['id'];?>"><?php echo $post_data['title']?></a></h2>
                  <div class="content"> <a class="read-more-btn" href="singel_post.php?view=postview&&id=<?php echo $post_data['id'];?>">Read Full Article</a>
                  </div>
                </div>
              </article>
              
              <?php }?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-6">

        <!--php code for dynamic category-->
        <?php
        $category="SELECT*FROM  post_categories";
        $query=mysqli_query($conn,$category);
        
        
      

        ?>
        <div class="widget">
          <h2 class="section-title mb-3">Categories</h2>
          <div class="widget-body">
            <ul class="widget-list">
              <?php
              while($category_data=mysqli_fetch_assoc($query)){
                 $id=$category_data['id'];
                $name=$category_data['name'];
                echo "<li><a>$name</a></li>";}
              ?>
              
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>