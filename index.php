
<?php 
include "about.php";
include "controls/Database.php";
if(isset($_POST['button'])){
  header("Location: register.php");
}
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM</title>
    <style>
    .fa{
      height:1rem;
font-size: 1.75em;
    }
      .thought{
         border: 1px solid none;
         border-radius: 25px;
         overflow-y:scroll;
         
      }
      #im{
  width: 200px;
  height: 300px;
  object-fit: cover;
}
.flex{
  display:flex;
}
.map{
  width: 30%;
  padding 10%;
}
.video{
  width: 50%
}
/* .maprouter{
  text-align: center;
  padding-left: 70px;
} */
    </style>
    
   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Doctor Managment System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
                <a class="nav-link active" aria-current="page" href="#">Home</a>
             
              <a class="nav-link active" aria-current="page" href="#" data-toggle="modal" data-target="#service">Service</a>
            <a class="nav-link active" aria-current="page" href="#" data-toggle="modal" data-target="#contact">Contact Us</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="doctor-login.php" id="navbarDropdown" role="button" >
                  Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="doctor-login.php">Doctor</a></li>
                  <li><a class="dropdown-item" href="login.php">Patient</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="views/admin-login.php">Admin Login</a></li>   
                </ul>
              </li>
              
            </ul>
            <form class="d-flex" >
            <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quick Check
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Schedule</a>
    <!-- <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a> -->
  
  </div>
            </form>
          </div>
        </div>
      </nav>

      <!-- end of nav bar -->

      <header class="mkdf-page">
        <marquee><h2>
        <a href="https://surokkha.gov.bd/"><font style="font-family: 'Galada', cursive;" color="red">কোভিড-১৯ পরিস্থিতিতে অসুস্থ রোগীদের সেবায় সর্বদা নিয়োজিত </font></a></h2>
        </marquee>
        </header>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/7.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/5.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/4.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

<!-- end of priview slider -->

<!-- end of priview slider -->
<br>   <br>   <form action="#" method="post">
<section>
    <div class="container">
        <div class="row">
            <div class="col-12"> 
               <center> <h2>Our Features</h2>
                 <p><b>Category Wise Doctor Search</b></p></center>
                        
        </div>
    </div>
    
         <div class="row">
            <div class="col-md-4"> 
     <center><img width="130px" src="images/icons8-news-100.png">
                <h3>To Request for an appointment</h3>
                <h4 id = "register">Register Now!</h4>
                <p class="text-justify"></p><h4> <button  type="button" class="btn btn-warning" onclick="location.href='register.php'">Register</button></center> 
        </div>

              <div class="col-md-4"> 
     <center><img src="images/icons8-search-100.png" width="150px">
                <h4>Search Doctor By Category</h4>
                <h5>Change Dropdown items To find doctor </h5><br>
                <a class='btn btn-success' data-toggle="modal" data-target="#doctors" href="#">Explore</a>       
               <p class="text-justify">
               
               <!-- <select onchange="catagory()" class="selectbox" id="select_std"  data-target="#exampleModalCenter">
           <option value="Select">Select</option>
               <option value="1">Ridowan Ahad</option>
               <option value="2">Fahim Uddin</option>
               <option value="3">Rabeya Oishi</option>
            </select> -->
</div> 
<!-- </select></p></center>  -->




              <div class="col-md-4"> 
     <center><img src="images/icons8-document-100.png" width="150px">
                <h4>Feedback/Rating</h4>
            
        
               <p class="text-justify"></p><h4>From Our Patients</h4><p></p></center> 
<center>

                  <a href="#feedback" type='Button' style='
    padding: 0.5rem 1rem;
  background: rgb(189, 31, 31);
  color: white;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  font-size: 1.08em;
' >Feed Backs</a></h4><p></p></center> 
                                           
                
                  </form> 

        </div>
            
             </div>
        </div>
</section>
<!-- end of 1st section -->
<br>  <br>   
<section>
  <section class="doctor_part section_padding">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8">
    <div class="section_tittle text-center">
    <h2> Experienced Doctors</h2>
    <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
    </div>
    </div>
    <h2>At a glance</h2>
<p>Our System Has</p>
<br>
<link rel="stylesheet" href="new.css">
<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user-md "></i></p>
      <h3>
      <?php  $myrecord = $db->displayRecord("doctors");
      include "controls/errors.php"; 
      $res = 0; $val = 1;
      foreach ($myrecord as $value)
       $res += $val;

       echo $res;
        ?>
    </h3>
      <p>Total Doctors</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h4><?php  $myrecord = $db->displayRecord("bookappoint");
      include "controls/errors.php"; 
      $res = 0; $val = 1;
      foreach ($myrecord as $value){
       if($value['status']=='Approved')
        $res += $val;
      }
       echo $res;
        ?></h3>
      <p><h6>Appointment Approved<h6></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-comment"></i></p>
      <h4><?php  $myrecord = $db->displayRecord("comments");
      include "controls/errors.php"; 
      $res = 0; $val = 1;
      foreach ($myrecord as $value){
        $res += $val;
      }
       echo $res;
        ?></h4>
      <p>User Reviews</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-ambulance"></i></p>
      <h3><?php  $myrecord = $db->displayRecord("bookappoint");
      include "controls/errors.php"; 
      $res = 0; $val = 1;
      foreach ($myrecord as $value){
       if($value['status']=='Done')
        $res += $val;
      }
       echo $res;
        ?></h3>
      <p>Visited Patients</p>
    </div>
  </div>
</div>
    </div>
    </div>
    </section>
</section>

<!-- end of doctor info -->
<br>  <br>   
<section>
    <div class="container">
      <div class="row">
          <div class="col-12"> 
             <center> <h2>Our Process</h2>
               <p><b>Here Are Our Process</b></p> </center>              
      </div>
  </div>
  
       <div class="row">
          <div class="col-md-4"> 
   <center><img src="images/icons8-share-100.png" width="150px"><br>
              <a href="#register" style='
    padding: 0.5rem 1rem;
  background: rgb(59, 200, 31);
  color: white;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  font-size: 1.08em;
'>Sign Up now</a>
              
             <p class="text-justify"><h3>By signing up</h3> 
             <h6><li>You can Track your Appointment Histry.<li>Add Symtoms </li> <li>Get Doctors Consults</p></center> </h6>
      </div>

            <div class="col-md-4"> 
   <center><img src="images/icons8-clock-100.png" width="150px">
<h4>Schedule Check</h4>
<h5>For Emargancy</h5><h5 style="color:red;">Covid-19 Consultation</h5>
   <div class="card border-warning mb-3" style=" max-height: 130px;
    overflow-y: auto;">
  <!-- <div class="card-header">Header</div> -->
  <div class="card-body">
    
    <!-- <p class="card-text"> -->
              
<?php 
$myrecord = $db->displayRecord("doctors");
include "controls/errors.php"; 
            
foreach ($myrecord as $value)
if($value['specialization']=='Eye')
echo 'Dr.'.$value['username'].' is available From '.$value['stime'].' To '.$value['etime'].'<br> <hr>'; 
  
?>
         
           </center> </p>
  </div>

              


      
            <div class="col-md-4 thought"> 
   <center><img src="images/icons8-speech-bubble-100.png" width="150px">
              <h4 id="feedback">Your Thoughts</h4>
             
            <?php  $myrecord = $db->displayRecord("comments");
            include "controls/errors.php"; 
            
            foreach ($myrecord as $value)
            echo $value['uid'].' Says '.$value['message'].'<br>'; 
              ?>


            </center> 
      </div>
          
           </div>
      </div>
</section>

<!-- end of 2nd section -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Doctor Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h3 id="cat"></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- map -->

<section class="flex">

<div class="map"></div>

<div class="maprouter"><div class="gmap_canvas"><iframe width="600 " height="310" id="gmap_canvas" src="https://maps.google.com/maps?q=uttora%20clinic&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br></div></div>


<!-- <div class="video">
<iframe width="560" height="315" src="https://www.youtube.com/embed/Cf0g4UWSUIw?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> -->
</section>
 
  <br>      <br>   
  <footer class="bg-dark text-white pt-5 pb-4">

<div class="container text-center text-md-left">

    <div class="row text-center text-md-left">

        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">   Doctor Managment</h5>
            <p>“To serve humanity.” The trust has promised to provide low-cost healthcare services to the people of Bangladesh.</p>
            
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Services</h5>
        <p>
            <a href="#" class="text-white" style="text-decoration: none;">Covid-19 Test</a>
        </p>
        <p>
            <a href="#" class="text-white" style="text-decoration: none;">Diagnostic Services</a>
        </p>
        <p>
            <a href="#" class="text-white" style="text-decoration: none;">Cardiac Services</a>
        </p>
        <p>
            <a href="#" class="text-white" style="text-decoration: none;">Dental Checkup</a>
        </p>

        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
        <p>
            <a href="https://www.facebook.com/">Facebook</a>
        </p>
        <p>
            <a href="https://www.twitter.com/">Twitter</a>
            
        </p>
        
       
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact Us</h5>
            <p>
                Uttora Clinic
                EIB Compond, 24/2 Cantonment Rd, Rajshahi 6202
            </p>



            <i class="fa fa-envelope mr-3"></i>info@doctormanagment.com
            </p>
            <p>
                <i class="fa fa-phone mr-3"></i>Hotline: +8801904547587
            </p>
            <p>
                <i class="fa fa-print	 mr-3"></i>Emergency: +8801755933719
            </p>
        </div>
        
    </div>
   

    <hr class="mb-4">

    <div class="row align-items-center">

       <!---- <div class="col-md-7 col-lg-8">
            <p>	Copyright ©2020 All rights reserved by:
                <a href="#" style="text-decoration: none;">
                    <strong class="text-warning">The Providers</strong>
                </a></p>
            
        </div>-->

        <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">

                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fas fa-linkedin-in"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
                
            </div>
            
        </div>
        
    </div>

</div>

</footer>
      <!-- <script>
      function catagory(){
        var x = document.getElementById("select_std").value;
        var about;
        if(x==1){
          // about = "A Neurologist \n PHD from Lahore Medical Collage \n Scecilist In head Neuron";
          var myWindow = window.open("", "MsgWindow", "width=200, height=100");
          document.getElementById("cat").innerHTML = ("<img src='img/doc1.png'>");
    // myWindow.document.write("<img src='img/doc1.png'> This is 'MsgWindow'. I am 200px wide and 100px tall!");
        }
        else if(x==2){
          document.getElementById("cat").innerHTML = ("<img src='img/doc2.png'>");
        }
  // document.getElementById("cat").innerHTML = "You selected: " + about;
  
      }
      </script> -->
      <script>
        function fetch_std(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("select_std").innerHTML = this.responseText;
            }
          else
          {
            document.getElementById("select_std").innerHTML = this.status;
          }
          };
          xhttp.open("GET", "/DMS/patient/fetch_std.php", true);
        
          xhttp.send();
          
        }
        fetch_std()

      // Fetch Result


    function fetch(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("table-data").innerHTML = this.responseText;
            }
          else
          {
            document.getElementById("table-data").innerHTML = this.status;
          }
          };
          xhttp.open("GET", "/DMS/patient/load.php", true);
        
          xhttp.send();
          
        }
        fetch();

    function filter() {
          var spec=  document.getElementById("select_std").value;
          // var gen=  document.getElementById("select_res").value;
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
// ajax
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("table-data").innerHTML = this.responseText;
            }
          else
          {
            document.getElementById("table-data").innerHTML = this.status;
          }
          };
          xhttp.open("POST", "/DMS/patient/records.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("select_std="+spec);
}
    </script>
</body>
</html>