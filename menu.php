
<a><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo"> 
				<h1 ><a href="index.php"><b>T<br>H<br>E</b> &nbsp;Frozen  Food : Ordering System <span>Indian Style Frozen Food</span></a></h1>
			</div>
			
			
			<div class="head-t">
				<ul class="card">
			
			<?php session_start();
				if(isset($_SESSION['c_email'])){?>
				
								
				
				<li><a href="#"  >
				<li role="presentation" class="dropdown">
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Profile<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
				<li><a href="myaccount.php">My Account</a></li>
				<!--li><a href="change password.php">Change Password</a></li-->
				</ul>
			</li>	
<li><a href="my_order.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
			
				<!--li><a><?php //echo 'Welcome &nbsp;' .$_SESSION['c_f_name'];?></a></li-->
				
					<li><a href="logout.php" ><i class="fa fa-user" aria-hidden="true"></i> Logout</a></li>
					
					
					<?php
		}
		else
		{
		
					?>			
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
				
				</ul>

<?php
}
?>				
			</div>
			
			
			
			
			<!--div class="head-t">
				<ul class="card">
					<li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>	
			</div-->
			
			

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav " >
							<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown " >
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Category<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi" style="min-width:200px;" >
									<div class="row">
										<div class="col-sm-12 ">
											<ul class="multi-column-dropdown">
								 <?php  include("config.php");
                     $cnt=0;
                      $select_query= "Select * from category ";
                      $select_query_run =     mysqli_query($conn,$select_query);
                      while   ($row=   mysqli_fetch_array($select_query_run) )
                  {
                          
              ?>
												<li><a href="view.php?cat_title=<?php echo $row['cat_title'];?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $row['cat_title'];?></a></li>
											
										<?php } ?>
											</ul>
										
										</div>
								 
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							
							<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
							<li><a href="about.php" class="hyper"><span>About Us</span></a></li>
							<li><a href="Feedback.php" class="hyper"><span>Feedback</span></a></li>
							<li><a href="Complain.php" class="hyper"><span>Complain</span></a></li>
						</ul>
					</div>
					</nav>
					<?php 
				if(isset($_SESSION['c_email'])){?>
			
					<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								 <?php 
							include('config.php');	
					if(isset($_SESSION['c_id'])){ 
								$c_id=$_SESSION['c_id'];
							$user=mysqli_query($conn,"Select * from cart where c_id='$c_id'");
							$count1= mysqli_num_rows($user);
							}else
							{
								$count1=0;
							
							}

							?>
							
							
								<a href="mycart.php" class="notification">
										<i class="fa fa-shopping-cart" style="font-size:40px;color:green"> </i>
										 <span class="badge"><?php echo $count1?></span>
									</a>
									</div>
							
							</div>
						<?php }?>

							<?php 
				if(isset($_SESSION['c_email'])){?>
			
					<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								 <?php 
							include('config.php');	
					if(isset($_SESSION['c_id'])){ 
								$c_id=$_SESSION['c_id'];
							$user=mysqli_query($conn,"Select * from wishlist where c_id='$c_id'");
							$count1= mysqli_num_rows($user);
							}else
							{
								$count1=0;
							
							}

							?>
								<a href="mywishlist.php" class="notification">
										<i class="fa fa-plus" style="font-size:40px;color:green"> </i>
										 <span class="badge"><?php echo $count1?></span>
									</a>
									 
							</div>
							
						</div>
					<?php }?>
						
					<?php if(isset($_SESSION['c_email'])){?>
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1" style="width:150px">
								  
								<b><a><?php echo 'Welcome &nbsp;' .$_SESSION['c_f_name'];?></a></b>
								<img src="image/<?php echo $_SESSION['c_img']; ?>" height="40px;" style="border-radius: 20%;"></img> 	 
							</div>
							
						</div>
						<!--div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								  
								<img src="image/<?php echo $_SESSION['c_img']; ?>" height="40px;" ></img> 
							</div>
							
						</div-->
						                  
						<?php }?>
						
					 
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
