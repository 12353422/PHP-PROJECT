


<!DOCTYPE html>
<html>
<head>
<title>Frozen Food : Ordering System | My order </title>
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
		<h3 >My Order</h3>
		<h4><a href="index.html">Home</a><label>/</label>My Order</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>My Order</h3>
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
			   
<?php
include("config.php");
			$tot=0;
					$c_id=$_SESSION['c_id'];
                      $select_query= "SELECT invoice_no,order_time,order_status, p_id,c_id FROM orders where c_id='$c_id' GROUP BY invoice_no";
					  
					
                      $select_query_run =  mysqli_query($conn,$select_query);
					
                      while   ($row =  mysqli_fetch_array($select_query_run))

                  {
					  
					  ?>
 <table class="table "> 
					
		  <tr>
			<th class="t-head" colspan="1"><center>Order No: <?php echo $row['invoice_no'];?></th>
		
			<th class="t-head" colspan="3"><center>Order Date : <?php echo $row['order_time'];?></th>

		  </tr>
		 
		    <tr>
			<th class="t-head head-it "><center>Products</th>
			<th class="t-head" ><center>Image</th>
			<th class="t-head"  ><center>Quantity</th>
			<th class="t-head"   ><center>Price</th>

		  </tr>
		  
		  <?php  $sum=0;
			$invoice_no = $row['invoice_no'];
		   $select_query1 = "SELECT * FROM orders where invoice_no='$invoice_no'";
					  $select_query_run1 =  mysqli_query($conn,$select_query1);
					while   ($row1 =  mysqli_fetch_array($select_query_run1))

                  {
					  
				$p_id = $row1['p_id'];
				 $select_query2 = "SELECT * FROM product where p_id='$p_id'";
					  $select_query_run2 =  mysqli_query($conn,$select_query2);
					while   ($row2 =  mysqli_fetch_array($select_query_run2))

                  {
			
				$sum+= $row2['p_price']*$row1['qty'];
					  
					  ?>
		  <tr class="cross">
		 	<td class="ring-in t-data">
				<h5><?php echo $row2['p_name'];?></h5>
		 
			 </td>
			  <td  class="ring-in t-data"><img src="image/<?php echo $row2['p_img'];?>" height="50" width="50" class="img-responsive" alt=""></td>
		
				<td class="t-data"><?php echo $row1['qty'];?></td>		
				<td class="t-data">Rs.<?php echo $row2['p_price'];?></td>
		 
			
		  </tr>
				 
				  <?php  } } ?>
			 <tr class="cross">
		 
		 <?php    if($row['order_status']=='Delivered'){?>
		 <td>	<h4><b style="color:green;"> <i class="fa fa-shopping-cart" style="color:green;"></i> Order Accepted </b> </h4> </td>
		  <?php } if($row['order_status']=='Active'){?>
		 <td  >	<h4><b style="color:blue;"> <i class="fa fa-shopping-cart" style="color:blue;"></i> Order Pending  </b> </h4> </td>
		  <?php } if($row['order_status']=='Rejected'){?>
		 <td  >	<h4><b style="color:red;"> <i class="fa fa-shopping-cart" style="color:red;"></i> Order Reject  </b> </h4> </td>
		  <?php }?> 
		  
		   
		 <td colspan="3">	<h4 style="float:right"><b>Total Bill Amount : <?php echo $sum;?> </h4> </td>
		 </tr>	  
				  
	 
	</table>
	
				  <?php }?>
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