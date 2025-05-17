<?php 
 include_once(__DIR__ . '/../config.php');  
include_once('header.php');
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container mw-75 bg-white rounded-pill px-5 py-1 fs-6 fw-3 shadow ">
            <a class="navbar-brand" href="#"><img src="/ict_club/assets/img/logo.png" alt="Logo"> <!--<h2>ICT CLUB </h1>--> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="arnavb-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse   justify-content-center" id="navbarNav">
                <ul class="navbar-nav  ">
                    <li class="nav-item">
                        <a class="nav-link hover-active" href="/ict_club/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ict_club/pages/co_curricular.php">Co_Curricular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ict_club/pages/rules.php">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/notice.php">Notice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ict_club/pages/contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Usefull Link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/ict_club/pages/contact.php">Contact Us</a></li>
                            <li><a class="dropdown-item" href="/ict_club/pages/blog.php">Our Blog</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/ict_club/pages/about.php">About</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div>
            <div class="login">
                <button class="btn btn-outline-success">Get Started</button>
            </div>
        </div>
    </nav>

      
    </div>
  </header>