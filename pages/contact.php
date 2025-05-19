<?php


include_once(__DIR__ . '/../config.php');
include_once(__DIR__ . '/../includes/header.php');
include_once(__DIR__ . '/../includes/navbar.php');
?>



<?php

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'] ?? '';
  $lastname = $_POST['lastname'] ?? '';
  $email = $_POST['email'] ?? '';
  $phone = $_POST['phone'] ?? '';
  $subject = $_POST['subject'] ?? '';
  $message = $_POST['message'] ?? '';

  $contact = "INSERT INTO messages (firstname, lastname, email, phone, user_subject, message)
              VALUES ('$firstname', '$lastname', '$email', '$phone', '$subject', '$message')";

  if (mysqli_query($conn, $contact)) {
    $_SESSION['success'] = "Message Sent Successfully!";
    header('Location:index.php');
    exit;
  } else {
    $_SESSION['error'] = "Failed to send message.";
    header('Location:index.php');
    exit;
  }
}


?>







<!-- Contact Section -->
    <section id="contact" class="contact section bg-light">

      <!-- Section Title -->
      <div class="container section-title mt-5 d-flex justify-content-center align-item-center flex-column" >
        <h2 class="club-name " id="club-name" >Contact Us</h2>
        <p>Have questions or want to get involved? Reach out to us anytime — we’d love to hear from you!</p>
        <HR></HR>
      </div>
      <?php
if (isset($_SESSION['success'])) {
  echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
  unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
  echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
  unset($_SESSION['error']);
}
?>

      <!-- End Section Title -->

      <div class="container">

        <div class="row g-4 g-lg-5 ">
          <div class="col-lg-5 p-5 border info shadow-3 "   >
            <div class="info-box" >
              <h2 class="text-white">Contact Info</h2>
              <p class="text-white">You can also visit our ICT Club room on campus during club hours for direct assistance and queries.</p>

              <div class="info-item ">
                
                <div class="content">
                  <h4>Our Location</h4>
                  <p>City Bypass, Barera, Mymensingh</p>
                  
                </div>
              </div>

              <div class="info-item ">
                
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+8801123456789</p>
                  <p>+8801776575220</p>
                </div>
              </div>

              <div class="info-item" >
                
                <div class="content">
                  <h4>Email Address</h4>
                  <p>info@ictclub.com</p>
                  <p>contact@ictclub.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form py-3 px-4" >
              <h3>Get In Touch</h3>
              <p>Need assistance or have something to share? Use the form below to send us a message directly — we're here to help!</p>

              <form action="" method="post" class="php-email-form" >
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="firstname" class="form-control " placeholder="Your firstname Name" required="">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="lastname" class="form-control " placeholder="Your last Name" >
                  </div>

                  <div class="col-md-6 ">
                    <input type="phone" class="form-control" name="phone" placeholder="Your Phone" required="">
                  </div>
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" value="submit" name="submit" class="btn btn-outline-success">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

<?php
 include_once(__DIR__ . '/../includes/footer.php'); ?>

 
