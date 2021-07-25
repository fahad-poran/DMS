<?php include "../controls/Database.php" ?>


<?php 
  session_start();
  $db = new Database();
 
  if(!isset($_SESSION['username']))
  {
    header("Location:../doctor-login.php");  
  }
  $currentUser=$_SESSION['id'];
  if(isset($_POST['update']))
  {
      $update=$db->updateAdminRecord($_POST,"admin",$currentUser);
      if($update)
      {
          echo "<script>alert('Updated succesfully');</script>";
  
          echo "<script>window.location.href = 'updateProfile.php';</script>";
      }
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Document</title>
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
        <li><a href="Dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php">Manage Patient</a></li>
          <li><a href="users/index.php">Manage Doctor</a></li>
          <li><a href="updateProfile.php?editid=<?php echo $currentUser; ?>">Update Profile</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
          <h2 class="page-title">Update Admin Profile</h2>
         
          <?php include "../controls/errors.php" ?>
            <?php  
              $data = $db->displaySingleRecord("admin",$currentUser);
              if($data)
              {
                foreach($data as $value)
                {
            ?>
          <form action="updateProfile.php" method="post"  onsubmit="return validate()" name="myform" class= "form">
          <div>
              <label>Email</label>
              <input type="email" name="email" value="<?php echo $value['email']; ?>" class="text-input" readonly/>
            </div> 
          <div>
              <label>Username</label>
              <input type="text" name="username" value="<?php echo $value['username']; ?>"  class="text-input" />
            </div>
          
            <div>
              <label>Password</label>
              <input type="text" name="password" value="<?php echo $value['password']; ?>" class="text-input" />
            </div> <div>
            <button type="submit" name="update" class="btn btn-big">Update</button>
            </form> </div>
            <?php } } ?>
                </div>
                </div>
                </div>
    <!-- // Page Wrapper -->
    <script src="../js/main.js"></script>
    <script>
 function validate() {
 var name = document.forms["myform"]["username"].value;
 if(name==""){
 alert("Please enter the name");
 return false;
 }
 
 if(name.length < 4)
 {
   alert("atleast 4 charecter");
   return false;
 }
else{
 var re = /^[a-zA-Z ]*$/;
 var x=re.test(name);
 if(x){
 }
 else{
 alert("Only letter allowed");
 return false;
 } 
 } 
 
var passowrd = document.forms["myform"]["password"].value;
if(password.length !=8){
  alert("Password should be 8 carecter long");
  return false;
}
}
    </script>
</body>
</html>