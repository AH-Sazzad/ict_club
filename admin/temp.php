<?php 
ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once(__DIR__ . '/../config.php'); 
 

  include_once('../includes/admin_head.php'); 
 



if (!isset($_SESSION['admin_id']) || $_SESSION['admin_id'] === null) {
  header('Location: login.php');
  exit;
}

$id = $_SESSION['admin_id'];

if(isset($_GET['adminlogout'])){
  if(($_GET['adminlogout'])=='logout'){
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin_email']);
    header('location:index.php');
  }
}
?>

        <div class="wrapper">
      <?php
      include_once('../includes/sidebar.php');
      ?>

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
        
          
        </div>

        <div class="container">
            <?php
            if(isset($view)){
                if($view=="dashboard"){
                    include("view/view_dashboard.php");
                }elseif($view=="all_contact"){
                    include("view/view_contact.php");
                }elseif($view=="contact"){
                    include("view/view_contact_details.php");
                }elseif($view=="admission"){
                  include_once("view/view_admission.php");
                }
                elseif($view=="allpost"){
                  include("view/allpost.php");
                }
                elseif($view=="addpost"){
                  include("view/addpost.php");
                }
                elseif($view=="postcat"){
                  include("view/postcat.php");
                }
                elseif($view=="post_tag"){
                  include("view/post_tag.php");
                }
                elseif($view=="editpostcat"){
                  include("view/editpostcat.php");
                }
                elseif($view=="users"){
                  include("view/users.php");
                }
                elseif($view=="admin_info"){
                  include("view/admin_info.php");
                }
                elseif($view=="manage_post"){
                  include("view/allpost.php");
                }
                elseif($view=="editpost"){
                  include("view/editpost.php");
                }
                elseif($view=="payment"){
                  include("view/payment.php");
                }
                elseif($view=="admission_view"){
                  include("view/admission_view.php");
                }
                elseif($view=="comment"){
                  include("view/comment.php");
                }
                elseif($view=="read_comment"){
                  include("view/readcomment.php");
                }
            }
            
            ?>
        </div>
         <?php include_once('../includes/admin_footer.php');?>
      </div>
    </div>
  
