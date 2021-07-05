<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="style.css">
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
              <!--<li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login as
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="login.html">Doctor</a></li>
                  <li><a class="dropdown-item" href="login.html">Patient</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>

      <!-- end of nav bar -->

      <header class="mkdf-page">
        <marquee><h2>
        <a href="https://surokkha.gov.bd/"><font color="red">কোভিড-১৯ পরিস্থিতিতে অসুস্থ রোগীদের সেবায় সর্বদা নিয়োজিত </font></a></h2>
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
<br>   <br>   
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
                <center>
                    <img width="130px" src="images/icons8-stumbleupon-100.png">
                    <h4>Pharmacy</h4>

                    <p class="text-justify">For prescribed medicine, go to our pharmacy</p>
                </center>
            </div>

            <div class="col-md-4">
                <center>
                    <img src="images/icons8-search-100.png" width="150px">
                    <h4>Search Doctor By Category</h4>

                    <p class="text-justify">
                        <select name="ctl00$ContentPlaceHolder1$DropDownList1" id="ContentPlaceHolder1_DropDownList1" onchange="filter()">
                            <option value="0">Gestrology</option>
                            <option value="0">Eye</option>

                        </select>
                    </p>
                </center>
            </div>
            <!--<div class="col-md-4" id="login-area">
      <h1 class="text-center">Deposit money for admitting patient</h1>
      <div id="login-area" class="submit-area">
        <h4>User Login</h4>
        <input type="text" class="form-control" placeholder="Enter your email here">
        <br>
        <input type="password" class="form-control" placeholder="enter your password here" name="" id="">
        <br>
        <button class="btn btn-success">Enter</button>

      </div>
      <div></div>



    </div>




         </div>
    </div>
    <div>
      <h1>Transaction Area</h1>
    </div>

    <script>
      const loginBtn = document.getElementById("login");
      loginBtn.addEventListener("click",function(){
        const loginArea = document.getElementById("login-area");
        loginArea.style.display = "none";

      })

    </script>-->
            <div id="login-area" class="col-md-4">
                <h1 class="text-center">Deposit money for admitting patient</h1>
                <div class="login-form">
                    <h4>User Login</h4>
                    <input type="email" name="username" class="form-control" placeholder="Email">
                    <br>
                    <input type="password" name="password"
                           class="form-control" placeholder="Password">
                    <br>
                    <button id="login" class="btn btn-success">Enter</button>
                </div>
            </div>

            <!-- Section to display for the successful login -->

            <div id="transaction-area">
                <div class="row">
                    <div class="col-md-4">
                        <div class="deposit status">
                            <h5>Deposit</h5>
                            <h2>$ <span id="currentDeposit">00</span></h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="withdraw status">
                            <h5>Withdraw</h5>
                            <h2>$ <span id="currentWithdraw">00</span></h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="balance status">
                            <h5>Balance</h5>
                            <h2>$ <span id="currentBalance">200000 BDT</span></h2>
                        </div>
                    </div>
                </div>

                <!-- Section for add Deposit & Withdraw amount -->

                <div class="row">
                    <div class="col-md-6 deposit-withdraw-section">
                        <div class="login-form">
                            <h4>Deposit</h4>
                            <input id="depositAmount" class="form-control" type="text" placeholder="$ amount you want to deposit">
                            <br>
                            <button class="btn btn-success" id="addDeposit">Deposit</button>
                        </div>

                    </div>
                    <div class="col-md-6 deposit-withdraw-section">
                        <div class="login-form">
                            <h4>Withdraw</h4>
                            <input id="withdrawAmount" type="text" class="form-control" placeholder="$ amount you want to withdraw">
                            <br>
                            <button id="addWithdraw" class="btn btn-success">Withdraw</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- JS code starts here -->

            <script>
                // Deposit Button eventHandler
                const depositBtn = document.getElementById("addDeposit");
                depositBtn.addEventListener("click", () => {
                    const depositNumber = getInputNumber("depositAmount");

                    updateSpanText("currentDeposit", depositNumber);
                    updateSpanText("currentBalance", depositNumber);

                    document.getElementById("depositAmount").value = "";
                })

                // Withdraw Button eventHandler
                const withdrawBtn = document.getElementById("addWithdraw");
                withdrawBtn.addEventListener("click", () => {
                    const withdrawNumber = getInputNumber("withdrawAmount");

                    updateSpanText("currentWithdraw", withdrawNumber);
                    updateSpanText("currentBalance", -1 * withdrawNumber);

                    document.getElementById("withdrawAmount").value = "";
                })

                // Function to get user input value
                getInputNumber = (id) => {
                    const amount = document.getElementById(id).value;
                    const amountNumber = parseFloat(amount);
                    return amountNumber;
                }

                //function for update the span text
                updateSpanText = (id, addedNumber) => {
                    const current = document.getElementById(id).innerText;
                    const currentNumber = parseFloat(current);
                    const totalAmount = currentNumber + addedNumber;
                    document.getElementById(id).innerText = totalAmount;
                }

                // Login button eventHandler
                const loginBtn = document.getElementById("login")
                loginBtn.addEventListener("click", () => {
                    // Section to hide transaction area initially
                    const loginArea = document.getElementById("login-area")
                    loginArea.style.display = "none";

                    // To display the transaction area
                    const transactionArea = document.getElementById("transaction-area");
                    transactionArea.style.display = "block";
                })
            </script>



</section>
<!-- end of 1st section -->
<br>  <br>   
<section>
  <section class="doctor_part section_padding">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8">
    <div class="section_tittle text-center">

    <h2>Experienced Doctors</h2>
    
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6 col-lg-3">
    <div class="single_blog_item">
    <div class="single_blog_img">
    <img id="im" src="images/default.jpg" alt="doctor">
    <div class="social_icon">
    <a href="#"> <i class="ti-facebook"></i> </a>
    <a href="#"> <i class="ti-twitter-alt"></i> </a>
    <a href="#"> <i class="ti-instagram"></i> </a>
    <a href="#"> <i class="ti-skype"></i> </a>
    </div>
    </div>
    <div class="single_text">
    <div class="single_blog_text">
        <h3>
            DR Bill Warner
        </h3>
    <p>Cardiac Surgery</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="single_blog_item">
    <div class="single_blog_img">
    <img id="im" src="images/default.jpg" alt="doctor">
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
    <p>Medicine Specialist</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="single_blog_item">
    <div class="single_blog_img">
    <img id="im" src="images/default.jpg" alt="doctor">
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
    <p>Heart Specialist</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="single_blog_item">
    <div class="single_blog_img">
    <img id="im" src="images/default.jpg" alt="doctor">
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
    <p>Neurosurgeon</p>
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
   <center><img src="images/icons8-clock-100.png" width="150px">
              <h4>Schedule Match</h4>
              
             <p class="text-justify"></p></center> 
      </div>
            <div class="col-md-4"> 
   <center><img src="images/icons8-info-100.png" width="150px">
              <h4>Visit Us</h4>
              
             <p class="text-justify">Visit Our Page</p></center> 
      </div>
          
           </div>
      </div>

    </div>

    <div class="maprouter">
      <div class="gmap_canvas">
        <iframe width="800 " height="310" id="gmap_canvas" src="https://maps.google.com/maps?q=uttora%20clinic&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <br>
        <style>.mapouter{position:relative;text-align:right;height:310px;width:1250px;}</style>
        <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:310px;width:1250px;}</style>
      </div>
    </div>
</section>


<!-- end of 2nd section -->
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



                        <i class="fas fa-envelope mr-3"></i>info@doctormanagment.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i>Hotline: +8801904547587
                        </p>
                        <p>
                            <i class="fas fa-print	 mr-3"></i>Emergency: +8801755933719
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