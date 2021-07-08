<?php include "controls/Database.php";

?>
<?php   

session_start();

$db = new Database();   


  if(isset($_POST['submit']))
  {

    $login = $db->loginRecord($_POST,"doctors");
    if($login == True)
    {
      
      // echo "<script>alert('Login succesful');</script>";
      echo "<script>window.location.href = 'doctor/dashboard.php';</script>";
    }
    // else{
    //   echo "<script>alert('Database Empty!');</script>";
    //   echo "<script>window.location.href = 'doctor-login.php';</script>";
    // }

if($login == False){
  $login = $db->loginRecord($_POST,"patients");
  if($login) //if login successfull
  {
    // echo "<script>alert('Login succesful');</script>";
    echo "<script>window.location.href = 'patient/dashboard.php';</script>";  //it could also be done by using header!
  }
  if(!$login){
    $login = $db->loginRecord($_POST,"admin");
    if($login)
    echo "<script>window.location.href = 'admin/dashboard.php';</script>";
    else{
      echo "<script>alert('Worng Username or password!');</script>";
      echo "<script>window.location.href = 'doctor-login.php';</script>";  //CALLING OWN PAGE
    }
  }
  
}
  

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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <title>Document</title>
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
<!-- <div>Role:
<select name="role" id="role" onchange="myFunction()">

<option value="Doctor">Doctor</option>
<option value="User">User</option>

</select>
</div> -->

<!-- Button trigger modal -->




<!-- end of contact -->

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
<h6>Not a member?</h6><a href="register.php">Register Now!</a>
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
