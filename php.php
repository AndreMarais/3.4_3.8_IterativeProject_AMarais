<html>
	<head>
		<title>PHP Form Design</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
		<div id = "main">
			<h1>Contact</h1>
				<hr>
			<?php require("nav.php")
			?>
			<br><br><hr>
			
			<?php
			require_once("13dit_phpform_mysqli.php");
			?>
			
			<!-- Form -->
			
			<div class= "contact_container">
				<form action="connect.php" method="post">
					
					<div class="row">
					
						<div class="column">
					
							<label for="name">Full Name</label>
					
						</div>
					
						
						<div class="column2">
						
							<input type="text" id="name" name="name" placeholder="Your full name">
						
						</div>
					</div>
					
					<!-- Email -->
					
					<div class="row">
						
						<div class="column">
							
							<label for="email">Email Address</label>
							
						</div>
							
						<div class="column2">
							
							<input type="text" id="email" name="email" placeholder="Your email address">
							
						</div>
					</div>
						
					<!-- Contact Number Field -->
					
					<div class="row">
						
						<div class="column">
							
							<label for="contactnumber">Contact Number</label>
							
						</div>
							
						<div class="column2">
							
							<input type="text" id="phone" name="phone" placeholder="A contact number">
							
						</div>
					</div>
					
					<!-- Subject -->
					
					<div class="row">
						
						<div class="column">
							
							<label for="subject">Subject</label>
							
						</div>
						
						<div class="column2">
						
							<textarea id="message" name="message" placeholder="Write something..." style="height:200px"></textarea>
						
						</div>
					</div>
					
					<!-- Submit -->
					
					<div class="row">
						<input type="submit" value="Submit">
					</div>
					
				</form>
			</div>
			
			<!-- copyright statement -->
			
			<div id="footer">
				&copy; Copyright Andre Marais, all rights reserved, Tawa College 2025
			</div>
			
		</div>
	</body>
</html>