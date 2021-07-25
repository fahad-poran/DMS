<?php include "../controls/Database.php" ?>


<?php 
  session_start();
  $db = new Database();
 
  if(!isset($_SESSION['username']))
  {
    header("Location:../views/doctor-login.php");  
  }
  $currentUser=$_SESSION['id'];
  if(isset($_POST['update']))
  {
      $update=$db->updateSingleRecord($_POST,"doctors",$currentUser);
      if($update)
      {
          echo "<script>alert('Updated succesfully');</script>";
  
          echo "<script>window.location.href = 'update-profile.php';</script>";
      }
  }

?>
<!-- if(strlen($password)<6){
                    array_push($this->errors," Password: Password is too short");
                }
                else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
                    array_push($this->errors," Password: the password does not meet the requirements");
                }
            
                else if(!($cpassword==$password))
                {
                    array_push($this->errors," Password: Password didn't match");
                } -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom Styling -->
    <!-- <link rel="stylesheet" href="../../css/style.css"> -->

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../ckk/admin-nav.css" />
    <link rel="stylesheet" href="../ckk/admin.css" />

    <title>Admin Section - Manage Admin</title>
  </head>

  <body>
    <header class="header-area">
      <div class="title">
        <h1>Doctor Management System</h1>
      </div>
      <div class="navigation">
        <nav class="menu">
          <ul>
            <li>
              <a href="dashboard.php"><?php echo $_SESSION['username'];?></a>
              <ul>
                <li><a href="../controls/logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
      <!-- Left Sidebar -->
      <div class="left-sidebar">
        <ul>
        <li><a href="Dashboard.php">Dashboard</a></li>
          <li><a href="approve-appointment.php">Approve Apointment</a></li>
          <li><a href="appointment-history.php">Apointment History</a></li>
          <li><a href="update-profile.php?editid=<?php echo $currentUser; ?>">Update Profile</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
          <h2 class="page-title">Update Profile</h2>
         
          <?php include "../controls/errors.php" ?>
            <?php  
              $data = $db->displaySingleRecord("doctors",$currentUser);
              if($data)
              {
                foreach($data as $value)
                {
            ?>
          <form action="update-profile.php" method="post"  onsubmit="return validate()" name="myform" class= "form">
            <div>
              <label>Username</label>
              <input readonly type="text" name="username" value="<?php echo $value['username']; ?>"  class="text-input" />
            </div>
            <div>
              <label>Email</label>
              <input type="email" name="email" value="<?php echo $value['email']; ?>" class="text-input" readonly/>
            </div>
            <div>
              <label>Update Specialization</label>
              <!-- <select name="DoctorSpecialization" class="text-input">
                <option value="NULL">--Select Specialization--</option>
                <option value="Neurology"
                <?php
                  if($value['specialization']=="Neurology")
                  {
                    echo "selected";
                  }
                ?>
                >Neurology</option>
                
                <option value="Pathology"
                <?php
                  if($value['specialization']=="Pathology")
                  {
                    echo "selected";
                  }
                ?>
                >Pathology</option>
                <option value="Pediatrics"
                <?php
                  if($value['specialization']=="Pediatrics")
                  {
                    echo "selected";
                  }
                ?>
                >Pediatrics</option>
              </select> -->
              <input readonly type="text" name="DoctorSpecialization" class="text-input" value="<?php echo $value['specialization']; ?>">
            </div>
            <div>
              <label>Phone Number</label>
              <input type="text" name="phone" value="<?php echo $value['phone']; ?>" class="text-input" />
            </div>
            <div>
              <label>Gender</label>
              <select name="gender" class="text-input">
                <option value="NULL">-- Select Gender --</option>
                <option value="Male"
                <?php
                  if($value['gender']=="Male")
                  {
                    echo "selected";
                  }
                ?>
                >Male</option>
                <option value="Female"
                <?php
                  if($value['gender']=="Female")
                  {
                    echo "selected";
                  }
                ?>
                >Female</option>
              </select>
            </div>
            <!-- 2/7/21 -->
<div>
              <label>Patient visit Date</label>
              <input type="text" name="date" value="<?php echo $value['date']; ?>" class="text-input" />
            </div>
<div>
              <label>Patient visit Day</label>
              <input type="text" name="day" value="<?php echo $value['day']; ?>" class="text-input" />
            </div>
<div>
              <label>Patient visit Start Time</label>
              <input type="text" name="stime" value="<?php echo $value['stime']; ?>" class="text-input" />
            </div>
<div>
              <label>Patient visit End Time</label>
              <input type="text" name="etime" value="<?php echo $value['etime']; ?>" class="text-input" />
            </div>
<div>
<label>Status</label>
              <select name="status" class="text-input">
                <option disabled selected value="NULL">--Select Status--</option>
                <option value="Active">Active</option>
                <option value="Available">Available</option>
              </select>
            </div>

            <div>
              <label>Password</label>
              <input type="text" name="password" value="<?php echo $value['password']; ?>" class="text-input" />
            </div>
            <div>
              <button type="submit" name="update" class="btn btn-big">Update</button>
            </div>
          </form>
          <?php } } ?>
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
    <script src="../js/main.js"></script>
    <script>
 function validate() {
 var name = document.forms["myform"]["username"].value;
 if(name==""){
 alert("Please enter the name");
 return false;
 }
 
 if(name.length < 4)
 {
   alert("atleast 4 charecter");
   return false;
 }
else{
 var re = /^[a-zA-Z ]*$/;
 var x=re.test(name);
 if(x){
 }
 else{
 alert("Only letter allowed");
 return false;
 } 
 } 
 var phone = document.forms["myform"]["phone"].value;
 if(phone.length != 11){
 alert("Phone number not valid");
 return false;
 } 
var passowrd = document.forms["myform"]["password"].value;
if(password.length !=8){
  alert("Password should be 8 carecter long");
  return false;
}
}
    </script>
  </body>
</html>
