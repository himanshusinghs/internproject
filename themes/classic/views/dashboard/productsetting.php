<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/dashboard/css/tabs.css">

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/dashboard/css/bootstrap-multiselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/dashboard/css/prettify.css">
<section class="wrapper">
	<div class="row">
		<aside class="full-height">
			<ul>
				<li><a href="#product_information">Product Information</a></li>
				<li><a href="#company_information">Company Information</a></li>
				<li><a href="#social_media">Social Media Links</a></li>
				<li><a href="#transactions">Transactions</a></li>
			</ul>
		</aside>
		<main class="main-wrap">
			<div class="prod-edit-container">
				<div class="row" id="product_information">
					<h4>Product Information</h4>
					<figure><img src="imp/img/friends/fr-01.jpg" alt="product logo"></figure>
					<form class="container-fluid" id="product_information">
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Name:</label>
							<div class="input col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<i class="fa fa-product-hunt fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<input type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-11" name="product_name" value="Salesforce">
							</div>
						</div>
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Description:</label>
							<div class="input col-lg-10">
								<i class="fa fa-bars fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<textarea class="col-lg-11 col-md-1 col-sm-1 col-xs-1" name="product_description">Bla... Bla...</textarea>
							</div>
						</div>
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Website:</label>
							<div class="input col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<i class="fa fa-globe fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<input type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
							</div>
						</div>
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Category:</label>
							<div class="input col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<i class="fa fa-product-hunt fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<select id="category" name="multiselect[]" multiple="multiple" class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
									<option value="5">Option 5</option>
									<option value="6">Option 6</option>
								</select>
							</div>
						</div>
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Customers:</label>
							<div class="input col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<i class="fa fa-users fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<input type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
							</div>
						</div>
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Price:</label>
							<div class="input col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<i class="fa fa-money fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<input type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
							</div>
						</div>
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Pricing Details:</label>
							<div class="input col-lg-10">
								<i class="fa fa-money fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<textarea class="col-lg-11 col-md-1 col-sm-1 col-xs-1" name="pricing_details">Bla... Bla...</textarea>
							</div>
						</div>
						<div class="row">
							<div class="input-full-radio">
								<input type="radio" id="ppc0" name="ppc" checked />
								<label for="ppc0" class="col-lg-6">PPC</label>
								<input type="radio" id="ppc1" name="ppc"/>
								<label for="ppc1" class="col-lg-6">No PPC</label>
							</div>
						</div>
						<div class="row">
							<div class="input-full-radio">
								<input type="radio" id="trial0" name="trial" checked/>
								<label for="trial0" class="col-lg-6">Trial Available</label>
								<input type="radio" id="trial1" name="trial"/>
								<label for="trial1" class="col-lg-6">No Trial Available</label>
							</div>
						</div>
						<div class="row">
							<div class="input-full-radio">
								<input type="radio" id="free0" name="free_version" checked/>
								<label for="free0" class="col-lg-6">Has Free Version</label>
								<input type="radio" id="free1" name="free_version"/>
								<label for="free1" class="col-lg-6">Only Paid</label>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 submit-part">
								<input type="submit" value="Save" name="submit"/>
							</div>
						</div>
					</form>
				</div>
				<div class="row" id="company_information">
					<h4>Company Information</h4>
					<form class="container-fluid" id="product_information">
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Name:</label>
							<div class="input col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<i class="fa fa-building fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<input type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-11" name="product_name" value="Salesforce"/>
							</div>
						</div>
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Website:</label>
							<div class="input col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<i class="fa fa-globe fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<input type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-11" name="product_name" value="Salesforce"/>
							</div>
						</div>
						<div class="row">
							<label class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Founding Year:</label>
							<div class="input col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<i class="fa fa-calendar-o fa-1x col-lg-1 col-md-1 col-sm-1 col-xs-1">
								</i>
								<input type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-11" name="product_name" value="Salesforce"/>
							</div>
						</div>
						<div class="row">
							<div class="input-dash-full resp-half">
								<i class="fa fa-codiepie col-lg-1 col-md-1 col-sm-1 col-xs-1"></i>
								<select class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
									<option>Select a Country</option>
									<option>Amazon</option>
									<option>Ghana</option>
								</select>
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
  $('#editProduct').addClass('active');
</script>