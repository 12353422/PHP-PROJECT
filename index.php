<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Frozen Food : Ordering System | Home </title>
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
<?php include('menu.php');?>


<?php  

 include("config.php");


if(isset($_POST["add_to_cart"]))
{
					$p_id=$_POST['p_id'];
					$qty=$_POST['quantity'];
					$c_id=$_SESSION['c_id'];
					
					$v_email=$_SESSION['c_email'];

 $sql = "INSERT INTO cart (c_id,p_id,v_email,qty) values ('$c_id','$p_id','$v_email','$qty')";
	 $result = mysqli_query($conn,$sql);
 
	if($result){
			
			//	 echo "<script>alert('Successfully Add Item')</script>";
				 
			echo"<script>window.open('{$_SERVER["HTTP_REFERER"]}','_self')</script>";
			} 
    		else
   				 {
				 echo "<script>alert('Error')</script>";

					echo"<script>window.open('{$_SERVER["HTTP_REFERER"]}','_self')</script>";
				}
				
				
				

		}

if(isset($_POST["add_to_wishlist"]))
		{
							$p_id=$_POST['p_id'];
							$qty=$_POST['quantity'];
							$c_id=$_SESSION['c_id'];
							$v_email=$_SESSION['c_email'];
		
		 $sql = "INSERT INTO wishlist (c_id,p_id,v_email,qty) values ('$c_id','$p_id','$v_email','$qty')";
			 $result = mysqli_query($conn,$sql);
		 
			if($result){
					
					//	 echo "<script>alert('Successfully Add Item')</script>";
						 
					echo"<script>window.open('{$_SERVER["HTTP_REFERER"]}','_self')</script>";
					} 
					else
							{
						 echo "<script>alert('Error')</script>";
		
							echo"<script>window.open('{$_SERVER["HTTP_REFERER"]}','_self')</script>";
						}
						
						
						
		
				}
?>

<body> 
  <!---->

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

	 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/ba.jpg" alt="First slide">
       
        </div>
        <div class="item">
        	<img class="second-slide " src="images/ba1.jpg" alt="Second slide">
         
        </div>
        <div class="item">
          <img class="third-slide " src="images/ba2.jpg" alt="Third slide">
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>

			 <?php  include("config.php");
                     $cnt=0;
                      $select_query= "Select * from product Orders LIMIT 40";
                      $select_query_run =     mysqli_query($conn,$select_query);
                      while   ($row=   mysqli_fetch_array($select_query_run) )
                  {
                          
              ?>
	<div class=" con-w3l">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"><!--?action=add&id=<?php echo $row["p_id"]; ?>-->
							
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal<?php echo $row['p_id'];?>" class="offer-img">
										<img src="image/<?= $row['p_img'];?>"  style="height:150px;  width:150px;" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html" ><?php  echo mb_strimwidth($row['p_name'], 0, 25, "..."); ?></a></h6>							
										</div>
										<div class="mid-2">
												<h3>Rs.<?php echo $row['p_price'];?></h3>
											  
											<div class="clearfix"></div>
										</div>
											<div class="add add-2">
											
				<input type="hidden" name="p_id" value="<?php echo $row['p_id'];?>">
				<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>" />
				<input type="hidden" name="hidden_price" value="<?php echo $row["p_price"]; ?>" />		
				
											<input  min="1" max="10" type="number" name="quantity" value="1" class="form-control text-center" />
<?php if(isset($_SESSION['c_email'])){?><br>
			<div class="btn">
			<input type="submit" class="btn btn-danger my-cart-btn my-cart-btn1 "  name="add_to_cart"  value="Add to Cart" />
			</div>
			<div class="btn">
			<input type="submit" class="btn btn-danger my-cart-btn my-cart-btn1 "  name="add_to_wishlist"  value="Add to Wishlist" />
			</div>
			<?php } ?>
						


										</div>
									</div>
								</div>
							</div> 
							</form>
							</div>
							
							
				<!-- product -->
			<div class="modal fade" id="myModal<?php echo $row['p_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="image/<?php echo  $row['p_img'];?>"  style="height:250px;  width:250px;" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3><?php  echo $row['p_name']; ?></h3>
								
								<p class="in-para">   <span class="reducedfrom ">Rs.<?php echo $row['p_price'];?></span></p>
									
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									<?php echo $row['p_desc'];?>
									</p>
									
									</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			
							<?php }
							?>
							
							
							
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>
<?php include('footer.php');?>

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