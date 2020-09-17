<!DOCTYPE html>
<html>
<head>
	<title> LightWeightFrameWork | <?php echo $page ?> </title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="dashboard-bg">

	<div class="tab">
		<div class="sidebar-head">
			<div class="row">
				<div class="col-12">
					<div class="brand-des">
						<div class="cloth-logo">
							<img src="assets/images/v-logo.png" class="img-fluid">
						</div>
						<h4 class="brand-name"> Van Heusen </h4>
						<p class="user-name"> Harley Stephenson </p>						
					</div>
				</div>
			</div><!-- row -->
		</div><!-- end of sidebar-head -->

	  <button class="tablinks" onclick="openCity(event, 'dashboard')">  
	  	<span class=""> 
	  		<div class="normal"> <img src="assets/images/dash1.png"> Dashboard </div> 
	  		<div class="on-hover"> <img src="assets/images/dash2.png"> Dashboard </div> 
	  	</span>
	  </button><!-- dashboard -->

	  <button class="tablinks" onclick="openCity(event, 'profile')"> 
	  	<span class=""> 
	  		<div class="normal"> <img src="assets/images/pro1.png"> Profile </div> 
	  		<div class="on-hover"> <img src="assets/images/pro2.png"> Profile </div> 
	  	</span>
	  </button><!-- profile -->

	  <button class="tablinks" onclick="openCity(event, 'product')">  
	  	<span class=""> 
	  		<div class="normal"> <img src="assets/images/product1.png"> Products </div> 
	  		<div class="on-hover"> <img src="assets/images/product2.png"> Products </div> 
	  	</span>
	  </button><!-- products -->

	  <button class="tablinks" onclick="openCity(event, 'orders')" id="<?php echo $parentpage=='order'?'defaultOpen':'' ?>">  
	  	<span class=""> 
	  		<div class="normal"> <img src="assets/images/ord1.png"> Orders </div> 
	  		<div class="on-hover"> <img src="assets/images/ord2.png"> Orders </div> 
	  	</span>
	  </button><!-- Order -->

	  <button class="tablinks" onclick="openCity(event, 'payments')">  
	  	<span class=""> 
	  		<div class="normal"> <img src="assets/images/paym1.png"> Payments </div> 
	  		<div class="on-hover"> <img src="assets/images/paym2.png"> Payments </div> 
	  	</span>
	  </button><!-- Payment -->

	  <button class="tablinks" onclick="openCity(event, 'bankDetails')">  
	  	<span class=""> 
	  		<div class="normal"> <img src="assets/images/bank1.png"> Bank Details </div> 
	  		<div class="on-hover"> <img src="assets/images/bank2.png"> Bank Details </div> 
	  	</span>
	  </button><!-- Bank Details -->

	  <div class="logout-btn navigation">
	  	<!-- <a href="login.html" class="log-out"> <span> <i class="fa fa-sign-out"> </i> </span> Logout </a> -->
	  		<a class="button log-out" href="login.html"> <img src="assets/images/logout.png">			  
			  	<div class="logout">Logout</div>
				</a>
	  </div><!-- Logout Button -->
	</div><!-- end of tab -->

	<div class="main-section">
		<section class="aside-header mb-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<div class="a-header-left">

						</div>
					</div><!-- end of col-6 -->

					<div class="col-6">
						<div class="a-header-right">
							<ul>
								<li> <a href="Javascript:void(0);"> <img src="assets/images/setting.png"> </li>
								<li> <a href="Javascript:void(0);"> <img src="assets/images/notification.png" class="ml-3"> </li>
							</ul>
						</div>
					</div>
				</div>			
			</div>
		</section>
