


<!DOCTYPE html>
<html>
<head>
<title>Frozen Food : Ordering System | My account</title>
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



<?php include ('menu.php');?>  <!---->

<?php 
include('config.php');
if (isset($_GET['cart_id'])){
                       $cart_id=$_GET['cart_id'];

                      $select_query= "delete from cart where cart_id=$cart_id";
                      $select_query_run =     mysqli_query($conn,$select_query);
           }
		   
		   
			$invoice_no=date('Ymdhis');

		   if(isset($_POST['order'])){
			   
			$p_id = $_POST['p_id'];
			$qty = $_POST['qty'];
			$c_id = $_SESSION['c_id'];
		  	for($i=0; $i<sizeof($p_id); $i++) {
		  
		   $qry1="insert into orders(invoice_no,p_id,c_id,qty)
			values('$invoice_no','$p_id[$i]','$c_id','$qty[$i]')" or die (mysqli_error());
	    
		 mysqli_query($conn,$qry1);
		  }  
		  
		  // CART ALL  VALUE DELETE 
			$qry2= "delete from cart where c_id=$c_id";
			mysqli_query($conn,$qry2);
			echo"<script>window.open('mycart.php','_self')</script>";	
		   }
		  
	?>
   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >My Account</h3>
		<h4><a href="index.html">Home</a><label>/</label>My Account</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>My Account</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>	
			    
 <table class="table "> 
			 
		  
		  
		  <?php  
		  $c_id = $_SESSION['c_id'];
		   $select_query1 = "SELECT * FROM customer where c_id='$c_id'";
					  $select_query_run1 =  mysqli_query($conn,$select_query1);
					while ($row =  mysqli_fetch_array($select_query_run1))

                  {
					  
					  $cname =  $row['c_f_name'];
					  $lname =  $row['c_L_name'];
					  $c_age =  $row['c_Birthday'];
					  $c_phn =  $row['c_phn'];
						$c_email =  $row['c_email'];
						
				  }
					  ?>	
		    <tr>
			<th class="t-head head-it ">First Name</th>
			<td class="ring-in t-data"> <?php echo $cname ;?></td>
			 
		  </tr> 
		  
		  <tr>
			<th class="t-head head-it ">Last Name</th>
			<td class="ring-in t-data">  <?php echo $lname ;?></td>
			 
		  </tr>
		  
			
		  <tr>
			<th class="t-head head-it "> Age</th>
			<td class="ring-in t-data">  <?php echo $c_age ;?></td>
			 
		  </tr> 
		  <tr>
			<th class="t-head head-it "> Phone</th>
			<td class="ring-in t-data">  <?php echo $c_phn ;?></td>
			 
		  </tr> 
		  <tr>
			<th class="t-head head-it "> Email </th>
			<td class="ring-in t-data">  <?php echo $c_email ;?></td>
			 
		  </tr>
		   
		 
				   
	 
	</table>
	
				  
				  
		 </div>
		 </div>
		 				
	<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->
			

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