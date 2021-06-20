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
        <li><a href="approve-appointment.php">Approve Apointment</a></li>
          <li><a href="appointment-history.php">Apointment History</a></li>
          <li><a href="update-profile.php">Update Profile</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
         <div class="content">
          <h2 class="page-title">Approve Apointment</h2>

          <table>
            <thead>
              <th>SN</th>
              <th>Patient Name</th>    
              <th>Gender</th>
              <th>Date</th>
              <th>Symptoms</th>
              <th>Comment</th>
              <th colspan="2">Action</th>
            </thead>
            <tbody>
            <?php 
            
            
            ?>   
              <tr id = "dummy">
                <td>1</td>
                <td>Fahad</td>
                <td>aafporan@gmail.com</td>
                <td>Male</td>
                <td>03/30/2021</td>
                <td>9:25 PM</td>
                <td><a style="color:green;" href="mail.php" class="approve">Approve</a></td>
                <td><a style="color:red;" href="#" class="delete">Decline</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      


    </div>

    <!-- ajax -->
    <script>
function showUser(str) {
  if (str == "") {
    document.getElementById("dummy").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElemebn ntById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
    <!-- // Page Wrapper -->
  </body>
</html>
