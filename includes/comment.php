

<div class="">
            <div class="contact-form py-3 px-4" >
              <h3>Leave a Reply</h3>
              <p>Give Your Opinion To US</p>
              <hr>
                <?php
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }

  if (isset($_SESSION['success'])) {
      echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
      unset($_SESSION['success']);
  }

  if (isset($_SESSION['error'])) {
      echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
      unset($_SESSION['error']);
  }
  ?>

              <form action="../includes/comment_process.php" method="post" class="php-email-form" >
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control " placeholder="Your  Name" required="">
                    </div>
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" name="comment" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" value="submit" name="submit" class="btn btn-outline-success">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>