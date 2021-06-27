<?php include "controls/Database.php" ?>
<?php 
session_start();

$db = new Database();


  if(isset($_POST['submit']))
  {
    if($_POST['role'] == 'Doctor'){

    $login = $db->loginRecord($_POST,"doctors");
    if($login)
    {
      
      echo "<script>alert('Login succesful');</script>";
      echo "<script>window.location.href = 'doctor/dashboard.php';</script>";
    }
    // else{
    //   echo "<script>alert('Database Empty!');</script>";
    //   echo "<script>window.location.href = 'doctor-login.php';</script>";
    // }
  }
  else 
  $login = $db->loginRecord($_POST,"patients");
  if($login) //if login successfull
  {
    echo "<script>alert('Login succesful');</script>";
    echo "<script>window.location.href = 'patient/dashboard.php';</script>";  //it could also be done by using header!
  }
  // else{
  //   echo "<script>alert('Worng Username or password!');</script>";
  //   echo "<script>window.location.href = 'login.php';</script>";  //CALLING OWN PAGE
  // }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="ckk/login.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <header class="header-area">
      <div class="title">
        <h1>Doctor Management System</h1>
      </div>
      <div class="navigation">
        <nav class="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Contact Us</a></li>
            
          </ul>
        </nav>
      </div>
    </header>


    
  <div class="auth-content">

<form action="doctor-login.php" method="post">
  <h2 class="form-title">Sign In</h2>
  <?php
    include "controls/errors.php";  
  ?>
  <!-- <div class="msg error">
    <li>Username required</li>
  </div> -->
<div>Role:
<select name="role" id="role" onchange="myFunction()">

<option value="Doctor">Doctor</option>
<option value="User">User</option>

</select>
</div>
  <div>
    <label>Email</label>
    <input type="text" name="email" class="text-input">
  </div>
  
  <div>
    <label>Password</label>
    <input type="password" name="password" class="text-input">
  </div>
 
  <div>
    <button type="submit" name="submit" class="btn btn-big">Login</button>
  </div>

</form>
<script>
function myFunction(){
  console.log("worked Alhamdulillah");
  var r = document.getElementById('role');
  console.log(r.value);

}

</script>
</div>
   
  </body>
</html>
