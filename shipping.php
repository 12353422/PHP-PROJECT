


<!DOCTYPE html>
<html>
<head>
<title>Frozen Food : Ordering System | My cart </title>
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
		 
<!---//End-rate---->

</head>
<body>



<?php include ('menu.php');?>  <!---->

<?php 
include('config.php');
if (isset($_GET['cart_id'])){
                       $cart_id=$_GET['cart_id'];

                      $select_query= "DELETE from cart where cart_id=$cart_id";
                      $select_query_run =     mysqli_query($conn,$select_query);
           }
		   
		   
			$invoice_no=date('Ymdhis');

if(isset($_POST['order'])){
			   
			$p_id = $_POST['p_id'];
			$qty = $_POST['qty'];
            $shipping_address = $_POST['shipping_address'];
			$c_id = $_SESSION['c_id'];
		  	for($i=0; $i<sizeof($p_id); $i++) {
		  
		   $qry1="INSERT into orders(invoice_no,p_id,c_id,qty,shipping_address)
			values('$invoice_no','$p_id[$i]','$c_id','$qty[$i]','$shipping_address')" or die (mysqli_error());
            
	    
		 mysqli_query($conn,$qry1);
		  }  
		  
		  // CART ALL  VALUE DELETE 
			$qry2= "delete from cart where c_id=$c_id";
			mysqli_query($conn,$qry2);
			echo"<script>window.open('mycart.php','_self')</script>";	
		   }
		 // <!--------------Cart Item -------------------->
		 
		 if (isset($_GET['plus'])){
                       $cart_id = $_GET['plus'];
			
			$query = "SELECT qty FROM cart where cart_id ='$cart_id'";
			$run_query = mysqli_query($conn, $query);
            while($r = mysqli_fetch_array($run_query)){
			$q = $r['qty'];
			}
					$qty = $q+1;
		
  mysqli_query($conn,"update cart set qty='$qty' where cart_id='$cart_id'")or die(mysqli_error());
			
			 	
			 echo "<script>window.location.replace('shipping.php');</script>";
		               
           }
		   
		   	 if (isset($_GET['minus'])){
                       $cart_id = $_GET['minus'];
			
			$query = "SELECT qty FROM cart where cart_id ='$cart_id'";
			$run_query = mysqli_query($conn, $query);
            while($r = mysqli_fetch_array($run_query)){
			$q = $r['qty'];
			}
					$qty = $q-1;
		
  mysqli_query($conn,"update cart set qty='$qty' where cart_id='$cart_id'")or die(mysqli_error());
			
				
			 echo "<script>window.location.replace('shipping.php');</script>";
		               
           }
		   
	?>
   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >My Cart</h3>
		<h4><a href="index.html">Home</a><label>/</label>My Cart</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>My Cart</h3>
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
 <form action="shipping.php" method="post">
					
		  <tr>
			<th class="t-head " width="20%"><center>Products</th>
			<th class="t-head " width="10%"><center>Image</th>
			<th class="t-head"  width="40%"><center>Quantity</th>
			<th class="t-head"  width="10%"><center>Price</th>
			<th class="t-head"  width="10%"><center>Sub Total</th>

			<th class="t-head"  width="20%"><center>Remove</th>
		  </tr>
		  
		   <?php  
		
			include("config.php");
			$tot=0;
				$c_id=$_SESSION['c_id'];
                      $select_query= "Select * from cart  where c_id='$c_id'";
                      $select_query_run =  mysqli_query($conn,$select_query);
						$numrow = mysqli_num_rows ($select_query_run);
                      while   ($row=   mysqli_fetch_array($select_query_run))

                  {
					  $p_id = $row['p_id'];
				   $select_query1= "Select * from product  where p_id='$p_id'";
                      $select_query_run1 =     mysqli_query($conn,$select_query1);
                      while   ($row1=   mysqli_fetch_array($select_query_run1))
					  {
					$tot+= $row1['p_price']*$row['qty'];
                          
              ?>
			  
		  <tr class="cross">
			<td class="ring-in t-data">
			<div class="sed">
				<h5><?php echo $row1['p_name'];?></h5>
			</div> 
			
			 </td>
			 
			 	<td  class="t-data">
					<img src="image/<?php echo $row1['p_img'];?>" height="50" width="50" class="img-responsive" alt="">
			
			</td>
			<td class="t-data">
		
			<div class="quantity"> 
		<div class="quantity-select">            
		<a href="shipping.php?minus=<?php echo $row['cart_id'];?>">	<div class="entry value-minus">&nbsp;</div></a>
				<div class="entry value"><span class="span-1"><?php echo $row['qty'];?></span></div>									
			<a href="shipping.php?plus=<?php echo $row['cart_id'];?>">	<div class="entry value-plus active">&nbsp;</div></a>
		</div>
			 </div>
			
			</td>
			<td class="t-data">Rs.<?php echo $row1['p_price'];?></td>
			<td class="t-data">Rs.<?php echo $row1['p_price']*$row['qty'];?></td>
			
			
			<td  class="t-data">
				<center><a href="shipping.php?cart_id=<?php echo $row['cart_id'];?>"onclick="return confirm('Are You Sure Remove Product?');">
 

 <i class="fa fa-times" style="font-size:35px; color:red;" aria-hidden="true"></i> </center>
				 
			
			</td>
			<input type="hidden" name="p_id[]" value="<?php echo $row['p_id'];?>" >
			<input type="hidden" name="qty[]" value="<?php echo $row['qty'];?>" >
			
			
		  </tr>
				  <?php } } if($numrow > 0){?>
				  
				    <tr>
		  <td colspan="4"><h4>Total Bill Amount : </td>
	
	
						<td><h4>Rs.<?php echo $tot;?> <input type="hidden" name="tot_amt" value="<?php echo $tot; ?>" id="total_amount">
						
						 <input type="hidden" name="c_firstname" value="<?php echo $_SESSION['c_f_name'];?>" id="customer_name"> 
					 <input type="hidden" name="c_email" value="<?php echo $_SESSION['c_email'];?>" id="c_email"> 
						 <input type="hidden" name="c_phn" value="<?php echo $_SESSION['c_phn'];?>" id="c_phn"> 
						 <input type="hidden" name="c_id" value="<?php echo $_SESSION['c_id'];?>" id="c_id"> 
						</td>
						<td></td>
		  </tr>
				  
          
        <h3>Enter Shipping Address :</h3><br>
        <textarea class="form-control" name="shipping_address" rows="4" type="text" placeholder="Enter Shipping Address" required id="shipping_address1"></textarea><br>
            
            
		  
		  <tr>
		  <td colspan="5">
		  
		  <td>
          <!--Old one without payment module-->
           <!--input type="submit" name="order" value="PLACE ORDER" style="float:right;"class="btn btn-success"-->
		   <!---->
		   <button  type="button" id="razor-pay-now" cstyle="float:right;"class="btn btn-success">Proceed To Pay</button>
		  </td>
		  		
		  </tr>
          
		  
		  <?php }else{ ?>
		  
		  <tr>
		  <td colspan="5"> 
		  <center><h2>Your cart is empty!</h2>
		  		</td>
		  </tr>
		  <?php }?>
		  </form>
	</table>
	
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
	
		 </div>
		 </div>
<!--Payment Code-->		


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
   jQuery(document).on('click', '#razor-pay-now', function (e) { 
     e.preventDefault();
     //alert("button click");
			   var total_amount = $('#total_amount').val();
			 var customer_name = $('#customer_name').val();
			 var c_email = $('#c_email').val();
			 var c_id = $('#c_id').val();
			  var c_phn = $('#c_phn').val();
			   var shipping_address1 = $('#shipping_address1').val();
			    //var ca_id = $('#ca_id').val();
			   // var studio_name = $('#studio_name').val();
			   // var password = $('#password').val();
			   
				//var image = $("#ph_image").prop("files")[0];
				
				//alert(total_amount);

	var totalAmount = total_amount*100;

    var merchant_total = totalAmount;
    
    var merchant_order_id = "123";
    var currency_code_id = "INR";
     var options = {
    "key": "rzp_test_98Ozda9wzffKQ6",
    "amount": merchant_total, // 2000 paise = INR 20
    "name": "FrozenFood",
    "description": "Frozen Food",

    "currency" : "INR",
    "netbanking" : true,
    prefill: {
            name: customer_name,
           email: c_email,
            contact: c_phn,

        },
     notes: {
            soolegal_order_id: merchant_order_id,
        },
    "handler": function (response){
    	  	//alert("inside ajax");
			 window.location.href = 'http://localhost:81/frozenfood/callback.php?add='+shipping_address1+'&tot='+totalAmount+"&c_id="+c_id+"&c_email="+c_email;
			  //   window.location = res.redirectURL;
			 
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();

} );

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