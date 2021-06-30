<?php include"../controls/Database.php" ?>

<?php 
  session_start();
  $db = new Database();
  $currentUser = $_SESSION['id'];
$money = $db->income('doctors',$currentUser);

$name = $_SESSION['username'];
$status = $db->displayBookAppoint('bookappoint',$name);

  if(!isset($_SESSION['username']))
  {
    header("Location:../login.php");
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
    <link rel="stylesheet" href="../ckk/admin-nav.css" />
    <link rel="stylesheet" href="../ckk/admin.css" />

    <title>Admin Section - Manage Admin</title>
  </head>

  <body>
    <header class="header-area">
      <div class="title">
        <h1>Doctor Management System</h1>
        
        <?php 
       
        
        ?>
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
          <li><a href="approve-appointment.php">Approve Apointment</a></li>
          <li><a href="appointment-history.php">Apointment History</a></li>
          <li><a href="update-profile.php">Update Profile</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
          <h2 class="page-title">Welcome To Your Dashboard <?php echo $_SESSION['username'];?></h2>

         <!-- echo json_encode($money); -->
        
        <h3 class="income">Net Income </h3>
<!-- //Alhamdulillah going to the right direction -->
        <h4 class = "money"><?php 
        foreach ($status as $value){
          $result = 0;
          if ($value['status'] == 'Done'){
          $result += (int)$value['fees'];
          
          // echo json_encode($status);  
          echo $result;}
        }
        ?></h4>
        </div>
      </div>
     <script>
     
     </script>
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
