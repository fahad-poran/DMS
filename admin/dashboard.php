<?php include"../controls/Database.php" ?>

<?php 
  session_start();
  $db = new Database();
  if(!isset($_SESSION['username']))
  {
    header("Location:../doctor-login.php");
  }
$patient = $db->displayRecord('bookappoint');
$doctor = $db->displayRecord('doctors');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
          <li><a href="users/index.php">Manage Patient</a></li>
          <li><a href="doctors/index.php">Manage Doctor</a></li>
          <li><a href="updateProfile.php">Update Profile</a></li>
          <!-- <li><a href="pharmacist/index.php">Manage Home</a></li> -->
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        
        <div class="content">
        <h2 class="page-title">Welcome To Your Dashboard <?php echo $_SESSION['username'];?></h2>
<div class="chart">

<div class="graph1"><html>
  <head>
    <center>
    

      
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Total Visited Patient', <?php 
                $res = 0; $val=1;
                  foreach($patient as $values){
                  if($values['status']=='Done')
                  $res += $val;

                  }echo $res; ?>],
          ['Approved Patient',     <?php 
                $res = 0; $val=1;
                  foreach($patient as $values){
                  if($values['status']=='Approved')
                  $res += $val;

                  }echo $res; ?>],
          ['Total Registered Doctor',   <?php 
                $res = 0; $val=1;
                  foreach($doctor as $values){
                  // if($values['status']=='Done')
                  $res += $val;

                  }echo $res; ?>],
          ['Total Active Doctor',<?php 
                $res = 0; $val=1;
                  foreach($doctor as $values){
                  if($values['status']== 'Active')
                  $res += $val;

                  }echo $res; ?>],
          ['Available Doctor',    <?php 
                $res = 0; $val=1;
                  foreach($doctor as $values){
                  if($values['status']=='Available')
                  $res += $val;

                  }echo $res; ?>]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 540px; height: 250px;"></div>
  </body>
 
    </div>
</div>
    </div><center>
<div class="graph2 m-5">Total Active Doctor
  <div class="progress col-lg-4" style="height:1.7rem">
  <div class="progress-bar progress-bar-striped bg-success progress-bar-animated"  role="progressbar" style="width: <?php 
                $res = 0; $val=1; $act=0; $num=1;
                  foreach($doctor as $values){
                  if($values['status']=='Active')
                  $res += $val;
                 
                  $act += $num;

                  }echo (($res/$act)*100).'%'; ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <?php 
                $res = 0; $val=1; $act=0; $num=1;
                  foreach($doctor as $values){
                  if($values['status']=='Active')
                  $res += $val;
                 
                  $act += $num;

                  }echo ceil((($res/$act)*100)).'%'; ?>
</div>
                </div>
    </div>
    <?php 
                // $res = 0; $val=1; $act=0; $num=1;
                //   foreach($doctor as $values){
                //   if($values['status']=='Active')
                //   $res += $val;
                  
                //   $act += $num;

                //   }echo (($res/$act)*100); ?>
              
<h2>Patient</h2>
<br>
          <table>
            <thead>
              <th>Total Registered Patient</th>
              <th>Total Visited Patient</th>
              <!-- <th>Email</th> -->
              <th colspan="2">Approved Patient</th>
            </thead>
            <tbody>
              <tr>
                <td>
                <?php 
                $res = 0; $val=1;
                  foreach($patient as $values){
                  // if($values['status']=='Done')
                  $res += $val;

                  }echo $res; ?>
                </td>
                <td><?php 
                $res = 0; $val=1;
                  foreach($patient as $values){
                  if($values['status']=='Done')
                  $res += $val;

                  }echo $res; ?>
                </td>
                <!-- <td>rkhridoy68@gmail.com</td>
                <td><a href="#" class="edit">edit</a></td> -->
                <td><?php 
                $res = 0; $val=1;
                  foreach($patient as $values){
                  if($values['status']=='Approved')
                  $res += $val;

                  }echo $res; ?></td>
              </tr>
            </tbody>
          </table>

          <br>
        <h2>  Doctor</h2>
          <table>
            <thead>
              <th>Total Registered Doctor</th>
              <th>Total Active Doctor</th>
              <!-- <th>Email</th> -->
              <th colspan="2">Available Doctor</th>
            </thead>
            <tbody>
              <tr>
                <td>
                <?php 
                $res = 0; $val=1;
                  foreach($doctor as $values){
                  // if($values['status']=='Done')
                  $res += $val;

                  }echo $res; ?>
                </td>
                <td><?php 
                $res = 0; $val=1;
                  foreach($doctor as $values){
                  if($values['status']== 'Active')
                  $res += $val;

                  }echo $res; ?>
                </td>
                <!-- <td>rkhridoy68@gmail.com</td>
                <td><a href="#" class="edit">edit</a></td> -->
                <td><?php 
                $res = 0; $val=1;
                  foreach($doctor as $values){
                  if($values['status']=='Available')
                  $res += $val;

                  }echo $res; ?></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
