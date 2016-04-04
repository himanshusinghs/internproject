<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="shortcut icon" href="https://venturepact.com/favicon.ico">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Dashboard">
		<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

		<title>Venturepact</title>
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
		<!-- Bootstrap core CSS -->
		<link href="imp/css/bootstrap.css" rel="stylesheet">
		<!--external css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/dashboard/css/tabs.css">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/style/dashboard/css/dash-style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/dashboard/css/bootstrap-multiselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/dashboard/css/prettify.css">
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/style/dashboard/css/user-dash-style.css" rel="stylesheet">
		<script src="imp/js/chart-master/Chart.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-spy="scroll" data-target="scroll-spy" data-offset="20">


		<section id="container" >
		<!--header start-->
		<header class="header black-bg">
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
			</div>
			<!--logo start-->
			<a href="index.html" class="logo"><img src="imp/img/vp_icon.png"><b>VenturePact</b></a>
			<!--logo end-->
			<div class="top-menu">
				<ul class="nav pull-right top-menu">
					<li><a class="logout" href="#">Logout</a></li>
				</ul>
			</div>
		</header>
		<!--header end-->

		<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<aside class="full-height" id="scroll-spy">
				<ul>
					<li class="active"><a href="#section1-row">Product Information</a></li>
					<li><a href="#section2-row">Company Information</a></li>
					<li><a href="#section3-row">Transactions</a></li>
					<li><a href="#section4-row">Reviews</a></li>
				</ul>
			</aside>
			<main class="main-wrap">
			<div>
				<div class="row">
					<div id="section1-row">
						<h4>Account Information</h4>
							<figure><img src="imp/img/friends/fr-01.jpg" alt="product logo"></figure>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="control-label col-sm-2" for="name">Name:</label>
									<div class="col-sm-10">
										<i class="fa fa-users col-lg-1"></i>
									    <input type="text" class="input-box col-lg-11" id="text" placeholder="Enter name">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="email">Email:</label>
									<div class="col-sm-10">
										<i class="fa fa-envelope-o col-lg-1"></i>
									    <input type="text" class="input-box col-lg-11" id="pwd" placeholder="Enter email">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="pwd">Password:</label>
									<div class="col-sm-10">
										<i class="fa fa-lock col-lg-1"></i>
									    <input type="text" class="input-box col-lg-11" id="pwd" placeholder="Enter password">
									</div>
								</div>
								<div class="form-group">
								<label class="col-sm-2 control-label pl0 pr0 rs-hide" for="">Role:</label>
								<div class="col-sm-12 col-md-10 col-xs-12">
									<select data-parsley-required-message="Designation is required" tabindex="3" class="selectpicker show-tick form-control input-group brr required dropdown-input" data-live-search lastEdit="false" name="Users[role]" id="Users_role">
										<option value="">Select Designation...</option>
										<option value="CEO">CEO</option>
										<option value="Founder">Founder</option>
										<option value="President">President</option>
										<option value="CTO">CTO</option>
										<option value="Sales &amp; Business Development">Sales &amp; Business Development</option>
										<option value="CEO &amp; Founder">CEO &amp; Founder</option>
										<option value="Project Manager">Project Manager</option>
										<option value="Product Manager">Product Manager</option>
										<option value="Developer">Developer</option>
										<option value="QA">QA</option>
										<option value="Team Lead">Team Lead</option>
										<option value="UX/UI Designer">UX/UI Designer</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="conn-link">Connected Accounts:</label>
								<div class="col-sm-3">
									<a id="conn-link" href="#" class="btn btn-style form-control" type="button">Connected</a>
								</div>
								<div class="col-sm-5">
									<a id="conn-link" href="#" class="btn btn-style form-control" type="button">Connect Google Account</a>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="conn-link">Payments:</label>
								<div class="col-sm-6">
									<a id="conn-link" href="#" class="btn btn-style form-control" type="button">Link Bank or CC Accounts</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row" id="section2-row" style="padding-top: 50px">
						<h4>Company Information</h4>
						<form class="form-horizontal" role="form">
						<div class="form-group "style="padding-top: 60px">
							<label class="control-label col-sm-2" for="name">Company Name:</label>
							<div class="col-sm-10">

								<input type="text" class="form-control input-box" id="text" placeholder="Enter name">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label pl0 pr0 rs-hide" for="">Company Size:</label>
							<div class="col-sm-12 col-md-10 col-xs-12">
								<select data-parsley-required-message="Designation is required" tabindex="3" class="selectpicker show-tick form-control input-group brr required dropdown-input" data-live-search lastEdit="false" name="Users[role]" id="Users_role">
									<option value="">No. of employees..</option>
									<option value="1">1-5</option>
									<option value="Founder">5-50</option>
									<option value="President">50-200</option>
									<option value="CTO">200-1000</option>
									<option value="QA">1000+</option>
								</select>
							</div>
 						</div>
						<div class="form-group ">
							<label class="control-label col-sm-2" for="location">Location:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control input-box" id="text" placeholder="Enter your Location">
							</div>
						</div>
						<div class="form-group ">
							<label class="control-label col-sm-2" for="website">Website:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control input-box" id="text" placeholder="http://www.abc.com">
							</div>
						</div>
					</form>
				</div>
				<div class="row" style="padding-top: 50px">
					<h4>Users</h4>
					<div class="row" style="padding-top:50px">
						<center>No collaborators Added</center>
					</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<a id="conn-link" href="#" class="btn btn-style form-control" type="button">Add a Collaborator</a>
						</div>
					</div>
				</div>
				<div class="row" id="section3-row" style="padding-top: 50px">
					<h4>Payments</h4>
					<div class="col-md-12 mt30">
						<div class="table-b ">
							<table class="table  bg_white fs11 font_newregular">
								<thead class="dark-blue-new">
									<tr class="fs10">
										<th width="15%">DEVELOP TEAM</th>
										<th width="13%">MILESTONE / INVOICE NO</th>
										<th width="16%">PAYMENT FUNDED DATE</th>
										<th width="11%">PAYMENT MODE</th>
										<th width="6%">PAYMENT RELEASED DATE</th>
										<th width="5%">STATUS</th>
										<th width="9%">MILESTONE AMOUNT</th>
										<th width="11%">PLATFORM FEES</th>
										<th width="11%">TOTAL AMOUNT</th>
									</tr>
									<tbody>
										<tr class="table-bb row-bg">
											<td>ABC</td>
											<td>ABC</td>
											<td>ABC</td>
											<td>ABC</td>
											<td>ABC</td>
											<td>ABC</td>
											<td>ABC</td>
											<td>ABC</td>
											<td>ABC</td>
										</tr>
									</tbody>
								</thead>
							</table>
						</div>
					</div>
					<div class="col-md-12 mt30">
						<div class="table-b ">
							<table class="table  bg_white fs11 font_newregular">
								<thead class="dark-blue-new">
									<tbody class="fs11 table-bb row-bg">
										<tr>
											<td>a. Total Payable </td>
											<td>$0.00
										</td>
										<tr>
											<td>b. Amount in Escrow </td>
											<td>$0.00
										</td>
										<tr>
											<td>c. Released </td>
											<td>$0.00
										</td>
										<tr>
											<td>Total Spending via Venturepact</td>
											<td>$0.00
										</td>
									</tbody>
								</thead>
							</table>
						</div>
					</div>
				</div>
				<div class="row" id="section4-row" style="padding-top: 50px">
					<h4>Reviews</h4>
					<div class="row" style="padding-top:50px">
						<center>Reviews</center>
					</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<a id="conn-link" href="#" class="btn btn-style form-control" type="button">Show Reviews</a>
						</div>
					</div>
				</div>
			</div>
		</main>

	</div>
</section>
</section>
	footer start
	<footer class="site-footer">
			<div class="text-center">
					2014 - Alvarez.is
					<a href="index.html#" class="go-top">
							<i class="fa fa-angle-up"></i>
					</a>
			</div>
	</footer>
	<!--footer end
	</section>



		<!-- js placed at the end of the document so the pages load faster -->
	<!-- 	<script src="imp/js/jquery.js"></script>
		<script src="imp/js/jquery-1.8.3.min.js"></script>
		<script src="imp/js/bootstrap.min.js"></script>
		<script class="include" type="text/javascript" src="imp/js/jquery.dcjqaccordion.2.7.js"></script>
		<script src="imp/js/jquery.scrollTo.min.js"></script>
		<script src="imp/js/jquery.nicescroll.js" type="text/javascript"></script>
		<script src="imp/js/jquery.sparkline.js"></script> -->


<!-- 	common script for all pages-->
<!-- 		<script src="imp/js/common-scripts.js"></script> -->

		<!--script for this page-->
		<!-- <script src="imp/js/sparkline-chart.js"></script> -->
	</body>
</html>
