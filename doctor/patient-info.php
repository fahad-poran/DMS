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
      $update=$db->updateProfile($_POST,"patients",$_REQUEST['patientId']);
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
    <link rel="stylesheet" href="../ckk/admin-nav.css" />
    <link rel="stylesheet" href="../ckk/admin.css" />
    <style>
      .card-body{
        height: 200px;
        overflow-y: scroll;
      }
      .u{
        height: 536px;
      }
      .u img{
        display: flex;
        
        height: 200px;
        width: 200px;
      }
    </style>

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
        <li><a class="approve" href="approve-appointment.php">Approve Apointment</a></li>
          <li><a href="appointment-history.php">Apointment History</a></li>
          <li><a href="update-profile.php">Update Profile</a></li>
          <li><a href="profile.php">Profile</a></li> 
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">



        <?php  
         $editid = $_REQUEST['patientId'];

              $data = $db->displaySingleRecord("patients",$editid);
              if($data)
              {
                foreach($data as $value)
                {
            ?>

        <form action="" method="post"> 
           <?php $date = date("h:i:s A l jS \of F Y"); 
           echo date("h:i:sa");
           echo "<center><h2>Medical History Of Patient <strong>".$value['username']."</strong>";
           ?>
           
           <input type="hidden" name="date" value="<?php echo $date;?>">

           <?php 
           echo "<h4 style='color: #0066CC'>";
           if(empty($value['date']))
           echo "[Value Not Assigned Yet]</h4>";
           else echo "Last Updated On<strong> ".$value['date']."</strong></h4>";
           ?>
         
       <div class="meters d-flex flex-wrap">

          

<!-- test  -->


<div class="d-flex flex-wrap row row-cols-1 row-cols-md-3 g-4">
  <div class="col-lg-3">
    <div class="card h-100">
      <img src="../patient/images/m1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Oximeter</h5>
        <p class="card-text">A normal level of oxygen is usually 95% or higher. Some people with chronic lung disease or sleep apnea can have normal levels around 90%. The “SpO2” reading on a pulse oximeter shows the percentage of oxygen in someone's blood.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"> <input placeholder="SpO2 of 90%" type="text" name="pox" value="<?php echo $value['pox'];?>">
           </small>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card h-100">
      <img src="../patient/images/m2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Blood Pressure Monitor</h5>
        <p class="card-text">Normal: Blood pressure below 120/80 mm Hg is considered to be normal. Elevated: When blood pressure readings consistently range from 120 to 129 systolic and less than 80 mm Hg diastolic, it is known as elevated blood pressure.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">  <input placeholder="H-100 L-80" type="text" name="bpm" value="<?php echo $value['bpm'];?>">
           </small>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card h-100">
      <img src="../patient/images/m3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">BMI Scale</h5>
        <p class="card-text">If your BMI is less than 18.5, it falls within the underweight range. If your BMI is 18.5 to 24.9.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><input placeholder="18.5" type="text" name="ws" value="<?php echo $value['ws'];?>">
          </small>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card h-100">
      <img src="../patient/images/m4.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Glucometer kit</h5>
        <p class="card-text">A blood sugar level less than 140 mg/dL (7.8 mmol/L) is normal. A reading of more than 200 mg/dL (11.1 mmol/L) after two hours indicates diabetes. A reading between 140 and 199 mg/dL (7.8 mmol/L and 11.0 mmol/L) indicates prediabetes.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"> <input placeholder="141mg/dl" type="text" name="gk" value="<?php echo $value['gk'];?>">
           </small>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card h-100">
      <img src="../patient/images/m5.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Thermometer</h5>
        <p class="card-text">The average normal body temperature is generally accepted as 98.6°F (37°C)..</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"> <input placeholder="98°F" type="text" name="it" value="<?php echo $value['it'];?>">
           </small>
      </div>
    </div>
  </div>
  <div class="u col-lg-6">
    <div class="card h-100">
    <center>  <img src="../patient/images/update.png" class="img-fluid  card-img-top justify-content-center" alt="..."></center>
      <div class="card-body">
        <h5 class="card-title">Update</h5>
        <p class="card-text">*Please Check All the input before You press update. All the value should be upto date at a time, Filling all input is not require. <br><br>
        <button type="submit" name="update" class="btn btn-big">Update</button>
        </p>
      </div>
      <div class="card-footer">
       
      </div>
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
