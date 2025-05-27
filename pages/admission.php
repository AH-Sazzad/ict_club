<?php
session_start();
include_once(__DIR__ . '/../config.php');
include_once(__DIR__ . '/../includes/header.php');
include_once(__DIR__ . '/../includes/navbar.php');

if (isset($_POST['submit'])) {
    // Admission Info
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $section = $_POST['section'];
    $roll = $_POST['roll'];
    $year = $_POST['year'];
    $dream = $_POST['dream'];
    $hobby = $_POST['hobby'];

    // Login Info
    $username = $_POST['username'] ?? '';
    $password = md5($_POST['password'] ?? ''); 

    // Insert into admission_info
    $info = "INSERT INTO admission_info (first_name, last_name, email, phone, roll_number, section, subject, academic_year, hobby, dream)
             VALUES ('$firstname', '$lastname', '$email', '$phone', '$roll', '$section', '$subject', '$year', '$hobby', '$dream')";
    if (!mysqli_query($conn, $info)) {
        $success = false;
    }

    // Insert into admission_login
    $user = "INSERT INTO admission_login (username, password) VALUES ('$username', '$password')";
    if (!mysqli_query($conn, $user)) {
        $success = false;
    }

    if ($success) {
        $_SESSION['success'] = "Admission Info Submitted Successfully!";
    } else {
        $_SESSION['error'] = "Something went wrong while submitting your info.";
    }

    header('Location: payment.php');
    exit;
}
?>

<div class="container row align-items-center mt-5">
    <div class="col-lg-3">

    </div>
    <div class="col-lg-8">
            <div class="contact-form py-3 px-4" >
              <h3>Admission Form </h3>
              

              <form action="" method="post" class="php-admission" >
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
                  <div class="col-md-6 ">
                    <input type="number" class="form-control" name="roll" placeholder="Your Roll Number" required="">
                  </div>
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="section" placeholder="Your section" required="">
                  </div>
                  <div class="col-md-6 ">
                        <label for="cars">Choose : Subject</label>

                            <select id="cars" name="subject">
                            <option value="science">Science</option>
                            <option value="humanity">Humanity</option>
                            <option value="commerce">Commerce</option>
                            </select>
                  </div>
                  <div class="col-md-6 ">
                    <input type="number" name="year" class="form-control" name="Academic_Year" placeholder="Your Academic year ex:25-26" required="">
                  </div>

                 <div class="col-12">
                    <textarea class="form-control" name="hobby" placeholder="Write Your hobey" required=""></textarea>
                  </div>
                 <div class="col-12">
                    <textarea class="form-control" name="dream" row="3" placeholder="Write Your drem why you join us" required=""></textarea>
                  </div>
                    <div class="col-md-6 ">
                    <input type="text" class="form-control" name="username" placeholder="Creat a usrname" required=""></div>
                    <div class="col-md-6 ">
                    <input type="password" class="form-control" name="password" placeholder="Create a Password" required=""></div>
                    <div class="col-md-6 ">
                    <input type="password" class="form-control" name="password-again" placeholder="Enter Your Password Again " required=""></div>
                    <div class="col-12 text-center">
                    <h5 class="bg-success text-white py-2 px-5">
                      Pay 200 TK AS Admission fee (Note that This Money Will Never Return)
                    </h5>
                  </div>
                  
                  <div class="col-12 text-center">
                    <h5 class="bg-danger text-white py-2 px-5">
                        You Can Login After Confirm Your Account You will Found Your Confirmation Into Your Email adderss
                    </h5>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" value="submit" name="submit" class="btn btn-outline-success">Submit</button>
                  </div>
                  
                </div>
              </form>


            </div>
          </div>
</div>
<?php
 include_once(__DIR__ . '/../includes/footer.php'); ?>