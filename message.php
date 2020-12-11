
	<html>
	<body>
			<?php
			//the message
			$name = "Hi my name is" <?php  echo $_POST["name"]; ?>;
			$email = "Email:" <?php  echo $_POST["Email"]; ?>;
			$mess =  <?php  echo $_POST["textarea"]; ?>;
			$message =  $name.$email.$mess;

			$message = wordwrap($message,70);

			mail("kpali.promise@outlook.com", "Customers Enquiry", $message);
			?>
		</body>
			</html>