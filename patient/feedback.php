<?php 
$myDate = date('m/d/Y');

include "../controls/Database.php"; ?>

<?php 
  session_start();
  $db = new Database();
  $error_msg = $db->errors;
  if(!isset($_SESSION['username']))
  {
    header("Location:../views/doctor-login.php");
  }
  $currentUser=$_SESSION['username'];
  if(isset($_POST['submit']))
  {
      $update=$db->insertComment($_POST,"comments");
      if($update)
      {
          echo "<script>alert('Thanks For your FeedBack');</script>";
  
          echo "<script>window.location.href = 'dashboard.php';</script>";
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

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../css/admin-nav.css" />
    <link rel="stylesheet" href="../css/admin.css" />
    <style>
    textarea {
        overflow-y: scroll;
        height: 100px;
        resize: none; /* Remove this if you want the user to resize the textarea */
    }
    .main{
        display: flex;
    
    }
    .comment{
        padding: 5%;

    }
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
          <li><a href="filter.php">Book Apointment</a></li>
          <li><a href="appointment-history.php">Apointment History</a></li> 
          <li><a href="update-profile.php?editid=<?php echo $currentUser; ?>">Update Profile</a></li>
          <li><a href="feedback.php">Feedback</a></li> 
        </ul>
      </div>
      <!-- // Left Sidebar -->
<?php
$username = $_SESSION['username']; 
 ?>
      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
          <h2 class="page-title">✨Tell⭐about⭐us🌟</h2>
      
<section class='main'>
<section class='video'></section>
          <center>
          
<iframe  width="680" height="340" src="https://www.youtube.com/embed/qx003qjGhZY?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

<section class='comment'></section>

          <form action="" method="post">
          <h3>We would like to here From You</h3>
          <input type="hidden" name ='uid' value='<?= $_SESSION['username']?>'>
          <input type="hidden" name='date' value='<?=$myDate?>'>
         <textarea required name="message" id="" cols="30" rows="10"></textarea><br><hr>
         <button class='btn' style='background-color: #6A5ACD;' name='submit' type='submit'>Feed Back</button>
          
          
          
          <?php echo "Date ".$myDate?>
          
          
          </form>
</section>
</div>
</div>
  </body>
</html>
