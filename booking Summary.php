<!DOCTYPE html>
<html>
<head>
	<title>card booking summary</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>


<!-- Summary -->

	<div class="container">

		<form action="#" method="post">

			<div>
				<h1> Booking Summary</h1>
			</div>

			<div class="row">

				<div class="col-md-4">

					<h2>Ride Details</h2>
					
					

						<div class="row" style="margin-top: 30px;">

							<div class="col-md-6">
								<label>First Name:</label>
								<input name="firstname" type="text" class="form-control" value="<?php echo $firstname; ?>">
							</div>

							<div class="col-md-6">
								<label>Last Name:</label>
								<input name="lastname" type="text" class="form-control" value="<?php echo $lastname; ?>">
							</div>	

						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Email:</label>
								<input name="email" type="text" class="form-control" value="<?php echo $email; ?>">
							</div>
							<div class="col-md-6">
								<label>Phone:</label>
								<input name="phone" type="text" class="form-control" value="<?php echo $phone; ?>">
							</div>	
						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Birth day:</label>
								<input name="dob" type="date" class="form-control" value="<?php echo $dob; ?>">
							</div>
							<div class="col-md-6">
								<label>Passport Id:</label>
								<input name="passportId" type="text" class="form-control" value="<?php echo $passportId; ?>">
							</div>	
						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Pick Up Date:</label>
								<input name="pickupdate" type="date" class="form-control" value="<?php echo $pickupdate; ?>">
							</div>
							<div class="col-md-6">
								<label>Pick Up Time:</label>
								<input name="pickuptime" type="text" class="form-control" value="<?php echo $pickuptime; ?>">
							</div>	
						</div>

						<!-- <div class="row" style="margin-top: 40px;">
							<div class="col-md-12">
								<label style="margin-top: 0px;">Comments:</label>
								<textarea name="comments" rows="5" cols="50" value="<?php echo $row[7]; ?>">
								</textarea>
							</div>
						</div> -->

						<div class="row">

							<div class="col-md-6">
								<label>Pick Up Location:</label>
								<input name="pickUpLocation" type="text" class="form-control" value="<?php echo $pickUpLocation; ?>">
							</div>
							<div class="col-md-6">
								<label>Drop Of Location:</label>
								<input name="dorpOffLocation" type="text" class="form-control" value="<?php echo $dorpOffLocation; ?>">	
							</div>
				
						</div>
			
				</div>

				<div class="col-md-4">
					<h1 class="display-4">Payment Details</h1>
		    
						<div class="custom-control custom-radio">
							<label>Payment Method:</label>
							<input name="payment" type="text" class="form-control" value="<?php echo $payment; ?>">
						</div>

				</div>

				<div class="col-md-4">

					<div class="row">
						<div class="col-md-12">
		    
							
							<label>Number Of Pasengers:</label>
							<input name="pasengers" type="text" class="form-control" value="<?php echo $pasengers; ?>">

							<label>Number Of Suitcases:</label>
							<input name="suitcases" type="text" class="form-control" value="<?php echo $suitcases; ?>">
				

						</div>
					</div>						

					<div class="row" style="margin-top: 50px;">
						<div class="col-md-6">
							
								<label>Total Distance:</label>
								<input name="distance" type="text" class="form-control" value="100Km">
	
						</div>
						<div class="col-md-6">
							

								<label>Total Price:</label>
								<input name="price" type="text" class="form-control" value="Rs 50000.00">

							
							
						</div>	
					</div>
				</div>

			</div>


	<!-- button -->
			<div class="row">

				
				<div class="col-md-10">
					
				</div>

				<div class="col-md-2">

						<input type='button' onclick="window.location.replace('http://localhost/yayaTaxi/all.php')" value='Cancle'>	
						<input type="button" value="BOOK NOW!" onclick="window.location.href='https://support.payhere.lk/links-&-buttons/payhere-buttons'" />
					
				</div>


			</div>


	</form>	



	</div>
	

</body>
</html>