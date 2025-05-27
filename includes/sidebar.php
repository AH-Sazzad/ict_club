<?php
ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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


?>
<div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="../admin/index.php" class="logo">
              <img
                src="../assets/img/logo.png"
                alt="navbar brand"
                class="navbar-brand "
                height="20"
              />
              <h2 class="club-name ms-2" id="success-text">
                ICT CLUB
                
              </h2>
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
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../admin/index.php">
                        <span class="sub-item">Dashboard</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#post">
                  <i class="fas fa-layer-group"></i>
                  <p>Post</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="post">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../admin/allpost.php">
                        <span class="sub-item">All Post</span>
                      </a>
                    </li>
                    <li>
                      <a href="../admin/addpost.php">
                        <span class="sub-item">Add Post</span>
                      </a>
                    </li>
                    <li>
                      <a href="../admin/editpost.php">
                        <span class="sub-item">Edit Post</span>
                      </a>
                    </li>
                    <li>
                      <a href="../admin/post_cat.php">
                        <span class="sub-item">Category</span>
                      </a>
                    </li>
                    <li>
                      <a href="../admin/post_tag.php">
                        <span class="sub-item">Tag</span>
                      </a>
                    </li>
                    <li>
                      <a href="../admin/comment.php">
                        <span class="sub-item">Comment</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#contact">
                  <i class="fas fa-th-list"></i>
                  <p>Contact</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="contact">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../admin/allcontact.php">
                        <span class="sub-item">All Contact</span>
                      </a>
                    </li>
                    <li>
                      <a href="../admin/contact_details.php">
                        <span class="sub-item">Read Contact</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#admission">
                  <i class="fas fa-pen-square"></i>
                  <p>Admission</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="admission">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../admin/admission.php">
                        <span class="sub-item">Admission</span>
                      </a>
                    </li>
                    <li>
                      <a href="../admin/manage_users.php">
                        <span class="sub-item">Users</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item">
                <a href="payment.php">
                  <i class="fas fa-file"></i>
                  <p>Payment</p>
                  <span class="badge badge-secondary">1</span>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#submenu">
                  <i class="fas fa-bars"></i>
                  <p>Profile</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="submenu">
                  <ul class="nav nav-collapse">
                    <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="<?php echo $img;?>"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold"><?php echo $name;?></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="<?php echo $img?>"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4><?php echo $name?></h4>
                            <p class="text-muted"><?php echo $email?></p>
                            <a
                              href="../admin/profile.php            "
                              class="btn btn-xs btn-secondary btn-sm"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../admin/profile.php">Edit Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?adminlogout=logout">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->