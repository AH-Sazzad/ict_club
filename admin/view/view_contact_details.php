<?php
 include_once(__DIR__ . '/../../config.php');


// Set defaults to avoid "undefined variable" warnings
$contact_id = '';
$contact_firstname = '';
$contact_lastname = '';
$contact_email = '';
$contact_phone = '';
$contact_subject = '';
$contact_messages = '';

if (isset($_GET['readid'])) {
    $readid = $_GET['readid'];
    $sql = "SELECT * FROM messages WHERE id = $readid";
    $query = mysqli_query($conn, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        $contact_id = $data['id'];
        $contact_firstname = $data['firstname'] ?? '';
        $contact_lastname = $data['lastname'] ?? '';
        $contact_email = $data['email'] ?? '';
        $contact_phone = $data['phone'] ?? '';
        $contact_subject = $data['user_subject'] ?? '';
        $contact_messages = $data['message'] ?? '';
    }
}
?>





<section>
    <div class="contact-form py-3 px-4" >
              <h3>Contact Details</h3>

              <form action="<?php  echo $_SERVER['PHP_SELF']?>" method="post" class="php-email-form" >
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="firstname" class="form-control " placeholder="Your firstname Name" required="" value="<?php echo $contact_firstname;?>">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="lastname" class="form-control " placeholder="Your last Name" value=" <?php echo $contact_lastname;?>">
                  </div>

                  <div class="col-md-6 ">
                    <input type="phone" class="form-control" name="phone" placeholder="Your Phone" required="" value="<?php echo $contact_phone;?>">
                  </div>
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="" value="<?php echo $contact_email;?>">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="" value="<?php echo $contact_subject;?>">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required="" ><?php echo $contact_messages;?></textarea>
                  </div>
                  <div class="col-3" hidden>
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required="" ><?php echo $contact_id;?></textarea>
                  </div>

                  

                </div>
              </form>

            </div>
</section>




 
