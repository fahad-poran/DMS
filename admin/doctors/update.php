<?php include "../../controls/Database.php" ?>
<?php
$db = new Database();
if(isset($_POST['update']))
{
  $update = $db->updateRecord($_POST,"doctors");
  if($update)
  {
    echo "<script>alert('Updated succesfully');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
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
          <li><a href="../users/index.php">Manage Patient</a></li>
          <li><a href="index.php">Manage Doctor</a></li>
          <li><a href="../updateProfile.php">Update Profile</a></li>

          <!-- <li><a href="../pharmacist/index.php">Manage Pharmacist</a></li> -->
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="button-group">
          <a href="create.php" class="btn btn-big">Add Doctor</a>
          <a href="index.php" class="btn btn-big">Manage Doctor</a>
        </div>

        <div class="content">
          <h2 class="page-title">Edit Doctor</h2>
          <?php
            $editid = $_REQUEST['editid'];
            $myrecord = $db->displayRecordById($editid,"doctors");
            include "../../controls/errors.php";
          ?>

          <form action="update.php" method="post">
            <div>
              <label>Username</label>
              <input required type="text" name="username" value="<?php echo $myrecord['username']; ?>"  class="text-input" />
            </div>
            <div>
              <label>Email</label>
              <input required type="email" name="email" value="<?php echo $myrecord['email']; ?>" class="text-input" />
            </div>
            <div>
              <label>Select Specialization</label>
              <select required name="DoctorSpecialization" class="text-input">
                <option value="NULL">--Select Specialization--</option>
                <option value="Neurology">Neurology</option>
                <option value="Medicine">Medicine</option>
                <option value="Surgery">Surgery</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Eye Specialist">Eye Specialist</option>
                <option value="Orthopedics">Orthopedics</option>
                <option value="Skin">Skin</option>
                <option value="Pathology">Pathology</option>
                <option value="Neurosurgion">Neurosurgion</option>
              </select>
            </div>
            <div>
              <label>Phone Number</label>
              <input required type="text" name="phone" value="<?php echo $myrecord['phone']; ?>" class="text-input" />
            </div>
            <div>
              <label>Gender</label>
              <select required name="gender" class="text-input">
                <option value="NULL">-- Select Gender --</option>
                <option value="Male"
                <?php
                  if($myrecord['gender']=="Male")
                  {
                    echo "selected";
                  }
                ?>
                >Male</option>
                <option value="Female"
                <?php
                  if($myrecord['gender']=="Female")
                  {
                    echo "selected";
                  }
                ?>
                >Female</option>
              </select>
            </div>

<!-- 7/12/21 -->

<div>
              <label>Patient visit Date</label>
              <input required type="text" name="date" value="" class="text-input" />
            </div>
<div>
              <label>Patient visit Day</label>
              <input required type="text" name="day" value="" class="text-input" />
            </div>
<div>
              <label>Patient visit Start Time</label>
              <input required type="text" name="stime" value="" class="text-input" />
            </div>
<div>
              <label>Patient visit End Time</label>
              <input required type="text" name="etime" value="" class="text-input" />
            </div>
<div>
<label>Status</label>
<select name="status" class="text-input">
                <option disabled selected value="NULL">--Select Status--</option>
                <option value="Active">Active</option>
                <option value="Available">Available</option>
              </select>
            </div>

            <!-- new add -->

            <div>
              <label>Password</label>
              <input required type="password" name="password" value="<?php echo $myrecord['password']; ?>" class="text-input" />
            </div>
            <div>
            <input type="hidden" name="hid" value="<?php echo $myrecord['id']; ?>">
              <button type="submit" name="update" class="btn btn-big">Update</button>
           <article>Please Fill all the Field with Valid information.</article>
            </div>
          </form>
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
