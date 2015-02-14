<div class="container">
	<h1>Check out</h1>
	<table class="table">
		<tr>
			<td>Quantity</td>
			<td>Description</td>
			<td>Price</td>
			<td></td>
		</tr>
	
		<tr>
		<?php foreach ($cart as $value) 
		{ 
			?>
			<td><?=$value['quantity']?></td>
			<td><?=$value['description']?></td>
			<td><?=$value['price']?></td>
		<form action="/main/delete" method="post">
			<input type="hidden" name="delete" value="<?=$value['order_id']?>">
			<td><input type="submit" class="btn btn-danger" value="Delete"></td>
		</form>
		</tr> 
		<?php } ?>
		<?php 	
			$sum = $value['price'] * $value['quantity'];
			$total = $sum + $sum;
		?>
		
	</table>
	<h3>Total  = $ <?=$total ?></h3>
	

<!-- 	<form action="/main/check_out" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Address</label>
		    <input type="text" name="address" class="form-control" placeholder="Address">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Credit Card</label>
		    <input type="text" name="card" class="form-control" placeholder="Credit card">
		  </div>
		  <button type="submit" class="btn btn-danger">Check out</button>
	</form> -->
</div>