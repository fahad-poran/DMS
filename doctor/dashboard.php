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
      .area , .area2{
       
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
              <button onclick="location.href=`approve-appointment.php`" type="button" style="" class="btn position-relative">
              Pending Request
              <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-danger">
              '.$no.'
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
              ';
              
            }
            ?>
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
  <!-- google chart  -->


  <html>
  <head><center>
  <h5 class='text-success'>📅 On Day Patient Visit Statistics 📊</h5>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sun',  <?php
              $sno=1;
              $no = 0;
              if($panding){
              foreach($panding as $value)  
              {
                if($value['date']=='Sunday')
                {
                  $no += $sno;
                  
                }
                
               
              }echo $no;
              
            }
            ?>, 0,0,0],
          ['Mon', <?php
              $sno=1;
              $no = 0;
              if($panding){
              foreach($panding as $value)  
              {
                if($value['date']=='Monday')
                {
                  $no += $sno;
                  
                }
                
               
              }echo $no;
              
            }
            ?>, 0,0,0],
          ['Tues', <?php
              $sno=1;
              $no = 0;
              if($panding){
              foreach($panding as $value)  
              {
                if($value['date']=='Tuesday')
                {
                  $no += $sno;
                  
                }
                
               
              }echo $no;
              
            }
            ?>, 0,0,0],
          ['Wed', <?php
              $sno=1;
              $no = 0;
              if($panding){
              foreach($panding as $value)  
              {
                if($value['date']=='Wednesday')
                {
                  $no += $sno;
                  
                }
                
               
              }echo $no;
              
            }
            ?>, 0,0,0],
          ['Thus', <?php
              $sno=1;
              $no = 0;
              if($panding){
              foreach($panding as $value)  
              {
                if($value['date']=='Thursday')
                {
                  $no += $sno;
                  
                }
                
               
              }echo $no;
              
            }
            ?>, 0,0,0],
          ['Fri', <?php
              $sno=1;
              $no = 0;
              if($panding){
              foreach($panding as $value)  
              {
                if($value['date']=='Friday')
                {
                  $no += $sno;
                  
                }
                
               
              }echo $no;
              
            }
            ?>, 0,0,0],
          ['Sat', <?php
              $sno=1;
              $no = 0;
              if($panding){
              foreach($panding as $value)  
              {
                if($value['date']=='Saturday ')
                {
                  $no += $sno;
                  
                }
                
               
              }echo $no;
              
            }
            ?>, 0,0,0]
          // Treat the first row as data.
        ], true);

        var options = {
          legend: 'none',
          bar: { groupWidth: '100%' }, // Remove space between bars.
          candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58' }   // green
          }
        };

        var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 720px; height: 370px;"></div>
  </body>
</html>



<!-- google chart end  -->

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
          echo '<h3>'.$result;
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
 <div class="pending"><center>
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
                
               
              }echo '<h3>Total Pending Request <br>'.$no;
              
            }
            ?>
            </h4>
         <hr>
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
