<?php include"../controls/Database.php" ?>

<?php 
  session_start();
  $db = new Database();
  if(!isset($_SESSION['username']))
  {
    header("Location:../doctor-login.php");
  }
$patient = $db->displayRecord('bookappoint');

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
          <!-- <li><a href="pharmacist/index.php">Manage Home</a></li> -->
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        
        <div class="content">
        <h2 class="page-title">Welcome To Your Dashboard <?php echo $_SESSION['username'];?></h2>

          <table>
            <thead>
              <th>Total Active Doctor</th>
              <th>Total Visited Patient</th>
              <!-- <th>Email</th> -->
              <th colspan="2">Registred Patient</th>
            </thead>
            <tbody>
              <tr>
                <td>9</td>
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
                  if($values['status']=='Done')
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
