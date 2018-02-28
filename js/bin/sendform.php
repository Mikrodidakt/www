<?php
  
	  // echo ("before empty");
	 // if (!empty($_POST))
	 
	 $request = $_SERVER['REQUEST_METHOD'];
   {
	   if ($request == "GET")
	   {
      $name = $_GET["name"];
      $vmail = $_GET["email"];
  		$phone = $_GET['phone'];
      $message = $_GET['message'];
      $captcha = $_GET['captcha'];
			$url = $_GET['url'];
     }
	   else
	   {
      $name = $_POST["name"];
      $vmail = $_POST["email"];
  		$phone = $_POST['phone'];
      $message = $_POST['message'];
			$captcha = $_POST['captcha'];
			$url = $_POST['url'];
     }
		 
		 if(preg_match( "/[\r\n]/", $name) || preg_match("/[\r\n]/", $vmail)) {
			 return;
		 }

		 // Summarize dates to verify with captcha
		 $y = date("Y");
		 $m = date("m");
		 $d = date("d");		 
		 $datesum = $y + $m + $d;
		 
		 // verify captcha
		 if($datesum == $captcha && empty($url)) {
				 //echo  "request $request\r\n";  
				$message = "Tel.: " .$phone ."\r\n" .$message;        
				$message = "Name: " .$name ."\r\n" .$message;
				
				$from = $vmail;
				$cc = $vmail;

				$header = "";
				$header = "From: ". $from ."\r\n"."Reply-To: ". $vmail ."\r\n";
				$header.= "CC: ". $cc ."\r\n";
				$header.= "X-Mailer: PHP/" . phpversion();
				$header.= "User-agent: www.mikrodidakt.se\r\n";
				$header.= "Content-Type: text/plain; charset=iso-8859-1\r\n";
				$header.= "Content-Transfer-Encoding: 8bit\r\n";

				// echo("name: " . $_POST['name'] . "<br />\n");

	 			//	echo("email: " . $_POST['vmail'] . "<br />\n");
				mail("support@mikrodidakt.se", "Contact form message from: " .$name ." to MikrodidaktAB", $message, $header);
	 			//	echo ("after mail $vmail\r\n $header");
		 }
	}
?>
