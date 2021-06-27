
<?php 
if(isset($_POST['button'])){
  header("Location: register.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/hms.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM</title>
    <style>
      #im{
  width: 200px;
  height: 300px;
  object-fit: cover;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
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
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" >Login</a>
              </li>
            </ul>
            <form class="d-flex" >
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- end of nav bar -->

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/IMG_1108.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/IMG_1106.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/IMG_1107.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
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
     <center><img width="130px" src="images/icons8-stumbleupon-100.png">
                <h4>Pharmacy</h4>
                
               <p class="text-justify">Islamic Lectures on various topics. Audio organised by speaker, topics and series. Auto Sleep Feature. 250+ Reciters. Surah Playlists. No Ads. Highlights: Guide Available, Newsletter Available, Donation Option Available.</p></center> 
        </div>

              <div class="col-md-4"> 
     <center><img src="images/icons8-search-100.png" width="150px">
                <h4>Search Doctor By Category</h4>
                
               <p class="text-justify">
               
               <select onchange="filter()" class="selectbox" id="select_std">
            </select>

</select></p></center> 
        </div>
              <div class="col-md-4"> 
     <center><img src="images/icons8-document-100.png" width="150px">
                <h4>Feedback/Rating</h4>
                
               <p class="text-justify"></p><h4>TextBox &amp; Button</h4><p></p></center> 
<center>
<p class="text-justify"></p><h4> <button  type="button" class="btn btn-warning" onclick="location.href='register.php'">Register</button>
                  <button type="button" class="btn btn-info">Feed Back</button></h4><p></p></center> 
                                           
                
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
    </div>
    <div class="row">
    <div class="col-sm-6 col-lg-3">
    <div class="single_blog_item">
    <div class="single_blog_img">
    <img id="im" src="images/doc2.jpg" alt="doctor">
    <div class="social_icon">
    <a href="#"> <i class="ti-facebook"></i> </a>
    <a href="#"> <i class="ti-twitter-alt"></i> </a>
    <a href="#"> <i class="ti-instagram"></i> </a>
    <a href="#"> <i class="ti-skype"></i> </a>
    </div>
    </div>
    <div class="single_text">
    <div class="single_blog_text">
    <h3>DR Adam Billiard</h3>
    <p>Heart specialist</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="single_blog_item">
    <div class="single_blog_img">
    <img id="im" src="images/doc3.jpg" alt="doctor">
    <div class="social_icon">
    <a href="#"> <i class="ti-facebook"></i> </a>
    <a href="#"> <i class="ti-twitter-alt"></i> </a>
    <a href="#"> <i class="ti-instagram"></i> </a>
    <a href="#"> <i class="ti-skype"></i> </a>
    </div>
    </div>
    <div class="single_text">
    <div class="single_blog_text">
    <h3>DR Adam Billiard</h3>
    <p>Medicine specialist</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="single_blog_item">
    <div class="single_blog_img">
    <img id="im" src="images/doc1.jpg" alt="doctor">
    <div class="social_icon">
    <a href="#"> <i class="ti-facebook"></i> </a>
    <a href="#"> <i class="ti-twitter-alt"></i> </a>
    <a href="#"> <i class="ti-instagram"></i> </a>
    <a href="#"> <i class="ti-skype"></i> </a>
    </div>
    </div>
    <div class="single_text">
    <div class="single_blog_text">
    <h3>DR Fred Macyard</h3>
    <p>CHeart specialist</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="single_blog_item">
    <div class="single_blog_img">
    <img id="im" src="images/doc2.jpg" alt="doctor">
    <div class="social_icon">
    <a href="#"> <i class="ti-facebook"></i> </a>
    <a href="#"> <i class="ti-twitter-alt"></i> </a>
    <a href="#"> <i class="ti-instagram"></i> </a>
    <a href="#"> <i class="ti-skype"></i> </a>
    </div>
    </div>
    <div class="single_text">
    <div class="single_blog_text">
    <h3>DR Justin Stuard</h3>
    <p>Heart specialist</p>
    </div>
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
   <center><img src="imgs/sign-up.png" width="150px">
              <h4>Sign Up</h4>
              
             <p class="text-justify">Islamic Lectures on various topics. Audio organised by speaker, topics and series. Auto Sleep Feature. 250+ Reciters. Surah Playlists. No Ads. Highlights: Guide Available, Newsletter Available, Donation Option Available.</p></center> 
      </div>

            <div class="col-md-4"> 
   <center><img src="images/icons8-clock-100.png" width="150px">
              <h4>Schedule Match</h4>
              
             <p class="text-justify">Islamic Lectures on various topics. Audio organised by speaker, topics and series. Auto Sleep Feature. 250+ Reciters. Surah Playlists. No Ads. Highlights: Guide Available, Newsletter Available, Donation Option Available.</p></center> 
      </div>
            <div class="col-md-4"> 
   <center><img src="images/icons8-info-100.png" width="150px">
              <h4>Visit Us</h4>
              
             <p class="text-justify">Islamic Lectures on various topics. Audio organised by speaker, topics and series. Auto Sleep Feature. 250+ Reciters. Surah Playlists. No Ads. Highlights: Guide Available, Newsletter Available, Donation Option Available.</p></center> 
      </div>
          
           </div>
      </div>
</section>

<!-- end of 2nd section -->
  <br>      <br>   
        <footer class="bg-dark text-white pt-5 pb-4">

            <div class="container text-center text-md-left">
        
                <div class="row text-center text-md-left">
        
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">   Name</h5>
                        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                  ital consectetur lorem ipsum dolor sit amet adipisicing elit.</p>
                        
                    </div>
        
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> TheProviders</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Creativity</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> SourceFiles</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> bootstrap 5 alpha</a>
                    </p>
        
                    </div>
        
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Your Account</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Become an Affiliates</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Help</a>
                    </p>
                    </div>
        
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Contact</h5>
                        <p>
                            <i class="fas fa-home mr-3"></i>New York, NY 2333, US
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i>theproviders98@gmail.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i>+92 3162859445
                        </p>
                        <p>
                            <i class="fas fa-print	 mr-3"></i>+01 335 633 77
                        </p>
                    </div>
                    
                </div>
        
                <hr class="mb-4">
        
                <div class="row align-items-center">
        
                    <div class="col-md-7 col-lg-8">
                        <p>	Copyright ©2020 All rights reserved by:
                            <a href="#" style="text-decoration: none;">
                                <strong class="text-warning">The Providers</strong>
                            </a></p>
                        
                    </div>
        
                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">
        
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    
                </div>
        
            </div>
            
        </footer>
      
</body>
</html>