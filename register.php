<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Frozen Food : Ordering System | Register </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>


<?php include('menu.php'); ?>
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.html">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>       

					<form class="login-form text-center" method="post" action="register.php" enctype="multipart/form-data">
                              
                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="text" class="form-control rounded-pill form-control-lg" placeholder="First Name"  name="c_f_name" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Last Name" name="c_L_name" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="password" id="txtNewPassword" placeholder="Enter passward" name="c_pass"class="form-control rounded-pill form-control-lg" required>
                                    </div>

                                    <div class="form-group col-5">
                                        <input  type="password" id="txtConfirmPassword" placeholder="Confirm Passward" name="c_con_pass" class="form-control rounded-pill form-control-lg" required>
                                    </div>


                                      <div class="col-lg-1 py-3" style="margin-left:-5%;">
                                        <div style="color:red; float:right" id="CheckPasswordMatch"></div>
                                      </div>

                                </div>

                                  <div class="row">
                                    <div class="form-group col-6">
                                        <input type="date" class="form-control rounded-pill form-control-lg" placeholder="Birthday" name="c_Birthday" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <select class="form-control rounded-pill form-control-lg" name="c_gen" required>
                                            <option value="" selected disabled hidden>Gender</option>
                                            <option>male</option>
                                            <option>female</option>
                                            <option>other</option>
                                        </select>
                                   </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="email" class="form-control rounded-pill form-control-lg"placeholder="Email" name="c_email" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <input  oninput="count()" onfocusout="chkPhn()" id="inp" type="number" class="form-control rounded-pill form-control-lg"placeholder=" Phone" name="c_phn" required><b><span  style="opacity:0.0"id="invalid">inavalid</span></b>
                                    </div>
                                </div>





                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="textarea" class="form-control rounded-pill form-control-lg"placeholder="Address" name="c_add" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <select class="form-control rounded-pill form-control-lg" name="c_city" required>
                                            <option value="" selected disabled hidden>City</option>
                                            
											 <?php
                                       
             $select_waste_types="select * from city";
                $result_user = @mysqli_query($conn, $select_waste_types);
                $i=1;
          
            while($fh_user= @mysqli_fetch_array($result_user))
            { 


              echo "<option value='".$fh_user['city_id']."' ".($city_id==$fh_user['city_id']?'selected':'')." >". $fh_user['city_name']."</option>";
        ?>


              

              <?php } ?>
											
											
                                        </select>
                                    </div>
                                </div>
								
								
								









                               

                                  <div class="col-12 form-group">
                                      <label for="" class="text-white">Profile Photo</label>
                                          <input type="file" name="c_img" class="form-control rounded-pill form-control-lg" >
                                  </div>

                                  <div class="text-center">
                                        <label>
                                          <input type="checkbox"  name="" required><label for="" class="text-white">By creating a account you agree to our</label>
                                            <a >Terms & Privacy.</a>
                                        </label>
                                  </div>

                                 <div class="form-group">
                                        <input type="submit"value="Register" name="c_register">
                                 </div>

                                 <div class="col-12 text-left text-small text-white" >
                                      Already hava an account? <a href="login.php" >Login</a>
                                 </div>
                          </form>
						  
				</div>
				
			</div>
		</div>
		
		   <script>
              function checkPasswordMatch() {
                  var password = $("#txtNewPassword").val();
                  var confirmPassword = $("#txtConfirmPassword").val();
                  if (password != confirmPassword)
                      $("#CheckPasswordMatch").html('<i class="fas fa-times-circle" style="height:30px;width:10%"></i>');
                  else {
                      $("#CheckPasswordMatch").html(' <i class="fas fa-check-circle" style="color:green" style="height:30px;width:10%"></i>');
                  }
              }
              $(document).ready(function () {
                 $("#txtConfirmPassword").keyup(checkPasswordMatch);
              });

              var c=0;
              var v=0;
              function count()
              {

              var i=document.getElementById("invalid");

                 i.style.color="white";
                 i.style.opacity"0.9";
                 c=c+1;
                 var x= document.getElementById("inp");
                 if(c==1 && x.value<6)

                 {
                   v=1;
                 }

                }



                function chkPhn()
                      {
                       var y= document.getElementById("inp");
                       var a=y.value;

                       if(v==1 || a.length!=10)
                       {
                         var i=document.getElementById("invalid");

                         i.style.color="red";
                         i.style.opacity="0.9";
                         y.style.border="solid 1px red";
                       }
                       else{
                         y.style.border="solid 1px #ccc";
                       }
                     }

              </script>
			  
			  
<!--footer-->

<?php include('footer.php');?>
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

</body>
</html>


 <?php
 if(isset($_POST['c_register'])){

 include('config.php');
   $c_f_name=$_POST['c_f_name'];
   $c_phn=$_POST['c_phn'];
   $c_email=$_POST['c_email'];
   $c_add=$_POST['c_add'];
  
   $c_pass=$_POST['c_pass'];
   $c_L_name=$_POST['c_L_name'];
   $c_age=$_POST['c_Birthday'];
   $c_gen=$_POST['c_gen'];
   $c_city=$_POST['c_city'];
  
   $c_img = $_FILES['c_img']['name'];
   $c_img_tmp =  $_FILES['c_img']['tmp_name'];
   move_uploaded_file($c_img_tmp,"image/$c_img");


	 $sql = "INSERT INTO customer(c_f_name,c_phn,c_email,c_add,c_pass,c_img,c_L_name,c_Birthday,c_gen,c_city) value('$c_f_name','$c_phn','$c_email','$c_add','$c_pass','$c_img','$c_L_name','$c_age','$c_gen','$c_city')";
	 $result = mysqli_query($conn,$sql);
 
	if($result){
			
				 echo "<script>alert('Successfully Account Created')</script>";
				 
			echo"<script>window.open('login.php','_self')</script>";
			} 
    		else
   				 {
				 echo "<script>alert('User Id And Password Is Wrong ')</script>";

					echo"<script>window.open('register.php','_self')</script>";
				}





 }


 ?>