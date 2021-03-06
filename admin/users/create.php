<?php include "../../controls/Database.php" ?>
<?php
  $db = new Database();
  if(isset($_POST['submit'])){
  $create = $db->insertAdminRecord($_POST,"patients");
    if($create)
    {
      echo "<script>alert('Patient Added succesfully');</script>";
      echo "<script>window.location.href = 'index.php';</script>";
    }
    else{
      echo "<script>alert('worng input');</script>";
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
    <link rel="stylesheet" href="../../css/admin-nav.css" />
    <link rel="stylesheet" href="../../css/admin.css" />

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
              <a href="../dashboard.php">Dashboard</a>
              <ul>
                <li><a href="../../controls/logout.php">Logout</a></li>
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
          <li><a href="index.php">Manage Patient</a></li>
          <li><a href="../doctors/index.php">Manage Doctor</a></li>
          <!-- <li><a href="../pharmacist/index.php">Manage Pharmacist</a></li> -->
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="button-group">
          <!-- <a href="create.php" class="btn btn-big">Add Patient</a> -->
          <a href="index.php" class="btn btn-big">Manage Patient</a>
        </div>

        <div class="content ">
          <h2 class="page-title">Add Patient</h2>
          <?php
            include "../../controls/errors.php";
            $db = new Database();
          ?>
          <form action="create.php" method="post">
            <div class="sec1"><div>
              <label>Username</label>
              <input required type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '';?>" class="text-input" />
            </div>
            <div>
              <label>Email</label>
              <input required type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>" class="text-input" />
            </div>
            <div>
            <label>Address</label>
              <input required type="text" name="address" value="<?php echo isset($post['address']); ?>" class="text-input" />
            </div>
          </div>
            <div class="sec2">
            <div>
              <label>Phone Number</label>
              <input type="tel" id="phone" name="phone" pattern="[01]{2}[0-9]{9}" required value="<?php echo isset($post['phone']); ?>" class="text-input" />
            </div>
              <label>Password</label>
              <input required type="password" name="password"  class="text-input" />
            </div>
            <div>
              <label>Password Confirmation</label>
              <input required type="password" name="passwordConf" class="text-input" />
            </div>
            <div>
            </div>
              <button type="submit" name="submit" class="btn btn-big">Add Patient</button>
            </div>
            <article>Must fill all the input fields with valid information</article>
          </form>
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
