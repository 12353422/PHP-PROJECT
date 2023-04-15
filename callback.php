<?php

 include('config.php');
 session_start();

 $shipping_address = $_GET['add'];
 
 $total_amount = $_GET['tot'];
 $cust_id = $_GET['c_id'];
 //$cust_id= $_SESSION['c_id'];
 $invoice_no=date('Ymdhis');
 //$_SESSION['order_no']=  $invoice_no;
 
   $query1="select * from cart where c_id='$cust_id'";
        
          $result2 = mysqli_query($conn,$query1);

           
        while($row=mysqli_fetch_array($result2)){
            $cust_id= $row['c_id'];
          
            $product_id= $row['p_id'];
           $c_id = $cust_id;
		   
            $qty = $row['qty'];
           
      $insert_sql =  "INSERT into orders(invoice_no,p_id,c_id,qty,shipping_address)
			values('$invoice_no','$product_id','$c_id','$qty','$shipping_address')";
	 
	
            $result1 = mysqli_query($conn,$insert_sql);

		}
          

 $sqll="delete from cart where c_id='$cust_id'";
        $result4 = mysqli_query($conn,$sqll);
   
   
    $c_email = $_GET['c_email'];
	
		require 'phpmail/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '587';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'dealnshop04@gmail.com';                 // SMTP username
    $mail->Password = 'dealnshop1234'; 
    $mail->SMTPSecure = 'STARTTLS';
    $mail->setFrom('dealnshop04@gmail.com', 'Furnival');
    $mail->addAddress($c_email);     // Add a recipient
     // $mail->addReplyTo('info@example.com', 'Information');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thank You For Shopping';
    // Mail Body
    $mail->Body .= '<img src="https://morethankyounotes.com/wp-content/uploads/2017/02/Customer-Thank-You-Note-1.png">';
	$mail->send();
	
  
echo"<script>window.open('thank_you.php','_self')</script>";	

?>	


 