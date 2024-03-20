<?php
    include 'header.php';
?>
	<!-- //navigation -->
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
                                <a href="products.php" >Products</a>
                            </li>
                            <li><a href="about.php" class="act">About Us</a></li>
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
	<div>
		<img src="images/slider-01.jpg" alt="" width="100%" height="500">
			<h2></h2>
		</div>
	</div>
	
	<!-- //banner -->   
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Tentang kami</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- about -->
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-6 w3ls_about_grid_left">
					<p>selamat datang di website saya website ini mengambil tema penjualan toko kebutuhan
						memasak seperti frozen food sayur dan daging website ini mengunakan hanya 3 bahasa saja #yaaitu 
						css php dan js untuk animasi.</p>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p>kalian juga bisa meng share page website ini keteman teman kalian 
							untuk menjadi suatu refensi ketika ada tugas -gerallt.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
					</div>
					<!-- <div class="col-xs-10 w3ls_about_grid_left2">
						<p>tambahin kata katar.</p>
					</div> -->
					<div class="clearfix"> </div>
				</div>
				<!-- <div class="col-md-6 w3ls_about_grid_right">
					<img src="images/.jpg" alt=" " class="img-responsive" />
				</div> -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- team -->
	<div class="team">
		<div class="container">
			<h3>tim pembuatan website ini</h3>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<img src="images/t4.png" alt=" " class="img-responsive" />
					<h4>gerallt putra agustinus <span>all role</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
			
	<!-- //team -->
	<!-- team-bottom -->
	<div class="team-bottom">
		<div class="container">
			<h3>Sudah siap untuk belanja <span> </span></h3>
			 <!-- <p>ini isi nya desc</p>  -->
			<a href="products.php">Shop Now</a>
		</div>
	</div>
	<!-- //team-bottom -->
	
	<?php include 'footer.php' ?>