<?php include "../controls/Database.php" ?>

<?php 
  session_start();
  $db = new Database();
  if(!isset($_SESSION['username']))
  {
    header("Location:../login.php");
  }
  $currentUser = $_SESSION['id'];
$activity = $db->displayAppointment('bookappoint',$currentUser);
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

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../css/admin-nav.css" />
    <link rel="stylesheet" href="../css/admin.css" />

    <title>Admin Section - Manage Admin</title>
    <style>
      section{
        display: grid;
        grid-template-columns: 1fr 2fr;
      }
.doctors{
  padding: 20px;
  height: 300px;
  width: 300px;
  margin-left: 20px;

  background-color: rgba(139, 226, 230, 0.795);
  border-radius: 5%;
}
.doctor{
  overflow-y: scroll;
}
.appoint{
  padding: 20px;
  height: 300px;
  width: 300px;
  margin-left: 20px;
  /* overflow-y: scroll; */
  background-color: rgba(39, 130, 30, 0.43);
  border-radius: 5%;
}

    </style>
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
             <a href=""><?php echo $_SESSION['username'];?></a>
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
          <li><a href="update-profile.php">Update Profile</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">

          <h2 class="page-title">Dashboard Of Patient <?php echo $_SESSION['username'];?></h2>
 <section>

<div class="doctors">  <h2>Emergency Unit</h2>
<div class="doctor">
<?php 
$myrecord = $db->displayRecord("doctors");
// include "controls/errors.php"; 
            
foreach ($myrecord as $value)
if($value['status']=='Active')
echo 'Dr.'.$value['username'].' is available now'.'<br><br>'.'Contact number: '.$value['phone'].'<br><br>'.'Or Send Email At: '.$value['email'].'<br> <hr>'; 
  
?>
</div>
</div>
<div class="appoint"><h2>Your Last Activity</h2>

<?php 
$name = ''; $stat=''; $cate='';
if($activity){
print "<h4>You Request for an appoint To- </h4>";
foreach($activity as $value){
  $name = $value['username'];
  $stat = $value['status'];
  $cate = $value['specialization'];
}
if($value)
echo "<center>Dr. $name <strong style='color: tometo'>[$cate]<br><p style='color: black'>
Appointment Status:<strong style='color: indianred'><br> $stat";
}
else
echo "You have no Activity, To place An appoint Request Go to Book Appoint at Left Conor of Menu Bar ";
?>


</div>
 </section>      
        

        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
    <?php //session_unset(); ?>
  </body>
</html>
