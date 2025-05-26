<?php
include_once(__DIR__ . '/../config.php');
include_once(__DIR__ . '/../includes/bloghead.php');
include_once(__DIR__ . '/../includes/blogheader.php');
?>


<main>
  <section class="section">
    <div class="container">
      <div class="row no-gutters-lg">
        <div class="col-12">
          <h2 class="section-title">Latest Articles</h2>
        </div>
        <div class="col-lg-8 mb-5 mb-lg-0">
          <?php include_once('../includes/artical.php') ?>
        </div>
        <div class="col-lg-4">
        <?php include_once('../includes/asidebar.php') ?>
</div>
      </div>
    </div>
  </section>
</main>
<?php
 include_once(__DIR__ . '/../includes/footer.php'); ?>
