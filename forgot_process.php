<?php
    include('config.php');
	$email = $_POST["u_email"];    
	
                   $sql= "Select * FROM customer where c_email='$email'";
                      $res = mysqli_query($conn,$sql);
                      while($row=mysqli_fetch_array($res))
						{
                         $pass=$row['c_pass'];


	
                       
					 }
									
			  

				  
require 'phpmail/PHPMailerAutoload.php';
$mail = new PHPMailer;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'satyamdharia23rt@gmail.com';                 // SMTP username
$mail->Password = 'satyam@94';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('satyamdharia23rt@gmail.com', 'Frozen Food Team');
$mail->addAddress($email, 'Name');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Forgot Password From';



//$message = '<html><body>';
$mail->Body .= '<h3 style="color:black;">Your Password</h3>';

$mail->Body .= '<tr>';
$mail->Body .= '<td style="border-radius:10px;"><p style="color:green;font-size:18px;" >Your Password : '.$pass.'</td></p>';
$mail->Body .= '</tr>';

$mail->Body .= '<h2 style="color:red;">Thank You!!!</h2>';
$mail->Body .= '<h4 style="color:green">Regards</h4>';
$mail->Body .= '<h3 style="color:#CD4542;">Frozen Food Team</h3>';

if(!$mail->send()) {

  //  echo 'Message could not be sent.';
  //  echo 'Mailer Error: ' . $mail->ErrorInfo;
 
 header("location:forgotpassword.php?msg=2");
 //echo 'Message has been sentcccc';

alt();

} else {
	header("location:forgotpassword.php?msg=1");
	 
//echo 'Message has been sent xxx';

}
?>