<?php
 include_once(__DIR__ . '/../../config.php');
include_once(__DIR__.'/../../includes/admin_head.php');

$admission_dream = '';
$admission_hobby = '';
$admission_year = '';
$admission_subject = '';
$admission_section = '';
$admission_roll = '';
$admission_email = '';
$admission_phone = '';
$admission_lastname = '';
$admission_firstname = '';


if (isset($_GET['readid'])) {
    $readid = $_GET['readid'];
    $sql = "SELECT * FROM admission_info WHERE id = $readid";
    $query = mysqli_query($conn, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        $admission_id = $data['id'];
        $admission_firstname = $data['first_name'] ?? '';
        $admission_lastname = $data['last_name'] ?? '';
        $admission_email = $data['email'] ?? '';
        $admission_phone = $data['phone'] ?? '';
        $admission_roll = $data['roll_number'] ?? '';
        $admission_section = $data['section'] ?? '';
        $admission_subject = $data['subject'] ?? '';
        $admission_year = $data['academic_year'] ?? '';
        $admission_hobby = $data['hobby'] ?? '';
        $admission_dream = $data['dream'] ?? '';
       
    }
}
?>
  
<div class="contact-form py-3 px-4" >
              <h3>Admission Form </h3>
              

              <form action="" method="post" class="php-admission" >
                <div class="row gy-4">

                  <div class="col-md-12">
                    <input type="hidden" name="id" class="form-control "value="<?php echo $admission_id;?>" >
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="firstname" class="form-control " value="<?php echo $admission_firstname;?>" >
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="lastname" class="form-control " value="<?php echo $admission_lastname;?>" >
                  </div>

                  <div class="col-md-6 ">
                    <input type="phone" class="form-control" name="phone"value="<?php echo $admission_phone;?>">
                  </div>
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email"value="<?php echo $admission_email;?>">
                  </div>
                  <div class="col-md-6 ">
                    <input type="number" class="form-control" name="roll" value="<?php echo $admission_roll;?>">
                  </div>
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="section" value="<?php echo $admission_section;?>">
                  </div>
                  <div class="col-md-6 ">
                        <label for="cars">Choose : Subject</label>

                            <select id="cars" name="subject">
                            <option value=""><?php echo $admission_subject;?>"</option>
                            </select>
                  </div>
                  <div class="col-md-6 ">
                    <input type="number" name="year" class="form-control" name="Academic_Year" value="<?php echo $admission_year;?>">
                  </div>

                 <div class="col-12">
                    <textarea class="form-control" name="hobby"><?php echo $admission_hobby;?></textarea>
                  </div>
                 <div class="col-12">
                    <textarea class="form-control" name="dream" row="3" ><?php echo $admission_dream;?></textarea>
                  </div>
                    

                 
                </div>
              </form>


            </div>