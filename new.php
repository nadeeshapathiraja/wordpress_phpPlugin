<!-- After Press Booking Button -->
<?php

    if (isset($_REQUEST["booking"])){
//  session_start();

        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $country=$_REQUEST['country'];
        $passportId=$_REQUEST['passportId'];
        $comments=$_REQUEST['comments'];
        $pickupdate=$_REQUEST['pickupdate'];
        $pickuptime=$_REQUEST['pickuptime'];
        $pickUpLocation=$_REQUEST['pickUpLocation'];
        $dorpOffLocation=$_REQUEST['dorpOffLocation'];
        $payment=$_REQUEST['payment'];      
        $pasengers=$_REQUEST['pasengers'];
        $suitcases=$_REQUEST['suitcases'];
        $vehicle=$_REQUEST['vehicle'];

		//header("Location: http://yayataxis.com/complete-submit/");
		
        $to="kushani.ceilanco@gmail.com";
        $subject="Book Ride";
        $message="This Persion Book Our Vehicle \n\n"."Full Name: ".$firstname. " ".$lastname."\n"."Phone : ".$phone."\n"."Passport Id: ".$passportId."\n";
		    $headers="From : $email";
		
		// if($email !=''&& $phone !=''&& $passportId !='')
		// {
		// 	//  To redirect form on a particular page
		// 	header("Location:http://yayataxis.com/complete-submit/");
		// }
		//window.open(“www.yayataxis.com/complete-submit/”);
		
		

        if(mail($to,$subject,$message,$headers)){
            echo "<h2 style='text-aligan: center;'>Email Sent Successfully! Thank You</h2>";
        }
        else{
            echo "Someting Went Wrong";
		}
		
		

		unset($_REQUEST["booking"]);
    }
?>

<!-- Cancle button -->
<?php

    if (isset($_REQUEST["cancle"])){
//  session_start();

        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $country=$_REQUEST['country'];
        $passportId=$_REQUEST['passportId'];
        $comments=$_REQUEST['comments'];
        $pickupdate=$_REQUEST['pickupdate'];
        $pickuptime=$_REQUEST['pickuptime'];
        $pickUpLocation=$_REQUEST['pickUpLocation'];
        $dorpOffLocation=$_REQUEST['dorpOffLocation'];
        $payment=$_REQUEST['payment'];      
        $pasengers=$_REQUEST['pasengers'];
        $suitcases=$_REQUEST['suitcases'];
        $vehicle=$_REQUEST['vehicle'];


        $to="kushani.ceilanco@gmail.com";
        $subject="Cancle Ride";
        $message="This Persion Cancle booking \n\n"."Full Name: ".$firstname. " ".$lastname."\n"."Phone : ".$phone."\n"."Passport Id: ".$passportId."\n";
		$headers="From : $email";
		
        if(mail($to,$subject,$message,$headers)){
            echo "<h2>You Cancle your Ride</h2>";
        }
        else{
            echo "Someting Went Wrong";
		}
		
		//window.location.replace('http://yayataxis.com/my-booking-info');
		//window.open(“www.yayataxis.com/my-booking-info”);
		//header("Location: www.yayataxis.com/my-booking-info/");
		
    }
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  width: 500px;
}



input {
  padding: 10px;
  width: 100%;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}


/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
#regForm .nameh1{
  text-align: center;
  font-size: 50px;
  font-weight: bold;
}


.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body onload='document.rideDetails.email.focus()'>

<div class="row" >
<div class="col-md-3"></div>
  <div class="col-md-6 col-sm-2">
    <div class="Jumbotron">

    
      <form id="regForm" method="post" name="rideDetails" action="http://yayataxis.com/my-booking-info/">

            


            <!-- Page 1 strat -->
            <div class="tab">
            <h2 style="font-size: 40px; font-weight: bold; text-align: center;">Ride Details</h2>

              

              <label>Pickup Date</label>

              <p><input type="date" oninput="this.className = ''" id="date" max="2030-12-31" min="<?php echo date("Y-m-d");?>" name="pickupdate"><span class="currentdate" style="font-weight: 400px;font-size:11px; color:#f8cf2c" >(Today:  <?php echo date("m-d-Y");?>)</span></p>  
              




              <label>Pickup time</label>
              <p><input type="time" oninput="this.className = ''" name="pickuptime"></p>

              <p>
              <label>Pickup Location</label>
              
                  <select class="form-control" name="pickUpLocation" id="pickUpLocation">
                          <!-- <option value="Ampara">Ampara</option>
                          <option value="Anuradhapura">Anuradhapura</option>
                          <option value="Badulla">Badulla</option>
                          <option value="Batticaloa">Batticaloa</option>
                          <option value="Colombo">Colombo</option>
                          <option value="Galle">Galle</option>
                          <option value="	Gampaha">Gampaha</option>
                          <option value="	Jaffna">Jaffna</option>
                          <option value="	Kalutara">Kalutara</option>
                          <option value="Kandy">Kandy</option>
                          <option value="Kegalle">Kegalle</option>
                          <option value="Kilinochchi">Kilinochchi</option>
                          <option value="Kurunegala">Kurunegala</option>
                          <option value="Mannar">	Mannar</option>
                          <option value="Matale">Matale</option>
                          <option value="Matara">Matara</option>
                          <option value="Monaragala">Monaragala</option>
                          <option value="Mullaitivu">Mullaitivu</option>
                          <option value="Nuwara Eliya">Nuwara Eliya</option>
                          <option value="Polonnaruwa">Polonnaruwa</option>
                          <option value="Puttalam">Puttalam</option>
                          <option value="Ratnapura">Ratnapura</option>
                          <option value="Trincomalee">Trincomalee</option>
                          <option value="Vavuniya">Vavuniya</option> -->
                          <option value="Johor">Johor</option>
                          <option value="Kedah">Kedah</option>
                          <option value="Kelantan">Kelantan</option>
                          <option value="Kuala Lumpur">Kuala Lumpur</option>
                          <option value="Melaka">Melaka</option>
                          <option value="Negeri Sembilan">Negeri Sembilan</option>
                          <option value="	Pahang">Pahang</option>
                          <option value="	Penang">Penang</option>
                          <option value="	Perak">Perak</option>
                          <option value="Perlis">Perlis</option>
                          <option value="Putrajaya">Putrajaya</option>
                          <option value="Selangor">Selangor</option>
                          <option value="Terengganu">Terengganu</option>
                          <option value="Labuan">Labuan</option>
                          <option value="Saban">Saban</option>
                          <option value="Sarawak">Sarawak</option>

                  </select>
              </p>

              <p>
                <label>Drop Off Location</label>
                      
                    <select class="form-control" name="dorpOffLocation" id="dorpOffLocation">

                          <!-- <option value="Ampara">Ampara</option>
                          <option value="Anuradhapura">Anuradhapura</option>
                          <option value="Badulla">Badulla</option>
                          <option value="Batticaloa">Batticaloa</option>
                          <option value="Colombo">Colombo</option>
                          <option value="Galle">Galle</option>
                          <option value="	Gampaha">Gampaha</option>
                          <option value="	Jaffna">Jaffna</option>
                          <option value="	Kalutara">Kalutara</option>
                          <option value="Kandy">Kandy</option>
                          <option value="Kegalle">Kegalle</option>
                          <option value="Kilinochchi">Kilinochchi</option>
                          <option value="Kurunegala">Kurunegala</option>
                          <option value="Mannar">	Mannar</option>
                          <option value="Matale">Matale</option>
                          <option value="Matara">Matara</option>
                          <option value="Monaragala">Monaragala</option>
                          <option value="Mullaitivu">Mullaitivu</option>
                          <option value="Nuwara Eliya">Nuwara Eliya</option>
                          <option value="Polonnaruwa">Polonnaruwa</option>
                          <option value="Puttalam">Puttalam</option>
                          <option value="Ratnapura">Ratnapura</option>
                          <option value="Trincomalee">Trincomalee</option>
                          <option value="Vavuniya">Vavuniya</option> -->
                          <option value="Johor">Johor</option>
                          <option value="Kedah">Kedah</option>
                          <option value="Kelantan">Kelantan</option>
                          <option value="Kuala Lumpur">Kuala Lumpur</option>
                          <option value="Melaka">Melaka</option>
                          <option value="Negeri Sembilan">Negeri Sembilan</option>
                          <option value="	Pahang">Pahang</option>
                          <option value="	Penang">Penang</option>
                          <option value="	Perak">Perak</option>
                          <option value="Perlis">Perlis</option>
                          <option value="Putrajaya">Putrajaya</option>
                          <option value="Selangor">Selangor</option>
                          <option value="Terengganu">Terengganu</option>
                          <option value="Labuan">Labuan</option>
                          <option value="Saban">Saban</option>
                          <option value="Sarawak">Sarawak</option>

                    </select>
              </p>
              
            </div>
            <!-- Page 1 end -->


            <!-- Page 2 Start -->
            <div class="tab">
              
              <h2 style="font-size: 40px; font-weight: bold; text-align: center;">Choose Vehicle</h2>
              <p>
                <label>Number of Passenger:</label>

                    <select name="pasengers" class="form-control" id="pasengers">

                        <?php 

                              for($i=1; $i<=100; $i++)
                              {
                                  echo "<option value=".$i.">".$i."</option>";
                              }
                            ?> 
                        <option name="pasengers"> </option>
                    </select>
              </p>

              <p>
                <label>Number Of Suitcases:</label>
                    
                    <select name="suitcases" class="form-control" id="suitcases" onchange="vehicle()">
                            <?php 

                              for($i=1; $i<=10; $i++)
                              {
                                  echo "<option value=".$i.">".$i."</option>";
                              }
                            ?> 
                        <option name="suitcases"> </option>
                    </select>
              </p>

                      <input type="button" class="selectvehicle" name="select" value="Select Vehicle" onclick="myFunction()" /> 

                      <script type="text/javascript">
                          $(document).ready(function() {
                              document.getElementById("vehicleTable").style.display = "none";
                              
                            });
                              function vehicle(){
                                
                                var elms = document.querySelectorAll("[id='table']");

                                for(var i = 0; i < elms.length-2; i++){
                                  elms[i].style.display='none';
                                } 
                                  
                              }
                          function myFunction(){
                            var x = document.getElementById("vehicleTable");

                              if (x.style.display === "none") {
                                x.style.display = "block";
                              } else {
                                  x.style.display = "none";
                              }
                          }
                      </script>

                      <div id="vehicleTable">

                        <table class="table table-dark">

                          <thead>
                              <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Max Passengers</th>
                                <th scope="col">Max Suitcases</th>
                                <th scope="col">Select Vehicle</th>
                              </tr>
                          </thead>
                    

                          <tbody>
                            <tr>
                              <td><img style="width: 80px" src="http://yayataxis.com/wp-content/uploads/2019/11/car.jpg"></td>
                              <td>Car</td>
                              <td>20000</td>
                              <td>4</td>
                              <td>3</td>
                              <td><input type="radio" value="Car" name="selectVehicle" required></td>
                            </tr>

                            <tr>
                              <td><img style="width: 80px" src="http://yayataxis.com/wp-content/uploads/2019/11/van.png"></td>
                              <td>Van</td>
                              <td>35000</td>
                              <td>8</td>
                              <td>10</td>
                              <td><input type="radio" value="Van" name="selectVehicle"></td>
                            </tr>

                            <tr>
                              <td><img style="width: 80px" src="http://yayataxis.com/wp-content/uploads/2019/11/bus.jpg"></td>
                              <td>Bus</td>
                              <td>45000</td>
                              <td>30</td>
                              <td>20</td>
                              <td><input type="radio" value="Bus" name="selectVehicle"></td>
                            </tr>
                            
                          </tbody>

                      

                        </table>

                      </div>



            </div>
            <!-- Page 2 end -->


            <!-- Page 3 Start -->
            <div class="tab">
              
              <h2 style="font-size: 40px; font-weight: bold; text-align: center;">Contact Details</h2>
              
              <div>

                <div class="row contactrow" style="margin-top: 30px;">
                  <div class="col-md-6">
                    <label>First Name</label>
                    <input name="firstname" type="text" class="form-control">  
                  </div>
                  <div class="col-md-6">
                    <label>Last Name</label>
                    <input name="lastname" type="text" class="form-control">
                  </div>  
                </div>

                <div class="row contactrow">
                  <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" id="email" placeholder="Ex:example@gmail.com"  required/>
                  </div>

                  <div class="col-md-6">
                    <label>Phone</label>
                    <input name="phone" type="tel" pattern="[0-9]{10}" placeholder="Ex:0768352207" class="form-control">
                  </div>    
                </div>

                <div class="row contactrow">
                  <div class="col-md-6">
                    <label>Country</label>
                    
                      <select class="form-control" name="country" id="country">

                              <option value="Sri Lanka">Sri Lanka</option>
                              <option value="India">India</option>
                              <option value="Australia">Australia</option>
                              <option value="Brazil">Brazil</option>
                              <option value="Canada">Canada</option>
                              <option value="Italy">Italy</option>
                              <option value="Japan">Japan</option>
                              <option value="Mali">Mali</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Oman">Oman</option>
                              <option value="Russia">Russia</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Sweden">Sweden</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Turkey">Turkey</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="Zimbabwe">Zimbabwe</option>
                              <option value="Vietnam">Vietnam</option>
                              <option value="America">America</option>
                              <option value="South Korea">South Korea</option>

                      </select>
              </p>
                  </div>
                  <div class="col-md-6">
                    <label>Passport Id</label>
                    <input name="passportId" type="text" class="form-control" rows="10" cols="30">
                  </div>  
                </div>

                <div class="row" style="margin-top: -20px;">
                  <div class="col-md-12">
                    <label style="margin-top: 0px;">Comments</label>
                    <textarea name="comments" rows="5" cols="50">
                    </textarea>
                  </div>
                </div>
              </div>

            </div>
            <!-- Page 3 end -->


            <!-- Page 4 Start -->
            <div class="tab">

              <h2 style="font-size: 40px; font-weight: bold; text-align: center;">Payment Details</h2>

              <div class="custom-control custom-radio">

                  <div class="row">

                      <div class="col-md-8">
                        <label class="custom-control-label">Deposit to Bank</label>
                      </div>

                      <div class="col-md-1">
                        <input type="radio" class="custom-control-input" id="cardpayment" value="DeposittoBank" name="payment" checked>
                      </div>

                      <div class="col-md-3">
                        
                      </div>

                  </div>

                  <div class="row">

                      <div class="col-md-8">
                        <label class="custom-control-label" >Direct Transfer</label>
                      </div>

                      <div class="col-md-1">
                        <input type="radio" class="custom-control-input" id="cashpayment" value="CashPayment" name="payment">
                      </div>

                      <div class="col-md-3"></div>
                      
                  </div>
                  
                  

                  <div class="row" style="margin-top: 20px;"> 

                      <div class="col-md-4"></div>

                      <div class="col-md-4 submitButton">
                          <input type="submit" name="submitvalue"   class="formSubmit" id="allData" value="Submit" onclick="ClickButton(); ValidateEmail(document.rideDetails.email)" >
                      </div>

                          <script type="text/javascript">

                              function ClickButton() {

                                var a = document.forms["rideDetails"]["selectVehicle"].value;
                                
                                if (a == null || a == "") {
                                  alert("Please Select Vehicle");
                                  return false;
                                }


                              }

                              // function validate() {
                              //   var b= document.forms["rideDetails"]["email"].value;
                              //   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                              //   if(b==null||){
                                  
                              //   }
                              // }

                              function ValidateEmail(inputText)
                              {
                                  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                  if(inputText.value.match(mailformat))
                                {
                                  document.rideDetails.email.focus();
                                  return true;
                                }
                                else
                                {
                                  alert("You have entered an invalid email address!");
                                  document.rideDetails.email.focus();
                                  return false;
                                }
                              }   


                          </script>
                      
                      <div class="col-md-4"></div>

                  </div>


              </div>
            </div>
            <!-- Page 4 end -->




            <!-- Common -->
            <div style="overflow:auto; margin-top: 20px;">
              <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                
              </div>
            </div>



            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <!-- <span class="step"></span> -->
            </div>

            <script>history.pushState({}, "", "")</script>
                                  
        </form>
      </div>
  </div>
  <div class="col-md-3"></div>

</div>



  <script>

      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab


      function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";

          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
            document.getElementById("allData").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }

          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").style.display = "none";;
          } else {
            document.getElementById("nextBtn").style.display = "inline";
            document.getElementById("allData").style.display = "inline";
          }
          //... and run a function that will display the correct step indicator:

          fixStepIndicator(n)
      }

      function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
      }

      function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
      }

      function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
      }

  </script>

  </body>
</html>