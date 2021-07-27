<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.content{
overflow: scroll;
height: 470px;
}

table {
  width: 100%;
  border-collapse: collapse;
  font-size: 1.1rem;
}

th,
td {
  padding: 10px;
  text-align: left;
  border: 1px solid #d3d3d3;
}
#table-data{
  border: 1px solid black;
}
.th-action{
  border: 1px solid black;
}
</style>
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="exampleModalLongAbout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">About Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        We Are At Your Service. <br> Our main Abmission is To Ensure Good Services with Care . <br> You are Free To contact With Us <br> We Hope To see you Good .
        <p>DOM <br>
Doctor Management System is a tertiary care hospital and the leading contributor of private healthcare services in Bangladesh. This has been achieved only through consistent commitment to improve the lives of people through utmost service excellence since its inception on 16th December, 2006. Square Hospital is one of the ventures of Square Group which is the top business group of the country.

The reputation of Square Hospital is the result of quality clinical outcome and comprehensive care, made achievable through world class integrated healthcare facilities by highly trained professionals. Thus, Square Hospitals strives to meet patients’ standards through quality healthcare and making a difference in their lives.

Affiliate partners
About Square GroupAbout Square GroupAbout Square GroupAbout Square Group
Square Hospital has almost all departments of medical service under one roof which enable us to deliver proper integrated services to our patients.

The outpatient department (OPD) of the hospital can serve	Up to 2500 patients daily
Open daily, except Friday
The inpatient department (IPD) of the hospital can serve	Up to 500 patients at a time
ER (Emergency department)	Operational 24/7 round the year
Square Hospital aims to provide unparalleled service to the people of Bangladesh by delivering the highest possible level of care. For this, huge investment has been made on equipment and technology.

MISSION
Deliver QUALITY health care within 5 CORE standards
Adhering to high ethical and moral standards at all times
Making service quality top priority in all we do
Training staff to work within a quality care environment
Providing quality health care service in all processes
Delivering customer satisfaction through quality service</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end of about model -->

<div class="modal fade" id="service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Our Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <?php echo "You can Place your Appointment Anythim ";?> <br>
     <?php echo "You can Place your Symtomps Of Diseses ";?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end of services -->

<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Contact us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <?php echo "Our Hot-Line Number: 16204";?> <br>
    <?php echo "Email: info@doctormanagment.com";?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
<!-- end of contact starting of Doctors -->
<div class="modal fade" id="doctors" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Doctors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <select onchange="filter()" class="selectbox" id="select_std">
            </select>
        <button style='color: tomato;' class='btn' type="reset" onclick="fetch()">Reset</button>
            <div class="content">
          <table >
            <thead>
              <th>Sn</th>
              <th>Username</th>
              <!-- <th>Email</th> -->
              <th>Specialization</th>
              <th>Fees</th>
              <th>Gender</th>  
              <th>Date</th>  
              <th>Day</th>  
              <th>Start Time</th>  
              <th>End Time</th>  
              <th>Status</th>  
              <th colspan="2" class="th-action">Action</th>
            </thead>
            <tbody id="table-data">
              
            </tbody>
          </table>
        </div> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Large modal -->

  
</body>
</html>