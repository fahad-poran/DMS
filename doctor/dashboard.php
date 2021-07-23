<?php include"../controls/Database.php" ?>

<?php 
  session_start();   
  $db = new Database();
  $currentUser = $_SESSION['id'];


$name = $_SESSION['username'];
$status = $db->displayBookAppoint('bookappoint',$currentUser);
$panding = $db->pandingPatient('bookappoint',$currentUser);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom Styling -->
    <!-- <link rel="stylesheet" href="../../css/style.css"> -->

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../ckk/admin-nav.css" />
    <link rel="stylesheet" href="../ckk/admin.css" />

    <title>Admin Section - Manage Admin</title>
    <style>
      .main{
        display: flex;
        margin: 5%;
   
      }
      .area{
       
        width: 50%;
      }
    </style>
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

 <div class="main">
 <section class='area'>
   <span>     
     <div class ="income">  
        <h3>Net Income </h3>

        <h4 class = "money"><?php 
        // foreach ($status as $value){
        //   $result = (int)0;
        
        //   if ($value['status'] == 'Done'){
        //   //  $val = $value['fees'];
        //   // $result += (int)$value['fees'];
        //     $re = $value['fees'];
        //     settype($re, 'int');
        //   $result = $result + $re +500;
        //   settype($result, 'int');
        //   // echo json_encode($status);  
        //   echo $result;}
        // }
        // echo json_encode($status);
        foreach($status as $value){
          $result = $value['income'];
          if($result)
          echo $result;
          else
          echo "<p style='color: red;'>[No Visited Patient]<p>";
        }
        ?></h4>
        </div>
        <hr>
       
        </span>

       <span> 
        </span>
   
 </section>
 
 <section class='area2'>
 <div class="pending">
          <!-- <h3>Pending Request </h3> -->
            <h4>
            <?php
              $sno=1;
              $no = 0;
              if($panding){
              foreach($panding as $value)  
              {
                if($value['status']=='Pending')
                {
                  $no += $sno;
                  
                }
                
               
              }echo '
              <button onclick="location.href=`approve-appointment.php`" type="button" class="btn btn-primary position-relative">
              Pending Request
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              '.$no.'
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
              ';
              
            }
            ?>
            </h4>
         
        </div>
 </section>
 </div>
          <!-- echo json_encode($money); -->

      </div>
     <script>
     
     </script>
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
