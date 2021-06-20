<?php include "../controls/Database.php" ?>
<?php
 
 session_start();
 
 $db = new Database();
 if(!isset($_SESSION['username'])){
   header("Location:../views/login.php");
 }
$currentUser = $_SESSION['id'];
if(isset($_POST['book'])){
$update =  $db->bookAppointment($_POST,"bookappoint",$currentUser);

//to print the alert massage we need to store the db into the variable
if($update){
  echo "<script>alert('Appointment Booked Successfully');</script>";
  echo "<script>window.location.href = 'appointment-history.php';</script>";
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

    <!-- Custom Styling -->
    <!-- <link rel="stylesheet" href="../../css/style.css"> -->

    <!-- Styling -->
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
              <a href="#">Dashboard</a>
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
        <li><a href="book-appointment.php">Book Apointment</a></li>
          <li><a href="appointment-history.php">Apointment History</a></li>
          <li><a href="update-profile.php">Update Profile</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
          <h2 class="page-title">Book Appointment</h2>
  

<?php
  $editid = $_SESSION['id'];
  $myrecord = $db ->displayRecordById($editid,"doctors");

?>

          <form action="book-appointment.php" method="POST">
          <div>
              <label>Doctor Specialization</label>
<select name="doctorSpecialization" class="text-input">
<option disabled selected>-- Select Dotor Category --</option>
              <?php
         // Using database connection file here
        include "../controls/db.php";
      
        $records = mysqli_query($db, "SELECT specialization FROM doctors");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['specialization'] ."'>" .$data['specialization'] ."</option>";  // displaying data in option menu
        }	
    ?>  
</select>
              <?php 
                if(isset($error_msg['doctorSpecialization']))
                {   
                  echo"<span class='error1'>".$error_msg['doctorSpecialization']."</span>";
                }
              ?>
            </div>
            <div>
              <label>Doctor Name</label>
              <select name="doctorName" class="text-input">
                <option disabled selected>--Select Doctor--</option>
                <?php
         // Using database connection file here
        include "../controls/db.php";
      
        $records = mysqli_query($db, "SELECT username FROM doctors");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['username'] ."'>" .$data['username'] ."</option>";  // displaying data in option menu
        }	
    ?> 
</select>
              <?php    
                if(isset($error_msg['doctorName']))
                {
                  echo"<span class='error1'>".$error_msg['doctorName']."</span>";
                }
              ?>
            </div>
            <div>
              <label>Date</label>
              <input type="date" name="date" class="text-input" />
            </div>
            <?php 
                if(isset($error_msg['date']))
                {
                  echo"<span class='error1'>".$error_msg['date']."</span>";
                }
              ?>

<div>
                  <label>Fees</label>
                  <input type="text" name="fees" value="<?php echo $myrecord['fees']; ?>"  class="text-input" readonly/>
            </div>

            <div>
              <label>Time</label>
              <input type="time" name="time" class="text-input" />
            </div>
            <?php 
                if(isset($error_msg['time']))
                { 
                  echo"<span class='error1'>".$error_msg['time']."</span>"; 
                }
              ?>
            <div>
              <button type="submit" name="submit" class="btn btn-big">Book Appointment</button>
            </div>
          </form>
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
