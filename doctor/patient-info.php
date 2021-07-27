<?php include "../controls/Database.php" ?>

<?php 
  session_start();
  $db = new Database();
  $error_msg = $db->errors;
  if(!isset($_SESSION['username']))
  {
    header("Location:../views/doctor-login.php");
  }
  $currentUser=$_SESSION['id'];
  if(isset($_POST['update']))
  {
      $update=$db->updateProfile($_POST,"patients",$currentUser);
      if($update)
      {
          // echo "<script>alert('Updated succesfully');</script>";
  
          // echo "<script>window.location.href = 'update-profile.php';</script>";
      }
  }
?>
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom Styling -->
    <!-- <link rel="stylesheet" href="../../css/style.css"> -->

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../css/admin-nav.css" />
    <link rel="stylesheet" href="../css/admin.css" />

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
        <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="filter.php">Book Apointment</a></li>
          <li><a href="appointment-history.php">Apointment History</a></li> 
          <li><a href="update-profile.php?editid=<?php echo $currentUser; ?>">Update Profile</a></li>
          <li><a href="feedback.php">Feedback</a></li> 
          <li><a href="profile.php">Profile</a></li> 
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">



        <?php  
              $data = $db->displaySingleRecord("patients",$currentUser);
              if($data)
              {
                foreach($data as $value)
                {
            ?>

        <form action="" method="post"> 
           <?php $date = date("h:i:s A l jS \of F Y"); ?>
           <input type="text" name="date" value="<?php echo $date;?>">
         
       <div class="meters d-flex flex-wrap">

          <div class="card m-4 " style="width: 18rem;">
        <img class="card-img-top" src="images/m1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Oximeter</h5>
          <p class="card-text">A normal level of oxygen is usually 95% or higher. Some people with chronic lung disease or sleep apnea can have normal levels around 90%. The “SpO2” reading on a pulse oximeter shows the percentage of oxygen in someone's blood</p>
          <div class="">
            <input type="text" name="pox" value="<?php echo $value['pox'];?>">
            <button type="submit" name="update" class="btn btn-big">Update</button>
          </div>
        </div>
      </div>

          <div class="card m-4" style="width: 18rem;">
        <img class="card-img-top" src="images/m2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Blood pressure monitor</h5>
          <p class="card-text">Normal: Blood pressure below 120/80 mm Hg is considered to be normal. Elevated: When blood pressure readings consistently range from 120 to 129 systolic and less than 80 mm Hg diastolic, it is known as elevated blood pressure.</p>
          <div class="">
            <input type="text" name="bpm">
            <button type="submit" name="update" class="btn btn-big">Update</button>
          </div>
        </div>
      </div>

          <div class="card m-4" style="width: 18rem;">
        <img class="card-img-top" src="images/m3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">BMI Weighing Scale</h5>
          <p class="card-text">If your BMI is less than 18.5, it falls within the underweight range. If your BMI is 18.5 to 24.9</p>
          <div class="">
            <input type="text" name="ws">
            <button type="submit" name="update" class="btn btn-big">Update</button>
          </div>
        </div>
      </div>

          <div class="card m-4" style="width: 18rem;">
        <img class="card-img-top" src="images/m4.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Glucometer Kit</h5>
          <p class="card-text">A blood sugar level less than 140 mg/dL (7.8 mmol/L) is normal. A reading of more than 200 mg/dL (11.1 mmol/L) after two hours indicates diabetes. A reading between 140 and 199 mg/dL (7.8 mmol/L and 11.0 mmol/L) indicates prediabetes</p>
          <div class="">
            <input type="text" name="gk">
            <button type="submit" name="update" class="btn btn-big">Update</button>
          </div>
        </div>
      </div>

          <div class="card m-4" style="width: 18rem;">
        <img class="card-img-top" src="images/m5.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Thermometer</h5>
          <p class="card-text">The average normal body temperature is generally accepted as 98.6°F (37°C).</p>
          <div class="">
            <input type="text" name="it">
            <button type="submit" name="it" class="btn btn-big">Update</button>
          </div>
        </div>
      </div>



      </form><?php } }?>
       </div>



        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
    <!-- <script src="../js/main.js"></script> -->
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
 alert("Phone number Should be 11 Degit valid");
 return false;
 } 
// var pass = document.forms["myform"]["password"].value;
// if(pass.length >= 6){
// alert("Password should be 6 carecter long");
//   return false;
// }
}
    </script>
  </body>
</html>
