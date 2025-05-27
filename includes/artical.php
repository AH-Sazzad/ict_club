<?php
include_once(__DIR__ . '/../config.php');  
include_once('admin_head.php');
$post="SELECT*FROM post";
$query=mysqli_query($conn,$post);
?>

<div class="row">
            <div class="col-md-12 mb-4">
            <?php while($post_data=mysqli_fetch_assoc($query)) {?>
              <article class="card article-card article-card-sm blog-card">
                <a href="singel_post.php?view=postview&&id=<?php echo $post_data['id'];?>">
                  <div class="card-image">
                    <div class="post-info"> 
                      <span class="text-uppercase"><?php echo $post_data['date'];?></span>
                    </div>
                    <img loading="lazy" decoding="async" src="<?php echo $post_data['img']; ?>" alt="Post Thumbnail" class="w-100">
                  </div>
                </a>
                <div class="card-body px-0 pb-0">
                  <ul class="post-meta mb-2">
                    <li> <a href="#!"><?php echo $post_data['tag'];?></a>
                    </li>
                  </ul>
                  <h2><a class="post-title" href="singel_post.php?view=postview&&id=<?php echo $post_data['id'];?>"><?php echo $post_data['title']?></a></h2>
                  <p class="card-text"><?php echo $short_description=$post_data['short_description']; ?></p>
                  <div class="content"> <a class="read-more-btn" href="singel_post.php?view=postview&&id=<?php echo $post_data['id'];?>">Read Full Article</a>
                  </div>
                </div>
              </article>
              
              <?php }?>
            </div>
</div>
            