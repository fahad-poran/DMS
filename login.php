<?php include "controls/Database.php" ?>
<?php 
session_start();
$db = new Database();


  if(isset($_POST['submit']))
  {
    $login = $db->loginRecord($_POST,"patients");
    if($login) //if login successfull
    {
     
      
      // echo "<script>window.location.href = 'patient/book-appointment.php?bookid=$bookid';</script>"; 
      $bid= $_POST['bookid'];
      header("location: patient/book-appointment.php?bookid=$bid");
      // echo "<script>window.location.href = 'patient/book-appointment.php?bookid=$bid';</script>";
      
    }
    else{
      echo "<script>alert('Worng Username or password!');</script>";
      echo "<script>window.location.href = 'login.php';</script>";  //CALLING OWN PAGE
    }
    // $email = $_POST['email'];
    // if(empty($email)){
    //   $error_msg['email'] = "Email is required";
    // }
    // else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/",$email)) {
    //   $error_msg['email'] = "Invalid email format";
    // }

    // $password = $_POST['password'];
    // if(empty($password)){
    //   $error_msg['password'] = "Password is required";
    // }
    // else if((strlen($password)<6)){
    //   $error_msg['password'] = "Password is too short";
    // }
    // else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
    //   $error_msg['password'] = "the password does not meet the requirements";
    // }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Patient Login</title>
  </head>
  <body>
  <?php include "about.php";?>
    <header class="header-area">
      <div class="title">
        <h1>Doctor Management System</h1>
      </div>
      <div class="navigation">
        <nav class="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a data-toggle="modal" data-target="#exampleModalLongAbout" href="#">About Us</a></li>
            <li><a href="#" data-toggle="modal" data-target="#service">Service</a></li>
            <li><a href="#" data-toggle="modal" data-target="#contact">Contact Us</a></li>
            <!-- <li>
              <a href="#">Login As></a>
              <ul>
                <li><a href="#">User</a></li>
                <li><a href="#">Doctor</a></li>
                <li><a href="#">Admin</a></li>
              </ul>
            </li> -->
          </ul>
        </nav>
      </div>
    </header>


    
<div class="auth-content">
<form action="login.php" method="post">
  <h2 class="form-title">Patient Log In</h2>
  <?php
    include "controls/errors.php";
    
  ?>

  <!-- <div class="msg error">
    <li>Username required</li>
  </div> -->

  <div>
    <label>Email</label>
    <input type="text" name="email" class="text-input"  > 
    <!-- value=" echo isset($_SESSION['email']) ? $_SESSION['email'] : '';" -->
    <?php 
      // if(isset($error_msg['email']))
      // {
      //   echo"<span class='error'>".$error_msg['email']."</span>";
      // }
    ?>
  </div>
  
  <div>
    <label>Password</label>
    <input type="password" name="password" class="text-input" required="Must be Filled">

    <?php 
try {
  $bookid = $_REQUEST['bookid'];
 
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
     
     
    ?>
    <input type="hidden" name='bookid' value="<?php  echo $bookid;?>">
  </div>
 
  <div>
    <button type="submit" name="submit" class="btn btn-big">Login</button>
  </div>
  <p>Not a member? <a href="register.php">Sign Up</a></p>
</form>

</div>
<?php //session_unset(); ?>
   
</body>
</html>
