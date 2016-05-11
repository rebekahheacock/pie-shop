<?php 
	$pagetitle = "Grandma's Pie Shop: Order Pies";
	include("includes/header.php"); 
?>

<header class="header-order">
	<div class="container">
		<div class="header-text">
			<h1 class="white">Order Pies</h1>
		</div>
	</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<p class="lead">Mmmm, tasty.</p>

			<p>We're looking forward to sharing one of our delicious pies with you. Just fill out the form on this page, and we'll give you a call to confirm your order and set up a time for delivery or pick up!</p>
		</div>
		<div class="col-sm-8">

			<p class="lead">Order Pies</p>
			<form method="post" action="#">
				<div class="form-group">
					<label for="name">Name</label>
    				<input type="text" class="form-control" id="name" placeholder="Name">
				</div>

				<div class="form-group">
					<label for="phone">Phone number</label>
    				<input type="tel" class="form-control" id="phone" placeholder="xxx-xxx-xxxx">
				</div>

				<div class="form-group">
					<label for="email">Email address</label>
    				<input type="email" class="form-control" id="email" placeholder="Email">
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="pickup_or_del" id="pickup" value="pickup" checked>
						Pickup
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="pickup_or_del" id="delivery" value="delivery">
						Delivery (only available in MA, NH, RI, and VT)
					</label>
				</div>

				<div id="deliveryaddress">
					<div class="form-group">
						<label for="street">Street address</label>
	    				<input type="text" class="form-control" id="street" placeholder="Street address">
					</div>

					<div class="form-group">
						<label for="city">City</label>
	    				<input type="text" class="form-control" id="city" placeholder="City">
					</div>

					<label for="state">State</label>
					<select class="form-control" id="state">
						<option value="MA">Massachusetts</option>
						<option value="NH">New Hampshire</option>
						<option value="RI">Rhode Island</option>
						<option value="VT">Vermont</option>
					</select> 
				</div>

				<fieldset>
					<legend>Pies</legend>

					<span class="help-block">Featured Pies</span>
					<div class="form-group">
						<input type="number" class="form-control" id="strawberry" min="0" max="12" step="1">
						<label for="strawberry">Strawberry Rhubarb</label>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="blueberry" min="0" max="12" step="1">
						<label for="blueberry">Blueberry Basil</label>
					</div>

					<span class="help-block">Year-Round Pies</span>
					<div class="form-group">
						<input type="number" class="form-control" id="apple" min="0" max="12" step="1">
						<label for="apple">Apple</label>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="pear" min="0" max="12" step="1">
						<label for="pear">Ginger Pear</label>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="peach" min="0" max="12" step="1">
						<label for="peach">Peach</label>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="lemon" min="0" max="12" step="1">
						<label for="lemon">Lemon Meringue</label>
					</div>
					
				</fieldset>

				<span id="helpBlock" class="help-block">After you submit your order, we'll give you a call to confirm and schedule delivery or pickup.</span>

				<button type="submit" class="btn btn-default">Submit Order</button>

			</form>
		</div>
	</div>
</div>


<?php include("includes/footer.php") ?>

