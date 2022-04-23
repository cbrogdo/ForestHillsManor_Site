<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title>Card Payment</title>
		<link rel="stylesheet" href="./style.css" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    
		<!--Start of Tawk.to Script-->

    	<!--End of Tawk.to Script-->
    
</head>

<body class="col-md-12">
		<div class="content">
			<div class="navi">
				<div class="title">
					<h1>
						Forest Hills Manor
					</h1>
				</div>
				<nav>
					<a href="./home.html"> Home </a>
					<a href="./about.html"> About Us </a>
					<a href="./contact.html"> Contacts </a>
					<a href="./chat.html">Chat</a>
					<a href="./units.html">Units</a>
					<a href="./floor_plans.html"> Floor Plans</a>
					<a href="./application.html"> Applications </a>
					<a href="./payment.html">Payments</a>
					<a href="./faq.html"> FAQ </a>		
				</nav>
			</div>
            
     
            
			<?php
			
			$cardNum = $_POST['CardNum'];
			$cardHldrName = $_POST['CardHldrName'];
			$cvv = $_POST['CVV'];
			$expDate = $_POST['ExpDate'];
			$zipCode = $_POST['ZipCode'];
			
			
			
			$servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";

            $connection = mysqli_connect($servername, $username, $password, $dbname);

            if (!$connection){
                die("Connection failed:". mysqli_connect_error());
            }
			
			

			$sql = "INSERT INTO cardpayment (CardNum, CardHldrName, CVV, ExpDate, ZipCode) VALUES ('$cardNum', '$cardHldrName', '$cvv', '$expDate', '$zipCode')";
			
			
			if (mysqli_query($connection, $sql)) {
				echo "New record created successfully";
			}
			else {
				echo "Something went wrong. Please try again! Error:" . $sql . "<br>" . mysqli_error($connection);
			}
			
			
			
            ?>
            
            
            
			<p><a href="home.html"> Home Page </a> </p>
			<p><a href="payment.html"> Re-enter payment information </a> <br /></p>
			
			<div class="footer">
				<img src='' alt="Forest Hills Manor Logo">
				<div class="text">
					<p class="name">Forest Hills Manor</p>
					<p>
						1211 Sully Drive
						<br/>
						Harrisonburg, VA 22801
						<br />
						(540) 433-2279
						<br />
						<a href='mailto:info@foresthillsmanor.com.'>info@foresthillsmanor.com</a>
					</p>
				</div>
			</div>
		</div>	
		
		
		
	
		
		
		
	</body>
</html>