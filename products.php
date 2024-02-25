<?php include 'header.php'?>
	<!-- //navigation -->
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
                            <li><a href="index.php" >Home</a></li>
                            <!-- Mega Menu -->
                            <li>
                                <a href="products.php" class="act">Products</a>
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
	<!-- banner -->
			<div id="slides" class="cover-slides">
				<ul class="slides-container">
					<li class="text-center">
						<img src="images/slider-01.jpg" alt="" width="100%" height="46%">
						<div class="container">	
							<div class="row">
							<li class="text-center">
				</li>
			</ul>
		</ul>
			
			</div>
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Products</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">

				<div class="col-md-12 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/slider-02.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<!-- <h3>sayur<span>Up To</span> 15% Discount</h3> -->
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/slider-03.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos">
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
                        <?php $mobile = $allCategoryObject->loadAllProduct(); if ($mobile): $j = 0; ?>
                            <?php while ($allMobile = $mobile->fetch_assoc()): $j++; ?>
                                <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                    <div class="agile_ecommerce_tab_left mobiles_grid">
                                        <div class="hs-wrapper hs-wrapper2">
                                            <?php for($i = 1; $i <= 5; ++$i):  ?>
                                            <img src="admin/<?php echo $allMobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $allMobile['proid'];?>" target="_blank" ><?php echo $allMobile['proname'];?></a></h5>
                                            <h3> Rp. <?php echo $allMobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px; margin-bottom: 10px">
                                            <a href="single.php?proid=<?php echo $allMobile['proid'];?>" target="_blank" class="btn btn-info">Details</a>
                                        </div>
                                        <?php if($j <= 2 ):  ?>
                                            <div class="mobiles_grid_pos">
                                                <h6>New</h6>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- Related Products -->
	<!-- //Related Products -->
	<!-- newsletter -->
	<?php include 'footer.php'; ?>