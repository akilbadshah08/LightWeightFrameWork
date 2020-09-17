<!DOCTYPE html>
<html>
<head>
	<title> LightWeightFrameWork | <?php echo $page ?> </title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo root_url() ?>assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo root_url() ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo root_url() ?>assets/css/theme.css">
  <link rel="stylesheet" href="<?php echo root_url() ?>https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="dashboard-bg">

	<div class="tab">
		<div class="sidebar-head">
			<div class="row">
				<div class="col-12">
					<div class="brand-des">
						<div class="cloth-logo">
							<img src="<?php echo root_url() ?>assets/images/v-logo.png" class="img-fluid">
						</div>
						<h4 class="brand-name"> Van Heusen </h4>
						<p class="user-name"> Harley Stephenson </p>						
					</div>
				</div>
			</div><!-- row -->
		</div><!-- end of sidebar-head -->

	  <button class="tablinks" onclick="openCity(event, 'dashboard')">  
	  	<span class=""> 
	  		<div class="normal"> <img src="<?php echo root_url() ?>assets/images/dash1.png"> Dashboard </div> 
	  		<div class="on-hover"> <img src="<?php echo root_url() ?>assets/images/dash2.png"> Dashboard </div> 
	  	</span>
	  </button><!-- dashboard -->

	  <button class="tablinks" onclick="openCity(event, 'profile')"> 
	  	<span class=""> 
	  		<div class="normal"> <img src="<?php echo root_url() ?>assets/images/pro1.png"> Profile </div> 
	  		<div class="on-hover"> <img src="<?php echo root_url() ?>assets/images/pro2.png"> Profile </div> 
	  	</span>
	  </button><!-- profile -->

	  <button class="tablinks" onclick="openCity(event, 'product')">  
	  	<span class=""> 
	  		<div class="normal"> <img src="<?php echo root_url() ?>assets/images/product1.png"> Products </div> 
	  		<div class="on-hover"> <img src="<?php echo root_url() ?>assets/images/product2.png"> Products </div> 
	  	</span>
	  </button><!-- products -->

	  <button class="tablinks" onclick="openCity(event, 'orders')" id="<?php echo $parentpage=='order'?'defaultOpen':'' ?>">  
	  	<span class=""> 
	  		<div class="normal"> <img src="<?php echo root_url() ?>assets/images/ord1.png"> Orders </div> 
	  		<div class="on-hover"> <img src="<?php echo root_url() ?>assets/images/ord2.png"> Orders </div> 
	  	</span>
	  </button><!-- Order -->

	  <button class="tablinks" onclick="openCity(event, 'payments')">  
	  	<span class=""> 
	  		<div class="normal"> <img src="<?php echo root_url() ?>assets/images/paym1.png"> Payments </div> 
	  		<div class="on-hover"> <img src="<?php echo root_url() ?>assets/images/paym2.png"> Payments </div> 
	  	</span>
	  </button><!-- Payment -->

	  <button class="tablinks" onclick="openCity(event, 'bankDetails')">  
	  	<span class=""> 
	  		<div class="normal"> <img src="<?php echo root_url() ?>assets/images/bank1.png"> Bank Details </div> 
	  		<div class="on-hover"> <img src="<?php echo root_url() ?>assets/images/bank2.png"> Bank Details </div> 
	  	</span>
	  </button><!-- Bank Details -->

	  <div class="logout-btn navigation">
	  	<!-- <a href="<?php echo root_url() ?>login.html" class="log-out"> <span> <i class="fa fa-sign-out"> </i> </span> Logout </a> -->
	  		<a class="button log-out" href="<?php echo root_url() ?>login.html"> <img src="<?php echo root_url() ?>assets/images/logout.png">			  
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
								<li> <a href="<?php echo root_url() ?>Javascript:void(0);"> <img src="<?php echo root_url() ?>assets/images/setting.png"> </li>
								<li> <a href="<?php echo root_url() ?>Javascript:void(0);"> <img src="<?php echo root_url() ?>assets/images/notification.png" class="ml-3"> </li>
							</ul>
						</div>
					</div>
				</div>			
			</div>
		</section>
