<?php
    include 'header.php';
?>
   <div class="navigation">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php" class="act">Home</a></li>
                            <!-- Mega Menu -->
                            <li>
                                <a href="products.php" >Products</a>
                            </li>
                            <li><a href="about.php">About Us</a></li>
                            <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php if (Session::get("userLogin")): ?>
                                        <li><a href="cart.php">My Cart</a></li>
                                    <?php endif; ?>
                                    <li><a href="mail.php">Mail Us</a></li>
                                </ul>
                            </li>
                            <?php if (Session::get("userLogin")): ?>
                                <li><a href="profile.php">Profile</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
	<!-- //navigation -->
	<!-- banner -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slider-01.jpg" alt="" width="100%" height="500">
				<div class="container">	
					<div class="row">
					<li class="text-center">
		</li>
	</ul>
</ul>
	
	</div>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<?php include 'slider.php'?>
	<!-- //banner-bottom --> 
	<!-- banner-bottom1 -->
	
	<!-- //banner-bottom1 --> 
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="images/promo.jpg" alt=" " class="img-responsive"/>
					</div>

							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t2.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Michael</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t3.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Rosy</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
						<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<!-- <div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="images/20.jpg" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Women's <span>Special</span></h4>
						<h5>save up <span>to</span> 30%</h5>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special-deals -->
	<!-- new-products -->

	<!-- //new-products -->
	


	<!-- newsletter -->
	<?php include 'footer.php' ?>